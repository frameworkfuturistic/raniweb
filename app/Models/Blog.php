<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
   use HasFactory;
   protected $table = 'blogs';
    
   public static function getSingle($id){
      return self::find($id);
   }

   public static function getRecord(){
      // DB::enableQueryLog();
      $val = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name', 'categories.slug as category_slug')
               ->join('users', 'users.id', '=', 'blogs.user_id')
               ->join('categories', 'categories.id', '=', 'blogs.category_id');
      if(!empty(Auth::check()) && Auth::user()->is_admin !=1) {
         $val = $val->where('blogs.user_id', '=', Auth::user()->id);
      }

      if(!empty(request()->get('id'))){
         $val = $val->where('blogs.id', '=', request()->get('id'));
      }
      if(!empty(request()->get('username'))){
         $val = $val->where('users.name', 'like', '%'.request()->get('username').'%');
      }
      if(!empty(request()->get('title'))){
         $val = $val->where('blogs.title', 'like', '%'.request()->get('title').'%');
      }
      if(!empty(request()->get('category'))){
         $val = $val->where('categories.name', 'like', '%'.request()->get('category').'%');
      }
      if(!empty(request()->get('is_published'))){
         $flag = request()->get('is_published');
         if($flag == 100){
            $flag = 0;
         }
         $val = $val->where('blogs.is_published', '=', $flag);
      }
      if(!empty(request()->get('status'))){
         $flag = request()->get('status');
         if($flag == 100){
            $flag = 0;
         }
         $val = $val->where('blogs.status', '=', $flag);
      }
      // Start Date
      if(!empty(request()->get('start_date'))){
         $val = $val->whereDate('blogs.created_at', '>=', request()->get('start_date'));
      }
      // End Date
      if(!empty(request()->get('end_date'))){
         $val = $val->whereDate('blogs.created_at', '<=', request()->get('end_date'));
      }


      $val = $val->where('blogs.is_deleted', '=', 0)
               ->orderBy('blogs.id', 'desc') 
               ->paginate(30);
      // $sql = DB::getQueryLog();  
      // dump($sql)             ;
      return $val;
    }

   
    public function getImage(){
      if(!empty($this->image_file) && file_exists('uploads/blogs/'.$this->image_file)){
           $imageUrl =( url('uploads/blogs/'.$this->image_file));
           return $imageUrl;
      } else {
            return "";
      }
   }

   public function getTags(){
      // DB::enableQueryLog();
      $val = $this->hasMany(BlogTag::class, 'blog_id');
      // $sql = DB::getQueryLog();  
      return $val;
   }

   public static function getRecordFrontend(){
      $val = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name', 'categories.slug as category_slug')
         ->join('users', 'users.id', '=', 'blogs.user_id')
         ->join('categories', 'categories.id', '=', 'blogs.category_id');

         if(!empty(request()->get('q'))){
            $val = $val->where('blogs.title', 'like', '%'.request()->get('q').'%');
         }
      $val = $val->where('blogs.status', '=', 1)
         ->where('blogs.is_published', '=', 1)
         ->where('blogs.is_deleted', '=', 0)
         ->orderBy('blogs.id', 'desc')
         ->paginate(20);
      return $val;
   }

   public static function getRecordFrontendCategory($category_id){
      $val = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name', 'categories.slug as category_slug')
         ->join('users', 'users.id', '=', 'blogs.user_id')
         ->join('categories', 'categories.id', '=', 'blogs.category_id')
         ->where('blogs.category_id', '=', $category_id)
         ->where('blogs.status', '=', 1)
         ->where('blogs.is_published', '=', 1)
         ->where('blogs.is_deleted', '=', 0)
         ->orderBy('blogs.id', 'desc')
         ->paginate(20);
      return $val;
   }

   public static function getRecentPosts(){
      $val = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name', 'categories.slug as category_slug')
         ->join('users', 'users.id', '=', 'blogs.user_id')
         ->join('categories', 'categories.id', '=', 'blogs.category_id')
         ->where('blogs.status', '=', 1)
         ->where('blogs.is_published', '=', 1)
         ->where('blogs.is_deleted', '=', 0)
         ->orderBy('blogs.id', 'desc')
         ->limit(5)
         ->get();
         
      return $val;
   }

   public static function getRelatedPosts($category_id, $id){
      $val = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name', 'categories.slug as category_slug')
         ->join('users', 'users.id', '=', 'blogs.user_id')
         ->join('categories', 'categories.id', '=', 'blogs.category_id')
         ->where('blogs.id', '!=', $id)
         ->where('blogs.category_id', '=', $category_id)
         ->where('blogs.status', '=', 1)
         ->where('blogs.is_published', '=', 1)
         ->where('blogs.is_deleted', '=', 0)
         ->orderBy('blogs.id', 'desc')
         ->limit(5)
         ->get();
         
      return $val;
   }

   public static function getRecordSlug($slug){
      $val = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name', 'categories.slug as category_slug')
         ->join('users', 'users.id', '=', 'blogs.user_id')
         ->join('categories', 'categories.id', '=', 'blogs.category_id')
         ->where('blogs.status', '=', 1)
         ->where('blogs.is_published', '=', 1)
         ->where('blogs.is_deleted', '=', 0)
         ->where('blogs.slug', '=', $slug)
         ->first();
      return $val;
   }
 
   public function getComments(){
      // DB::enableQueryLog();
      $val = $this->hasMany(BlogComment::class, 'blog_id')->orderBy('blog_comments.id', 'desc');
      // $sql = DB::getQueryLog();  
      return $val;
   }

   public function getCommentCount(){
      $val = $this->hasMany(BlogComment::class, 'blog_id')->count();
      return $val;

   }

}
