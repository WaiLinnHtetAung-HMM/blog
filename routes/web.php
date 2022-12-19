<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
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

Route::get('/', function () {
    $blogs = Blog::with('category', 'author')->get();
    
    return view('blogs', compact('blogs'));
});

Route::get('/blog/{blog:slug}', function(Blog $blog) {
    // $blog = Blog::find($id);
    return view('blog', compact('blog'));
});

Route::get('/category/{category:slug}', function(Category $category) {
    $blogs =  $category->blogs->load('category', 'author');

    return view('blogs', compact('blogs'));
});

Route::get('/author/{user:username}', function(User $user) {

    $blogs =  $user->blogs->load('author', 'category');

    return view('blogs', compact('blogs'));
});