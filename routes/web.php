<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\ViewController;
use App\Http\Controller\TableController;
use App\Http\Controller\ArticleController;
use App\Http\Controller\ExcelController;



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
Route::get('/export-file', [ViewController::class, 'createForm']);
Route::post('/export-file', [ViewController::class, 'exportFile'])->name('exportFile');
Route::get('/export-file',[ViewController::class,'exportFile'])->name('exportFile');
Route::get('view','ViewController@index');
Route::post('/view-file', [ViewController::class, 'index'])->name('index');
Route::get('/view-file',[ViewController::class,'index'])->name('index');

Route::post('/insert-file', [FileUpload::class, 'create'])->name('create');
Route::get('/insert-file',[FileUpload::class,'create'])->name('create');
Route::get('/insert-file', 'FileUpload@create')->name('insert-file');

Route::get('/export-file', 'ViewController@exportFile')->name('export-file');
Route::get('/index', 'ViewController@index')->name('home'); 
Route::get('/files/export','ExcelController@export');
Route::get('view-records','ViewController@index');
Route::get('/view-records', 'ViewController@index')->name('view-records');
Route::post('/excel', [ExcelController::class, 'export'])->name('export');
Route::get('/excel', 'ExcelController@export')->name('export');
// Route::get('/tasks', 'TempController@exportCsv');
Route::get('/excel',[ExcelController::class,'export'])->name('export');
Route::get('/excel', 'ExcelController@export')->name('excel');

 Route::get('articles', [TableController::class, 'index']);
 Route::get('/articles',[TableController::class,'getArticles'])->name('getArticles');

//  Route::get('articles/list', [TableController::class, 'getArticles'])->name('articles.list');
Route::get('articles','TableController@index');
Route::post('/articles', [TableController::class, 'getArticles'])->name('getArticles');
