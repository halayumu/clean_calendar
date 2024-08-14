<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\AddressAutomatic;
use App\Http\Controllers\NewAddresController;
use App\Http\Controllers\TopController;

Route::get('/', [FirstController::class, 'showFirstView']);
Route::get('/addressAutomatic', [AddressAutomatic::class, 'showAddressView']);
Route::get('/top', [TopController::class, 'topView']);
Route::get('/newAddress', [NewAddresController::class, 'newAddresView']);
Route::post('/newAddress', [NewAddresController::class, 'newAddres']);