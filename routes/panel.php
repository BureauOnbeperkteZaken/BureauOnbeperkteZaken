<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProjectController;
use App\Services\VideoService;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('app/panel/home');
    })->name('home');


    Route::get('/new_project', [ProjectController::class, 'create']);

    Route::post('/new_project', [ProjectController::class, 'store']);

    Route::get('/add_user', [RegisteredUserController::class, 'create'])->name('create_user');
    Route::post('/add_user', [RegisteredUserController::class, 'store'])->name('add_user');

    Route::get('/template/{id}', function (int $id = 0) {
        return view('app.panel.templates.project_' . $id);
    });

});

