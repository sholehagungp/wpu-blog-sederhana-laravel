<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
//rute dengan callback fangsen dan closures 
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",//ini namanya closures anonimus function
        "name" => "Sholeh Agung P",
        "job" => "Technician",
        "email" => "sholehagung14@gmail.com",//merupakan tugas controller kurang MVC
        "active" => "about",
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']); 
    // $new_post = [];
    // foreach($blog_posts as $post){
    //     if($post["slug"] === $slug){
    //         $new_post = $post;

    //     }
    // }
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});        
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         "active" => "categories",
//         'posts' => $category->posts->load('category', 'author'), //mengambil pada method model category
        
//     ]);
// });//ROUTE MODEL BINDING ,,,,sudah tidak dipakai
// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         "active" => "posts",
//         'posts' => $author->posts->load('category', 'author'), 
        
//     ]); 
// });//ROUTE MODEL BINDING
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); //
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); //auth diakses ketika sudah login
Route::get('/dashboard', function () {
    return \view('dashboard.index');
})->middleware('auth'); //closurs

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth'); //utilitas
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth'); //middleware itu bertujuan hanya user yang bisa mengunakan 
