<?php

namespace App\Providers;

use App\Models\Barang;
use App\Models\pesanan;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.navigation', function ($view) {
            $pesanan_barang = pesanan::with('barang')
            ->where('user_id', auth()->id())
            ->paginate(3);

            $view->with('barang_pesanan', $pesanan_barang);
        });
    }
}
