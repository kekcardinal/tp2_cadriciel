<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\DocumentController;
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

Route::get('index', [EtudiantController::class, "index"])->name('blog.index');
Route::get('blog-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('blog.edit');
Route::put('blog-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::get('blog/{etudiant}', [EtudiantController::class, 'show'])->name('blog.show');
Route::delete('blog/{etudiant}', [EtudiantController::class, 'destroy']);
Route::get('blog-ajout', [EtudiantController::class, 'create'])->name('blog.ajout');
Route::post('blog-ajout', [EtudiantController::class, 'store']);

////////////////////////////////////////////////////////////////////////

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'authentication'])->name('login.authentication');
Route::get('/registration', [CustomAuthController::class, 'create'])->name('user.registration');
Route::post('/registration-store', [CustomAuthController::class, 'store'])->name('user.store');

Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');


Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('blog', [BlogArticleController::class, "index"])->name('blog.article');
Route::get('blog-ajout-article', [BlogArticleController::class, 'create'])->name('blog.ajout-article');
Route::post('blog-ajout-article', [BlogArticleController::class, 'store']);
Route::get('blog-edit-article/{blogArticle}', [BlogArticleController::class, 'edit'])->name('blog.edit-article');
Route::put('blog-edit-article/{blogArticle}', [BlogArticleController::class, 'update']);
Route::get('blog-show/{blogArticle}', [BlogArticleController::class, 'show'])->name('blog.show-article');
Route::delete('blog-show/{blogArticle}', [BlogArticleController::class, 'destroy']);

////////////////////////////////////////////////////////////////////////////////
Route::get('document', [DocumentController::class, "index"])->name('document.index');
Route::get('document-ajout', [DocumentController::class, 'create'])->name('document.ajout');
Route::post('document-ajout', [DocumentController::class, 'store']);
Route::get('document-show/{document}', [DocumentController::class, 'show'])->name('document.show');
Route::delete('document-show/{document}', [DocumentController::class, 'destroy']);
Route::get('document-edit/{document}', [DocumentController::class, 'edit'])->name('document.edit');
Route::put('document-edit/{document}', [DocumentController::class, 'update']);


