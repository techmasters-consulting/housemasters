<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MultipleUploads;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/listings', [IdeaController::class, 'index'])->name('idea.index');
Route::get('/ideas/{idea:slug}', [IdeaController::class, 'show'])->name('idea.show');
Route::get('/manage', [IdeaController::class, 'manage'])->name('ideas.manage');
Route::get('/multiple-uploads', [MultipleUploads::class,'uploadFile'])->name('ideas.upload');
Route::get('/idea_export', [IdeaController::class, 'idea_export'])->name('idea_export');

require __DIR__.'/auth.php';
