<?php

use Illuminate\Support\Facades\Route;

Route::get('/first-route', function () {
    return response()->json(['test' =>'testt']);
});
