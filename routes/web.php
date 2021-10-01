<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin_controller;
use App\Http\Controllers\CgpaController;
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

Route::get('/',[StudentController::class,'index']);
Route::post('/list',[StudentController::class,'add']);
Route::get('/list',[StudentController::class,'list']);

Route::get('/login',[LoginController::class,'login']);
Route::post('/authenticate',[LoginController::class,'authentica'])->name('authentica');
Route::get('/authenticate',[LoginController::class,'auth']);


Route::get('/admin',[Admin_controller::class,'admin']);
Route::post('/adminauthen',[Admin_controller::class,'adminlogin'])->name('adminlogin');
Route::get('/adminauthen',[Admin_controller::class,'adminauthen']);


Route::post('/admincgpa',[CgpaController::class,'getcgpa'])->name('getcgpa');
Route::get('/admincgpa',[CgpaController::class,'admincgpa']);



// Route::get('/authenticate', function () {
//     return view('authenticate');
// })->middleware('auth')->name('password.confirm');


// Route::post('login',[StudentController::class,'authenticate']);

// Route::get('/',[StudentController::class,'index']);
// Route::post('list',[StudentController::class,'add']);

// Route::get('/', function () {
//     return view('registration');
// });
