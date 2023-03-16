<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\JaketController;
use App\Http\Controllers\HoodieController;
use App\Http\Controllers\KategoriController;

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
    return redirect('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/toko', function () {
    return view('toko');
});

Route::get('/faq', [FaqController::class, 'index']);

Route::get('/view/faq', [FaqController::class, 'show']);
Route::get('/confirm/faq/{id}', [FaqController::class, 'show2']);
Route::post('/confirm/faq/{id}', [FaqController::class, 'update']);

Route::post('/add/faq', [FaqController::class, 'store']);

Route::get('/tablesgeneral', function () {
    return view('tablesgeneral');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/products', function () {
    return view('products');
});


Route::get('/kategori', [KategoriController::class, 'kategori'])->name('kategori');


Route::get('jaket', function () {
    return view('admin.kategori.jaket');
});

Route::get('hoodie', function () {
    return view('admin.kategori.hoodie');
});

Route::get('baju', function () {
    return view('admin.kategori.baju');
});