<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Models\ContactUs;
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
    return view('index');
});

Route::get('/audit', [PageController::class, 'alpha'] )->name('audit');
Route::get('/prestation', [PageController::class, 'beta'])->name('prestation');
Route::get('/maintenance', [PageController::class, 'gamma'])->name('maintenance');
Route::get('/formation', [PageController::class, 'lambda'])->name('formation');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'storeForm'])->name('contact.save');