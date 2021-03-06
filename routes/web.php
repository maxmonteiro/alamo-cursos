<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
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

Route::get('/', [CoursesController::class, 'index']);
Route::get('/course/{id}', [CoursesController::class, 'show'])->name('course.show');
Route::get('/course/{courseId}/certificate/{id}', [CoursesController::class, 'generateCertificate'])->name('course.certificate');