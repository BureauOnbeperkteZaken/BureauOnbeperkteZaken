<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TemplateController;
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


    Route::get('/new_project', [ProjectController::class, 'create'])->name('create_project');

    Route::post('/new_project', [ProjectController::class, 'store'])->name('store_project');

    Route::get('/add_user', [RegisteredUserController::class, 'create'])->name('create_user');
    Route::post('/add_user', [RegisteredUserController::class, 'store'])->name('add_user');

    Route::get('/content_upload', [ProjectController::class, 'fileUpload'])->name('fileUpload');
    Route::post('/content_upload', [ProjectController::class, 'storeFile'])->name('storeFile');

    Route::get('/template/{id}', [TemplateController::class, 'read'])->name('template.read');
    
    Route::get('/project/{id}', [ProjectController::class, 'read'])->name('project.read');

    Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('template.edit');
    Route::put('/project/{project}/edit', [ProjectController::class, 'update'])->name('template.update');

    Route::get('project/{project}/block/create/{type}', [BlockController::class, 'create'])->name('block.create');
    Route::post('project/{project}/block/create/{type}', [BlockController::class, 'store'])->name('block.store');

    Route::get('block/{block}/edit', [BlockController::class, 'edit'])->name('block.edit');
    Route::put('block/{block}/edit', [BlockController::class, 'update'])->name('block.update');
});
