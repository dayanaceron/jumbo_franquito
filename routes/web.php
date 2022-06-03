<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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
    return view('Template.Template');
});

//Ruta para docentes
Route::resource('profesores', TeacherController::class);

//Ruta para materias
Route::resource('materias', SubjectController::class);

//Ruta para grupos
Route::resource('grupos', GroupController::class);