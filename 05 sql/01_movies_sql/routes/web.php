<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\MovieController;

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

$router->get('/', 'MovieController@index');
$router->get('/movie/create', 'MovieController@create');
$router->get('/movie/{id}/edit', 'MovieController@edit');
$router->delete('/movie/{id}/delete', 'MovieController@destroy');
$router->get('/movie/{id}', 'MovieController@show');

$router->post('/movies', 'MovieController@store');
$router->put('/movie/{id}', 'MovieController@update');

$router->get('/directors', 'DirectorController@index');
$router->get('/director/create', 'DirectorController@create');
$router->get('/director/{id}/edit', 'DirectorController@edit');
$router->delete('/director/{id}/delete', 'DirectorController@destroy');
$router->get('/director/{id}', 'DirectorController@show');

$router->post('/directors', 'DirectorController@store');
$router->post('/director/choose', 'DirectorController@choose');
$router->put('/director/{id}', 'DirectorController@update');

$router->get('/genre/{name}', 'GenreController@show');
