<?php

use Illuminate\Support\Facades\Route;

Route::get('/user-sign-in', function () {
    return response()->json(['test' =>'testt']);
});
