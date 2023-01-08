<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/register-user',[UserController::class,'register'])->name('register-user');
Route::post('/register-confirmed',[UserController::class,'register_user'])->name('register-confirmed');
Route::get('/login-user',[UserController::class,'login'])->name('login-user');
Route::post('/login-success',[UserController::class,'login_success'])->name('login-success');
Route::get('/categorys', [HomeController::class,'category'])->name('categorys');
Route::get('/item-page/{cat_id}', [HomeController::class,'page'])->name('singlepage');
Route::get('/post-item/{id}', [HomeController::class,'post'])->name('post-item');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[HomeController::class,'admin'])->name('dashboard');

    //category
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::get('/category-add',[CategoryController::class,'addpage'])->name('category-add');
    Route::post('/category-create',[CategoryController::class,'create'])->name('category-create');

    //post
    Route::get('/post',[BlogController::class,'index'])->name('post');
    Route::get('/post-add',[BlogController::class,'addpage'])->name('post-add');
    Route::post('/post-create',[BlogController::class,'create'])->name('post-create');

    //Comment
    Route::get('/comments',[CommentsController::class,'index'])->name('comments');
    //Post Comments User
    Route::post('/post-comment', [CommentsController::class,'commnets'])->name('comment-post');
    //UserDashboard
    Route::get('/user-dashboard',[HomeController::class,'userdb'])->name('userdb');
    Route::get('/request-author/{id}',[HomeController::class,'req'])->name('author');
    Route::get('/account/{id}',[HomeController::class,'account'])->name('account');
    Route::post('/account/update/{id}',[HomeController::class,'accup'])->name('account.update');
    Route::get('/post-user-add',[HomeController::class,'addpage'])->name('post-user-add');
    Route::post('/post-user-create',[HomeController::class,'create'])->name('post-suser-create');
});
