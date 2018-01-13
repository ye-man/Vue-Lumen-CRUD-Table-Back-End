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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->get('/hello/{name}', ['middleware' => 'hello', function($name) use ($router) {
//    return "Hello ".$name;
//}]);
//
//$router->get('/test',function () use ($router) {
//    return response()->json(['name' => 'Roland', 'state' => 'Albania']);
//});

$router->get('/persons', [
    'uses' => 'PersonsController@getPersons'
]);

$router->put('/persons/update', [
   'uses' => 'PersonsController@updatePersons'
]);

$router->post('/persons/create',[
    'uses' => 'PersonsController@create'
]);

$router->delete('persons/delete', [
   'uses' => 'PersonsController@delete'
]);