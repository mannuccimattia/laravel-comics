<?php

use Illuminate\Support\Facades\Route;

// home route redirects to /comics
Route::get('/', function () {
    return redirect("/comics");
});


Route::get("/comics", function () {
    $comics = config("comics");

    return view("comics", compact("comics"));
})->name("comics");


// get routes from navlinks.php
$routes = config(("navlinks"));

foreach ($routes as $route) {

    if ($route['label'] !== "Comics") {
        // all routes except /comics go to coming-soon page
        Route::get("{$route['href']}", function () use ($route) {

            return view("coming-soon", compact("route"));
        })->name("{$route['href']}"); // each route has its own name
    }
};
