<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

    //Route::get('/', function () {
    //    return view('html101');
    //});

    Route::get('/', [\App\Http\Controllers\MyController::class, 'html101']);
    Route::post('/', [\App\Http\Controllers\MyController::class, 'result']);
    Route::get('/calculate', [MyController::class, 'calculate']);

    Route::get('/se', function(){
        return view('template.default');
    });



    Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
    Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
    Route::get('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);

    Route::get('/html101', [MyController::class, 'html101']);
    Route::post('/result', [MyController::class, 'result']);
