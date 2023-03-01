<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/students',[StudentsController::class,'view']);
Route::get('/students/delete/{id}',[StudentsController::class,'delete']);
Route::view('/students/add','add');
Route::post('/students/add',[StudentsController::class,'add']);
Route::get('/students/update/{id}',[StudentsController::class,'update']);
Route::post('/students/update',[StudentsController::class,'updatestudent']);
