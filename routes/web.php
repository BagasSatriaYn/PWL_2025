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

Route::get('/hello', function () {
        return 'Hello World';
});

Route::get('/world', function () 
        { return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2341760108 - Nama: B.Satria';
});

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/articles/{id}', function ($id) {
        return "Halaman Artikel dengan ID " . $id;
    });
    
Route::get('/user/{name?}', function ($name='John') { return 'Nama saya '.$name;
    });
    
