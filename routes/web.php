<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/comics");
});

Route::get("/comics", function () {
    $comics = config("comics");

    return view("comics", compact("comics"));
})->name("comics");

$routes = config(("navlinks"));

foreach ($routes as $route) {
    if ($route['label'] !== "Comics")
        Route::get("{$route['href']}", function () use ($route) {

            return view("coming-soon", compact("route"));
        })->name(strtolower("{$route['label']}"));
};
