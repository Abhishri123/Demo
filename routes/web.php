<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;
use App\Http\Controller\ArticleController;
use App\Http\Controller\ExportController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload-file', [FileUpload::class, 'createForm']);

Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

Route::post('/insert-file', [FileUpload::class, 'create'])->name('create');
Route::get('/insert-file',[FileUpload::class,'create'])->name('create');
Route::get('/insert-file', 'FileUpload@create')->name('insert-file');

Route::get('/temp',function(){
     $data=Article::all();
    return view('table')->withData($data);
});
Route::resource('table','ExportController');
Route::get('view-export', [ExportController::class, 'index']);
Route::get('view-export', 'ExportController@index')->name('view-export');

