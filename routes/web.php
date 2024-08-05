<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;


Route::get('/', [FirstController::class, 'showFirstView']);
Route::get('/addressAutomatic', function () {
    return view('addressAutomatic');
});