<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'name' => 'Dipartimento di Matematica',
        'degrees' => [
            'Corso di Laurea in Statistica',
            'Corso di Laurea in Fisica',
            'Corso di Laurea in Chimica'
        ],
    ];

    return view('home', $data);
})->name('homepage');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');

Route::get('/dove-siamo', function () {
    return view('where');
})->name('where');

Route::get('/cosa-facciamo', function () {
    return view('what');
})->name('what');
