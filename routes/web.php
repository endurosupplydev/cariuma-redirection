<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return redirect()->away('https://trisouq.com/collections/cariuma');
})->where('any', '.*');
