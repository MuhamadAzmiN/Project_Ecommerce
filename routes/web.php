<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InfoController;
use App\Models\barang;
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

// Route::get('/', function () {
//     return view('/dashboard', [
//         "barang" => barang::all()
//     ]);
// });

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/detail/{id}', [CartController::class, 'detail'])->name('detail');
Route::post('/cart/{barang}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/checkout', [CartController::class, 'checkoutLangsung'])->name('checkoutLangsung');
Route::post('/cartCheckout', [CartController::class, 'cartCheckout'])->name('cartCheckout');
Route::get('/service', function() {
    return view('/service',[
        "title" => "Service",
    ]);
})->name('service');

Route::get('/info', [InfoController::class, 'info'])->name('info')->middleware('auth');

Route::get('/', [BarangController::class, 'index'])->name('dashboard');


Route::get('/dashboard', [BarangController::class, 'index'] )->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// halaman admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // pesanan
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/pesanan', [AdminController::class, 'daftarPesanan'])->name('daftarPesanan');
    Route::delete('/pesanan/{id}', [AdminController::class, 'destroyPesanan'])->name('destroyPesanan');
    Route::put('/pesanan/{id}', [AdminController::class, 'updatePesanan'])->name('updatePesanan');
    // barang
    Route::get('/barang', [AdminController::class, 'daftarBarang'])->name('daftarBarang');
    Route::delete('/barang/{id}', [AdminController::class, 'destroyBarang'])->name('destroyBarang');
    Route::get('/barang/create', [AdminController::class, 'createBarang'])->name('createBarang');
    Route::get('/barang/edit/{id}', [AdminController::class, 'editBarang'])->name('editBarang');
    Route::post('/barang/create', [AdminController::class, 'storeBarang'])->name('storeBarang');
    Route::put('/barang/{id}', [AdminController::class, 'updateBarang'])->name('updateBarang');
});

// Super admin
Route::prefix('SuperAdmin')->middleware('auth', 'superAdmin')->group(function () {
    Route::controller(SuperAdminController::class)->group(function () {
        Route::get('/daftarUser', 'daftarUser')->name('daftarUser');
        Route::put('/user/{id}', [AdminController::class, 'userUpdate'])->name('userUpdate');
        Route::delete('/daftarUser/{id}', 'destroyUser')->name('destroyUser');
        Route::get('editUser/{id}', 'editUser')->name('editUser');
        Route::get('/daftarBarangAll', 'daftarBarangAll')->name('daftarBarangAll');
    });
});



require __DIR__.'/auth.php';
