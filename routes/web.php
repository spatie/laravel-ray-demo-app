<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-controller', [MyController::class, 'show']);

Route::get('test', TestController::class);

Route::get('pause', function() {
    ray()->pause();

    return 'all ok';
});

Route::get('request', function() {
    ray(request(), app());

    return 'all ok';
});
