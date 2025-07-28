<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/comics");
});

Route::get("/comics", function () {
    $comics = config("comics");
    return view("comics", compact("comics"));
})->name("comics");
