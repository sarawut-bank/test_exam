<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestResultController;
use App\Http\Controllers\allDataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bodytest', function () {
    return view('bodytest');
})->name('bodytest');

Route::post('/save-data', [allDataController::class, 'store']);