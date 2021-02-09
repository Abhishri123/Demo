<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\ViewController;

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

Route::get('/export-file', 'ViewController@exportFile')->name('export-file');
Route::get('/index', 'ViewController@index')->name('home'); 
Route::get('/files/export','ExcelController@export');
Route::get('view-records','ViewController@index');
Route::get('/view-records', 'ViewController@index')->name('view-records');
Route::post('/excel', [ExcelController::class, 'export'])->name('export');
Route::get('/excel', 'ExcelController@export')->name('export');
Route::get('/tasks', 'TempController@exportCsv');
Route::get('/excel',[ExcelController::class,'export'])->name('export');
Route::get('/excel', 'ExcelController@export')->name('excel');
