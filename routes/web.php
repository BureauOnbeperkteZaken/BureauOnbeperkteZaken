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

Route::get('/content_upload', [ProjectController::class, 'fileUpload']);
Route::post('/content_upload', [ProjectController::class, 'storeFile']);

Route::get('/metadata/{page}', function($slug){
    return view('meta-data-edit', [
        'url' => $slug
    ]);
});
Route::post('/metadata', [App\Http\Controllers\MetaDataController::class, 'MetaDataForm'])->name('metadata.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
