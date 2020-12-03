<?php

use Illuminate\Support\Facades\Route;
use App\Article;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ArticleController@latestIndex');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('articles/{type}','ArticleController@index')->name('article');
Route::get('article/{id}', 'ArticleController@show')->name('articleShow');
Route::get('article/category/{id}', 'ArticleController@indexCategory')->name('articleCategory');

Route::get('/privacy-policy', function() {
    return view('extra.privacy');
})->name('privacy');

Route::get('/terms-&-condition', function() {
    return view('extra.terms');
})->name('terms');
