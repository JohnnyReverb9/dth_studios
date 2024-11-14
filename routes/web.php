<?php

use App\Http\Controllers\ControllerMainPage;
use Illuminate\Support\Facades\Route;

// GET routes
Route::get('/', [ControllerMainPage::class, "index"]);
