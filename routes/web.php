<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


//Route accessible a tous
Route::get('/', [ClientController::class, "home"])->name('home');
Route::get('/infosoluces', [ClientController::class, "infosoluces"])->name('infosoluces');
Route::get('/services', [ClientController::class, "services"])->name('services');
Route::get('/references', [ClientController::class, "references"])->name('references');
Route::get('/contact', [ClientController::class, "contact"])->name('contact');
Route::get('/detailreference', [ClientController::class, "detailreference"])->name('detailreference');
Route::get('/detailservice', [ClientController::class, "detailservice"])->name('detailservice');




//Route en cas d'erreurs de route
Route::fallback(function () {
    return response()->json([
        'data' => [],
        'success' => false,
        'status' => 404,
        'message' => 'Invalid Route'
    ]);
});
