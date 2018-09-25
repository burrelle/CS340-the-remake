<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return view('home');
});

$router->get('/players', 'AppController@indexPlayers');
$router->get('/players/{player}', 'AppController@showPlayer');
$router->get('/teams', 'AppController@indexTeams');
