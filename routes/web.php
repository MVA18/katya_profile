<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/work');
});

Route::get('/about', function () {
    $jobs = [
        [
            'period' => '1 year',
            'company' => 'Meetaverse',
            'title' => 'Graphic/UI Designer'
        ],
        [
            'period' => '1,5 years',
            'company' => 'Allseated',
            'title' => 'Graphic Designer'
        ],
        [
            'period' => '8 months',
            'company' => 'Magonova & Partners',
            'title' => 'Graphic Designer'
        ],
        [
            'period' => '2 years',
            'company' => 'Ukrainian Book Institute',
            'title' => 'Graphic Designer'
        ],
        [
            'period' => '3 months',
            'company' => 'PwC',
            'title' => 'Graphic Designer'
        ],
        [
            'period' => '1 year 2 months',
            'company' => 'Taras Shevchenko National University of Kyiv',
            'title' => 'Journalist'
        ],
    ];
    return view('pages/about', ['jobs' => $jobs]);
});

Route::get('/design', function () {
    return view('pages/design-page');
});
