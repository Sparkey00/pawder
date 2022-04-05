<?php

use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Route;

Route::get('/pictures', [PictureController::class, 'index']);
