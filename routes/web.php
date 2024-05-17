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
        'name' => 'Simone',
        'lastname' => 'Danzeri'
    ];
    return view('homepage', $data);
});

Route::get('/about', function () {
    $data = [
        'name' => 'Simone',
        'infos' => [
            'address' => 'Via dei Fiori, 34',
            'city' => 'Torino',
            'state' => 'Italia',
            'phone' => '1234567890'
        ],
    ];
    return view('about', $data);
});
