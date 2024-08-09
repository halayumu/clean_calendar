<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\AddressAutomatic;


Route::get('/', [FirstController::class, 'showFirstView']);
Route::get('/addressAutomatic', [AddressAutomatic::class, 'showAddressView']);
Route::get('/top', [TopController::class, 'topView']);