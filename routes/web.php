<?php

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
    return view('pages.index');
});
Route::get('/team', [App\Http\Controllers\FrontendController::class, 'team'])->name('team');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
//Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('service');
//blog
Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('blog-tag/{slug}',[App\Http\Controllers\FrontendController::class, 'blogByTag'])->name('blog.tag');
Route::get('blog-category/{slug}',[App\Http\Controllers\FrontendController::class, 'blogByCategory'])->name('blog.category');
Route::get('/blog/search',[App\Http\Controllers\FrontendController::class, 'blogSearch'])->name('blog.search');
Route::post('/blog/search',[App\Http\Controllers\FrontendController::class, 'blogFilter'])->name('blog.filter');

//blog-detail
Route::get('/blog-detail/{slug}', [App\Http\Controllers\FrontendController::class, 'blogDetail'])->name('blog.detail');

Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/kegiatan', [App\Http\Controllers\FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/kegiatan/{slug}', [App\Http\Controllers\FrontendController::class, 'portfolioDetail'])->name('portfolio.detail');



Route::get('/login', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('pages.backend.index');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    //post//
    Route::resource('post', App\Http\Controllers\PostController::class);
    //post category
    Route::resource('post-category', App\Http\Controllers\PostCategoryController::class);
    //post tag
    Route::resource('post-tag', App\Http\Controllers\PostTagController::class);

    Route::resource('users', App\Http\Controllers\UsersController::class);

    Route::resource('action', App\Http\Controllers\ActionController::class);
   
});




require __DIR__.'/auth.php';
