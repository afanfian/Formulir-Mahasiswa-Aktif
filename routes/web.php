<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\FianController;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

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

//Asigment Formulir
Route::get('/main', [FormController::class, 'formulir']);
Route::post('/hasil', [FormController::class, 'hasil']);

// Route pake controller
Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

//Route untuk mengarahkan ke categories
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'article' => $category->article,
        'category' => $category->name
    ]);
});

//Route untuk menampilkan semua category
Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

//Route ke users 
Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

//Route author 
Route::get('authors/{user}', function (User $user) {
    return view('article', [
        'title' => 'User Article',
        'articles' => $user->articles,
    ]);
});
