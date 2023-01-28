<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Pages.welcome');
})->name("Home");
Route::get('/about-me', function () {
    return view("Pages.about");
})->name("about");


Route::get('/contact-me', function () {
    return view("Pages.contact", [
        "page_name" => "Contact Me",
        "page_description" => "This is The bage for Contact me!"
    ]);
})->name("contact");
Route::get('category/{id}', function ($id) {
    $cats = [
        '1' => "Game",
        '2' => "Programmer",
        '3' => "Books"
    ];

    return view("Pages.category", [
        'the_id' => $cats[$id] ?? "This is not found"
    ]);
});
