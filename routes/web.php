<?php

use App\Livewire\Chat;
use App\Livewire\Home;
use App\Livewire\Infografis;
use App\Livewire\Videos;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Home::class)->name('home');

Route::get('/chat', Chat::class)->name('chat');
Route::get('/infografis', Infografis::class)->name('infografis');
Route::get('/videos', Videos::class)->name('videos');

Route::view('/contoh','index');

