<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VideoController;
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
    return redirect()->route('home');
});

Route::get('home', function (){
    return view('app.home');
})->name('home');;

// Contact Routes
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact_index']);
Route::post('contact_index', [App\Http\Controllers\ContactController::class, 'contact_store'])->name('store');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contact_index'])->name('contact_index');

Route::get('/onbeperkt-anders', [VideoController::class, 'get']);

Route::get('/project/{id}', [ProjectController::class, 'readView'])->name('project.view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/jarenplan', function () {
    return view('jarenplan');
});

Route::get('/template/{id}', function (int $id = 0) {
    return view('app.panel.templates.project_' . $id);
});
