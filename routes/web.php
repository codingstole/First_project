<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bet_controller;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/analysis', function () {
    return view('analysis');
});
Route::get('/bet', function () {
    return view('bet');
});
Route::get('/admin', function () {
    return view('admin');
});

// Route::get('registration', [bet_Controller::class, 'registration'])->name('registration.post');

Route::get('registration', [bet_Controller::class, 'form'])->name('registration');


Route::post('post-registration', [bet_Controller::class, 'postregistration'])->name('registration.post');
Route::get('delete_record/{id}', [bet_Controller::class, 'delete_record'])->name('delete.record');