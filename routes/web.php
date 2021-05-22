<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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
Route ::get('/tampil234',function(){
    return '<b>Halo Teman-teman</b> Saya sudah tampil';
   }); 

   Route::get('/hello', [HelloController::class, 'index']);

   Route::get('/page2', [HelloController::class, 'page2']);
   Route::get('/contac', [HelloController::class, 'contac']);