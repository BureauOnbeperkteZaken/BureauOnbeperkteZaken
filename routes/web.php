<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TemplateController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('app.home');
});

// Contact Routes
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact_index']);
Route::post('contact_index', [App\Http\Controllers\ContactController::class, 'contact_store'])->name('store');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contact_index'])->name('contact_index');

Route::get('/onbeperkt-anders', [VideoController::class, 'get']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/template/{id}', [TemplateController::class, 'read'])->name('template.read');

Route::get('/template/{template}/edit', [TemplateController::class, 'edit'])->name('template.edit');
Route::put('/template/{template}/edit', [TemplateController::class, 'update'])->name('template.update');

Route::get('block/{block}/edit', [TemplateController::class, 'editBlock'])->name('block.edit');
Route::put('block/{block}/edit', [TemplateController::class, 'updateBlock'])->name('block.update');

Route::get('/test', [TemplateController::class, 'edit'])->name('test.edit');

Route::post('/test', [TemplateController::class, 'store'], function () {
    return view('app.home');
});
