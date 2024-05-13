<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blog(){
      $data['param_record'] = Blog::getRecord();
      return view('backend.blog.list', $data);
    }

    public function addBlog(){
      $data['param_categories'] = Category::getCategories();
      return view('backend.blog.add', $data);
    }

    public function saveBlog(Request $request){
      // dd($request->all());

      $record = new Blog();
      $record->user_id = Auth::user()->id;
      $record->title = $request->title;
      $record->category_id = $request->category_id;
      $record->description = $request->description;
      $record->is_published = $request->is_published;
      $record->meta_description = $request->meta_description;
      $record->meta_keywords = $request->meta_keywords;
      $record->status = $request->status;
      $record->save();

      $slug = Str::slug($request->title);
      $isValidSlug = Blog::where('slug', '=', $slug)->first();
      if(!empty($isValidSlug)){
         $dbslug = $slug.'-'.$record->id;
      } else {
         $dbslug =  $slug;
      }
      $record->slug =  $dbslug;
      $record->save();

      if(!empty($request->file('image_file'))){
         $ext = $request->file('image_file')->getClientOriginalExtension();
         $file = $request->file('image_file');
         $filename =  $dbslug.'.'. $ext;
         // $path = $request->file('image_file')->store('images');
         // $path = $request->file('image_file')->storeAs('images', $filename);
         $file->move('uploads/blogs/', $filename);
         $record->image_file = $filename;
      }
      $record->save();

      BlogTag::InsertDeleteTag($record->id, $request->tags);
      
      return redirect('panel/blog/list')->with('success','Blog Successfully Created');
    }

    public function editBlog($id) {
      $data['param_category'] = Category::getCategories();
      $data['param_record'] = Blog::getSingle($id);
      return view('backend.blog.edit', $data);
    }

    public function updateBlog($id, Request $request){
      $record = Blog::getSingle($id);
      $record->user_id = Auth::user()->id;
      $record->title = $request->title;
      $record->category_id = $request->category_id;
      $record->description = $request->description;
      $record->is_published = $request->is_published;
      $record->meta_description = $request->meta_description;
      $record->meta_keywords = $request->meta_keywords;
      $record->status = $request->status;

      if(!empty($request->file('image_file'))){
         if(!empty($record->getImage())){
            unlink('uploads/blogs/'.$record->image_file);
         }

         $ext = $request->file('image_file')->getClientOriginalExtension();
         $file = $request->file('image_file');
         $filename =  $record->slug.'.'. $ext;
         // $path = $request->file('image_file')->store('images');
         // $path = $request->file('image_file')->storeAs('images', $filename);
         $file->move('uploads/blogs/', $filename);
         $record->image_file = $filename;
      }
      $record->save();

      BlogTag::InsertDeleteTag($record->id, $request->tags);

      return redirect('panel/blog/list')->with('success','Blog Successfully Updated');

    }

    public function deleteBlog($id){
      $record = Blog::getSingle($id);
      $record->is_deleted =1;
      $record->save();
      return redirect('panel/blog/list')->with('success', "Category successfully Deleted");
  }


}

