<?php

use App\Livewire\AboutUs;
use App\Livewire\Content;
use App\Livewire\HomeSection;
use App\Livewire\NewsContent;
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

Route::get('/', HomeSection::class)->name('home');
Route::get('/agenda-acara', NewsContent::class)->name('news');
Route::get('/tentang-kami', AboutUs::class)->name('about-us');
Route::get('/event/{event:slug}', HomeSection::class)->name('content');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
