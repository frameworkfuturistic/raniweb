<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user(){
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }

    public function addUser(){
        return view('backend.user.add');
    }

    public function saveUser(Request $request){
        request()->validate([
            'name' => 'required' ,
            'email' => 'required|email|unique:users',
            'password' => 'required'
         ]);
 
        $user = new User;
        $user->name     = trim($request->name);
        $user->email    = trim($request->email);
        $user->password = Hash::make($request->name);
        $user->status   = $request->status;
        $user->save();
        return redirect('panel/user/list')->with('success',"User Created");
    }

    public function editUser($id){
        $data['record'] = User::getSingle($id);
        return view('backend.user.edit', $data);
    }

    public function updateUser($id, Request $request){
        request()->validate([
           'name' => 'required' ,
           'email' => 'required|email|unique:users,email,'.$id
        ]);

        $record = User::getSingle($id);
        $record->name = trim($request->name);
        $record->email = trim($request->email);
        if (!empty($request->password)){
            $record->password = Hash::make($request->password);
        }
        $record->status = trim($request->status);
        $record->save();
        return redirect('panel/user/list')->with('success', "User successfully Updated");
    }

    public function deleteUser($id){
        $record = User::getSingle($id);
        $record->is_deleted =1;
        $record->save();
        return redirect('panel/user/list')->with('success', "User successfully Deleted");
    }

}
