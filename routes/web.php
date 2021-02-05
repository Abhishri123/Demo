<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;


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
// Route::post('/view-file', [ViewUpload::class, 'show'])->name('show');

Route::get('view-records','ViewController@index');
Route::get('/view-records', 'ViewController@index')->name('view-records');
// Route::get('/view-records/{id}','ViewController@show');
