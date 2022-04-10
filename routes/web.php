<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




Route::get("/",[HomeController::class,"index"]);


Route::get("/users",[AdminController::class,"user"]);
Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);


Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reserve",[AdminController::class,"reserve"]);

Route::get("/viewreserve",[AdminController::class,"viewreserve"]);


Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
