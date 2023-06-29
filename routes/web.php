<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [BlogController::class, 'index'])->name('blog.home');
Route::get('/blog/error', [BlogController::class, 'errorShow'])->name('blog.error');
Route::get('/blog/category', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/contact', [BlogController::class, 'contact'])->name('blog.contact');

Route::get('/blog/tag/{id}/{tag}', [BlogController::class, 'singleTag'])->name('blog.singleTag')->where([
    'tag' => $slugRegex
]);

Route::get('/blog/post/{post}/{slug}', [BlogController::class, 'show'])->name('blog.show')->where([
    'post' => $idRegex,
    'slug' => $slugRegex
]);

Route::post('/blog/post/{post}/{slug}', [BlogController::class, 'comments'])->where([
    'post' => $idRegex,
    'slug' => $slugRegex
]);

Route::get('/blog/category/{id}/{category}', [BlogController::class, 'categorySingle'])->name('blog.categorySingle')->where([
    'category' => $slugRegex
]);


Route::post('/contact/email', [ContactMailController::class, 'index'])->name('contact.email');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('/post', AdminController::class)->except(['show']); 
    Route::post('/post/{id}/restore', [AdminController::class, 'restore'])->name('post.restore');
    Route::post('/post/{id}/forceDelete', [AdminController::class, 'forceDelete'])->name('post.forceDelete');
    Route::get('/post/archive', [AdminController::class, 'index'])->name('post.corbeille');

    Route::resource('/category', CategoryController::class)->except('show');
    Route::post('/category/{id}/restore', [CategoryController::class, 'restore'])->name('category.restore');
    Route::post('/category/{id}/forceDelete', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
    Route::get('/category/archive', [CategoryController::class, 'index'])->name('category.corbeille');

    Route::resource('/tag', TagController::class)->except('show');
    Route::get('/tag/archive', [TagController::class, 'index'])->name('tag.corbeille');
    Route::post('/tag/{id}/restore', [TagController::class, 'restore'])->name('tag.restore');
    Route::post('/tag/{id}/forceDelete', [TagController::class, 'forceDelete'])->name('tag.forceDelete');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/info', [ProfileController::class, 'details'])->name('profile.details');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// 