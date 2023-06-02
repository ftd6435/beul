<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactMailController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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


Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/login', [AuthController::class, 'doLogin']);
Route::delete('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/auth/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/auth/signup', [AuthController::class, 'store'])->name('auth.store');

Route::post('/contact/email', [ContactMailController::class, 'index'])->name('contact.email');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('/post', AdminController::class)->except('show');
    Route::resource('/category', CategoryController::class)->except('show');
    Route::resource('/tag', TagController::class)->except('show');
});
