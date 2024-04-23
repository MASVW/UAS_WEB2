<?php

use App\Livewire\AboutUs;
use App\Livewire\AdminView;
use App\Livewire\Authentication;
use App\Livewire\HomeSection;
use App\Livewire\NewsContent;
use App\Livewire\Register;
use App\Livewire\ResetPassword;
use App\Livewire\Profile;
use App\Livewire\UpdateProfile;
use App\Livewire\Cart;
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
Route::get('/masuk', Authentication::class);
Route::get('/daftar', Register::class);
Route::get('/lupa-password', ResetPassword::class);
Route::get('/profil/{user:firstName}', Profile::class)->name('profil');
Route::get('/profil/{user:firstName}/update', UpdateProfile::class)->name('profil.update');

Route::get('/keranjang', Cart::class)->name('keranjang'); 

Route::get('/admin', AdminView::class)->name('Admin'); 





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
