<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Model\Laporan\Gangguan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $baru = Gangguan::whereRaw('id_status = ?',[1])->count();
        $online = Gangguan::whereRaw('id_status = ?',[2])->count();
        $offline = Gangguan::whereRaw('id_status = ?',[3])->count();
        $teratasi = Gangguan::whereRaw('id_status = ?',[4])->count();
        View::share('baru',$baru);
        View::share('online',$online);
        View::share('offline',$offline);
        View::share('teratasi',$teratasi);
        Schema::defaultStringLength(110);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
