<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InfoController;
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
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'cart'])->name('cart');
    Route::post('/{barang}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/checkout/cartCheckout', [CartController::class, 'cartCheckout'])->name('cartCheckout');
    Route::post('/checkout/checkoutLangsung', [CartController::class, 'checkoutLangsung'])->name('checkoutLangsung');
    Route::get('/detail/{id}', [CartController::class, 'detail'])->name('detail');
});


Route::prefix('admin')->middleware(['admin', 'auth'])->controller(AdminController::class)->group(function () {
    // pesanan
    Route::get('/', 'index')->name('admin');
    Route::get('/daftarPesanan', 'daftarPesanan')->name('daftarPesanan');
    Route::delete('/destroy/{id}', 'destroyPesanan')->name('destroyPesanan');
    Route::get('/edit/{id}', 'editPesanan')->name('editPesanan');
    Route::put('/update/{id}', 'updatePesanan')->name('updatePesanan');
    // barang
    Route::get('/barang', 'daftarBarang')->name('daftarBarang');
    Route::delete('/destroyBarang/{id}', 'destroyBarang')->name('destroyBarang');

});

Route::get('/service', function() {
    return view('service', [
        "title" => "Service",
    ]);
})->name('service');

Route::get('/info', [InfoController::class, 'info'])->name('info')->middleware('auth');
Route::get('/', [BarangController::class, 'index'])->name('das]hboard');
Route::get('/dashboard', [BarangController::class, 'index'])->name('dashboard');
Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// auth login with google'

require __DIR__.'/auth.php';




