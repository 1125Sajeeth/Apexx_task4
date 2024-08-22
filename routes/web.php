<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;

Route::get('/', [PageController::class,'index']);

