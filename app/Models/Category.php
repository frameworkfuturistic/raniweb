<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
   use HasFactory;
   protected $table = 'categories';

   static public function getSingle($id)
   {
      return self::find($id);
   }

   static public function getRecord()
   {
      // DB::enableQueryLog();

      $abc = self::select('categories.*')
         ->where('is_deleted', '=', '0')
         ->orderBy('categories.id', 'desc')
         ->paginate(20);

      //$sql = DB::getQueryLog();
      return $abc;
   }

   static public function getCategories()
   {
      //DB::enableQueryLog();

      $abc = self::select('categories.*')
         ->where('status', '=', '1')
         ->where('is_deleted', '=', '0')
         ->orderBy('categories.name')
         ->get();

      //$sql = DB::getQueryLog();
      return $abc;
   }

   public function countCategory()
   {
      return $this->hasMany(Blog::class, 'category_id')
         ->where('status', '=', '1')
         ->where('is_published', '=', '1')
         ->where('is_deleted', '=', '0')
         ->count();
   }

   public static function getCategoryMenu()
   {
      $abc = self::select('categories.*')
      ->where('status', '=', '1')
      ->where('is_deleted', '=', '0')
      ->orderBy('categories.name')
      ->get();
      return $abc;
   }

   public static function getBySlug($slug) {
      DB::enableQueryLog();
      $abc = self::select('categories.*')
      ->where('status', '=', '1')
      ->where('slug', '=', $slug)
      ->where('is_deleted', '=', '0')
      ->where('is_menu', '=', '1')
      ->orderBy('categories.name')
      ->first();
      $sql = DB::getQueryLog();
      return $abc;
   }

}
