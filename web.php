<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});