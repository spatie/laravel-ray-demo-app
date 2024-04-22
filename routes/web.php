<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\InvalidSignatureException;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/test", function (Request $request) {
    if (!$request->hasValidSignature()) {
        throw new InvalidSignatureException();
    }

    return response("Everything is fine, nothing to see here!");
})->name("test");
