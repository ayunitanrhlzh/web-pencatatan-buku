<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Publisher;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProv ider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Nama",
        "email" => "tryagains@gmail.com",
        "image" => "noavatar.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);


//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => App\Models\Kategori::all()
    ]);
});

Route::get('/categories/{kategori:slug}', function(Kategori $kategori) {
    return view('posts', [
        'title' => "Post by Category: $kategori->name",
        'active' => 'categories',
        'posts' => $kategori->posts->load('kategori', 'author', 'publisher')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Author: $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('kategori', 'author', 'publisher')
    ]);
});

Route::get('/publishers/{publisher:slug}', function(Publisher $publisher){
    return view('posts', [
        'title' => "Post by Publisher: $publisher->name",
        'active' => 'posts',
        'posts' => $publisher->posts->load('kategori', 'author', 'publisher')
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
});


Route::resource('/dashboard/posts', DashboardPostController::class);