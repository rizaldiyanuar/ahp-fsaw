<?php

namespace App\Providers;
use App\Kriteria;
use Illuminate\Support\ServiceProvider;

class DynamicClassName extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('value_array',Kriteria::all()); //array yang digunakan
            //semua data tabel
        });
    }
}