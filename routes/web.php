<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. 
| Rute-rute ini dimuat oleh RouteServiceProvider dan semuanya akan 
| ditempatkan dalam grup middleware "web". Buat sesuatu yang hebat!
|
*/

// Rute default untuk halaman utama
Route::get('/', function () {
    return view('welcome'); // Mengembalikan tampilan 'welcome'
});

// Rute resource untuk ItemController, otomatis menangani CRUD
Route::resource('items', ItemController::class);
