<?php

use App\Http\Controllers\WebPagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * | Controller 
 * | To Render Web Pages
 */
Route::controller(WebPagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/service', 'service');
    Route::get('/education', 'education');
    Route::get('/schedule', 'schedule');
    // Route::get('/blogs', 'blogs');
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('blog', [HomeController::class, 'blog']);
Route::get('{slug}', [HomeController::class, 'blogDetails']);

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authLogin']);

Route::get('logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'createUser']);

Route::get('forgotpassword', [AuthController::class, 'forgotPassword']);
Route::post('forgotpassword', [AuthController::class, 'resetPassword']);

Route::post('verify/{token}', [AuthController::class, 'verifyUser']);

Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'resetPost']);

Route::group(['middleware' => 'admin'], function(){
    Route::get('panel/user/list', [UserController::class, 'user']);
    Route::get('panel/user/add', [UserController::class, 'addUser']);
    Route::post('panel/user/add', [UserController::class, 'saveUser']);
    Route::get('panel/user/edit/{id}', [UserController::class, 'editUser']);
    Route::post('panel/user/edit/{id}', [UserController::class, 'updateUser']);
    Route::get('panel/user/delete/{id}', [UserController::class, 'deleteUser']);
 
    Route::get('panel/category/list', [CategoryController::class, 'category']);
    Route::get('panel/category/add', [CategoryController::class, 'addCategory']);
    Route::post('panel/category/add', [CategoryController::class, 'saveCategory']);
    Route::get('panel/category/edit/{id}', [CategoryController::class, 'editCategory']);
    Route::post('panel/category/edit/{id}', [CategoryController::class, 'updateCategory']);
    Route::get('panel/category/delete/{id}', [CategoryController::class, 'deleteCategory']);
 
 });
 
 Route::group(['middleware' => 'adminuser'], function(){
     Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);
    
     Route::get('panel/blog/list', [BlogController::class, 'blog']);
     Route::get('panel/blog/add', [BlogController::class, 'addBlog']);
     Route::post('panel/blog/add', [BlogController::class, 'saveBlog']);
     Route::get('panel/blog/edit/{id}', [BlogController::class, 'editBlog']);
     Route::post('panel/blog/edit/{id}', [BlogController::class, 'updateBlog']);
     Route::get('panel/blog/delete/{id}', [BlogController::class, 'deleteBlog']);
 
     Route::post('blog-comment-submit', [HomeController::class, 'blogCommentSubmit']);
     Route::post('blog-comment-reply-submit', [HomeController::class, 'blogCommentReplySubmit']);
     
 });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('/blogsdash', function () {
//         return view('blogsdash');
//     })->name('blog-dashboard');

   
//     Route::get('user/profile', function () {
//         return view('profile.show');
//     })->name('profile.show');

//     Route::get('crud/doctors', function () {
//         return view('pages.doctors');
//     });
// });
