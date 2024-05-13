<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\BlogCommentReply;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog(){
      $data['param_record'] = Blog::getRecordFrontend();
     
      return view('blog', $data);
    }

    public function blogDetails($slug){
      $category = Category::getBySlug($slug);
      if(!empty($category)){
         $data['meta_title'] = $category->meta_title;
         $data['meta_description'] = $category->meta_description;
         $data['meta_keywords'] = $category->meta_keywords;
         $data['header_title'] = $category->title;

         $record = Blog::getRecordFrontendCategory($category->id);
         $data['param_record'] = $record;
         return view('blog', $data);
      } else {
         $record = Blog::getRecordSlug($slug);
         if(!empty($record)){
            $data['param_categories'] = Category::getCategories();
            $data['param_recentposts'] = Blog::getRecentPosts();
            $data['param_relatedposts'] = Blog::getRelatedPosts($record->category_id, $record->id);
            $data['param_record'] = $record;

            $data['meta_title'] = $record->title;
            $data['meta_description'] = $record->meta_description;
            $data['meta_keywords'] = $record->meta_keywords;

            return view('blog_details', $data);
         } else {
            abort(404);
         }
      }
    }

    public function blogCommentSubmit(Request $request){
      $record = new BlogComment;
      $record->user_id = Auth::user()->id;
      $record->blog_id = $request->blog_id;
      $record->comment = $request->comment;
      $record->save();
      return redirect()->back()->with('success', "Comment updated successfully");

    }

    public function blogCommentReplySubmit(Request $request){
      $record = new BlogCommentReply();
      $record->user_id = Auth::user()->id;
      $record->comment_id = $request->comment_id;
      $record->comment = $request->comment;
      $record->save();
      return redirect()->back()->with('success', "Comment updated successfully");

    }
}
