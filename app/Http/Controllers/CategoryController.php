<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function category(){
        $data['getRecord'] = Category::getRecord();
        return view('backend.category.list', $data);
    }

    public function addCategory(){
        return view('backend.category.add');
    }

    public function saveCategory(Request $request){
        request()->validate([
            'name' => 'required|unique:categories' ,
            'meta_title' => 'required',
            'title' => 'required',
            'meda_description' => 'required'
         ]);
 
        $record = new Category();
        $record->name     = trim($request->name);
        $record->title    = trim($request->title);
        $record->meta_title = trim($request->meta_title);
        $record->meta_description = trim($request->meta_description);
        $record->meta_keywords = trim($request->meta_keywords);
        $record->status = trim($request->status);
        $record->is_deleted = 0;
        $record->is_menu = trim($request->is_menu);
        $record->save();
        return redirect('panel/category/list')->with('success',"Category Created Successfully");
    }

    public function editCategory($id){
        $data['record'] = Category::getSingle($id);
        return view('backend.category.edit', $data);
    }

    public function updateCategory($id, Request $request){
        request()->validate([
            'name' => 'required|unique:categories,'.$id ,
            'slag' => 'required',
            'title' => 'required'
        ]);

        $record = Category::getSingle($id);
        $record->name     = trim($request->name);
        $record->title    = trim($request->title);
        $record->meta_title = trim($request->meta_title);
        $record->meta_description = trim($request->meta_description);
        $record->meta_keywords = trim($request->meta_keywords);
        $record->status = trim($request->status);
        $record->is_menu = trim($request->is_menu);
        $record->save();
        return redirect('panel/category/list')->with('success', "User successfully Updated");
    }

    public function deleteCategory($id){
        $record = Category::getSingle($id);
        $record->is_deleted =1;
        $record->save();
        return redirect('panel/category/list')->with('success', "Category successfully Deleted");
    }
}
