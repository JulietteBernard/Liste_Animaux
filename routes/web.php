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
/**
* Ceci va permet d'accèder au contrôleur, qui va nous permettre de naviguer entre les differentes fonction
*/
Route::resource('animals', 'AnimalController',['except' => [
    'show'
]]);