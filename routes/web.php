<?php

use App\Http\Controllers\Provedores;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('INICIO');


Route::resource('/provedores', Provedores::class)
    ->names('provedores');