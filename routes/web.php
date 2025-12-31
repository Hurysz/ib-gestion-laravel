<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bienvenida', function () {
    $nombre = "Larsson Fernandez";
    $lider = "Arnie Jeampool";
    return view('welcome', ['usuario' => $nombre, 'jefe' => $lider]);
});