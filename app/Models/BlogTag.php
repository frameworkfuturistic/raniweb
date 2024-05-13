<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;
    protected $table= "blog_tags";

    public static function InsertDeleteTag($blogId, $tags){
      BlogTag::where('blog_id', '=', $blogId)->delete();
      if(!empty($tags)){
         $arr =  explode(",", $tags);
         foreach($arr as $tag){
            $record = new BlogTag;
            $record->blog_id = $blogId;
            $record->tag = trim($tag);
            $record->save();
         }
      }


    }
}
