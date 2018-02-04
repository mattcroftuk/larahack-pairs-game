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
    return view('welcome');
});


Route::get('/play', function() {


    $deck = collect([
        [
            'id' => 1,
            'name' => 'adam',
            'img' => '/img/adam.jpg'
        ],
        [
            'id' => 2,
            'name' => 'taylor',
            'img' => '/img/taylor.jpg'
        ],
        [
            'id' => 3,
            'name' => 'david',
            'img' => '/img/david.jpg'
        ],
        [
            'id' => 4,
            'name' => 'freek',
            'img' => '/img/freek.jpg'
        ],
        [
            'id' => 5,
            'name' => 'ian',
            'img' => '/img/ian.jpg'
        ],
        [
            'id' => 6,
            'name' => 'jack',
            'img' => '/img/jack.jpg'
        ],
        [
            'id' => 7,
            'name' => 'jason',
            'img' => '/img/jason.jpg'
        ],
        [
            'id' => 8,
            'name' => 'jeff',
            'img' => '/img/jeff.jpg'
        ],
        [
            'id' => 9,
            'name' => 'john',
            'img' => '/img/john.jpg'
        ],
        [
            'id' => 10,
            'name' => 'matt',
            'img' => '/img/matt.jpg'
        ],
        [
            'id' => 11,
            'name' => 'steve',
            'img' => '/img/steve.jpg'
        ],
        [
            'id' => 12,
            'name' => 'mohamed',
            'img' => '/img/mohamed.jpg'
        ],
        [
            'id' => 1,
            'name' => 'adam',
            'img' => '/img/adam.jpg'
        ],
        [
            'id' => 2,
            'name' => 'taylor',
            'img' => '/img/taylor.jpg'
        ],
        [
            'id' => 3,
            'name' => 'david',
            'img' => '/img/david.jpg'
        ],
        [
            'id' => 4,
            'name' => 'freek',
            'img' => '/img/freek.jpg'
        ],
        [
            'id' => 5,
            'name' => 'ian',
            'img' => '/img/ian.jpg'
        ],
        [
            'id' => 6,
            'name' => 'jack',
            'img' => '/img/jack.jpg'
        ],
        [
            'id' => 7,
            'name' => 'jason',
            'img' => '/img/jason.jpg'
        ],
        [
            'id' => 8,
            'name' => 'jeff',
            'img' => '/img/jeff.jpg'
        ],
        [
            'id' => 9,
            'name' => 'john',
            'img' => '/img/john.jpg'
        ],
        [
            'id' => 10,
            'name' => 'matt',
            'img' => '/img/matt.jpg'
        ],
        [
            'id' => 11,
            'name' => 'steve',
            'img' => '/img/steve.jpg'
        ],
        [
            'id' => 12,
            'name' => 'mohamed',
            'img' => '/img/mohamed.jpg'
        ],

    ]);

    $board = $deck->shuffle()->chunk(6);


    return view('board.show', [
        'board' => $board
    ]);
});


