<?php

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
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;

Route::resource('students', StudentController::class);
Route::resource('marks', MarkController::class);


use App\Http\Controllers\MarkSheetController;


Route::get('/generate-pdf/{student}', [MarkSheetController::class, 'generatePDF'])->name('generate-pdf');
use App\Http\Controllers\SubjectsController;

Route::resource('subjects', SubjectsController::class);
