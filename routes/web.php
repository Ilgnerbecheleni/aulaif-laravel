<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class,'index']);
Route::get("/cadastro", [MainController::class,'cadastro']);
Route::post("/cadastroSubmit", [MainController::class,'cadastroSubmit']);

Route::get('/about',function () {
    return view('about');
});


