<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
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


Route::get('/cart', function() {
    return view('/cart');
})->name('cart');

Route::get('/detail/{id}', [BarangController::class, 'detail'])->name('detail');



Route::get('/service', function() {
    return view('/service');
})->name('service');


Route::get('/dashboard', [BarangController::class, 'index'] )->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
