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
Route::get('{type}/{slug}', 'ArticleController@show')->name('articleShow');
Route::get('article/category/{id}', 'ArticleController@indexCategory')->name('articleCategory');

Route::get('about/privacy/privacy-policy', function() {
    return view('extra.privacy');
})->name('privacy');

Route::get('about/terms/terms-&-condition', function() {
    return view('extra.terms');
})->name('terms');


Route::get('/sitemap', 'SitemapController@index');
Route::get('/sitemap/latest/Jobs/', 'SitemapController@jobs');
Route::get('/sitemap/latest/Results', 'SitemapController@results');
Route::get('/sitemap/latest/Admissions', 'SitemapController@admission');
Route::get('/sitemap/latest/Syllabus/', 'SitemapController@syllabus');
Route::get('/sitemap/latest/Answer keys', 'SitemapController@answerKeys');
Route::get('/sitemap/latest/Admit Card', 'SitemapController@admitCard');
Route::get('/sitemap/latest/Certificates/', 'SitemapController@certificates');
Route::get('/sitemap/latest/Important', 'SitemapController@importants');
Route::get('/sitemap/latest/Downloads', 'SitemapController@downloads');
