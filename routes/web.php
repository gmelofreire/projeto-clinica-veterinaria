<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/sobre-nos', function () {
    return view('sobreNos');
});
Route::get('/exames', function () {
    return view('exames');
});
Route::get('/galeria', function () {
    return view('galeria');
});
Route::get('/login', function () {
    return view('login');
});
