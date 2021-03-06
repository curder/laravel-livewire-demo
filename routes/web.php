<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('examples', function () {
    return view('examples', [
        'posts' => Post::all(),
    ]);
})->name('examples');

Route::get('posts/{post}/edit', function(Post $post) {
    return view('posts.edit', compact('post'));
})->name('posts.edit');

Route::get('/posts/{post}', function (Post $post) {
    return view('posts.show', compact('post'));
})->name('posts.show');
