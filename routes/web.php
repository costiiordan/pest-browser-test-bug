<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'test');

Route::post('/', function () {
    return response()->json(['message' => request()->get('input', 'No input provided')]);
});
