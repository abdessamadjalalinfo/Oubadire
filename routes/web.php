<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use Botble\Base\Facades\BaseHelper;
use Illuminate\Support\Facades\Route;


Route::get('cvs', [App\Http\Controllers\CvController::class, 'index'])->name('cvs');

Route::get('ajouter-cv', [App\Http\Controllers\CvController::class, 'ajouter_cv'])->name('ajouter-cv');

Route::post('ajouter', [App\Http\Controllers\CvController::class, 'ajouter'])->name('ajouter');