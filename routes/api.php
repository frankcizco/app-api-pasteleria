<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Usuario;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/usuarios', function (Request $request) {
    $usuarios = Usuario::all();
    return $usuarios;
});
