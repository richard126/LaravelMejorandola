<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'home','uses'=>'HomeController@index' ));
Route::get('cristallab',function(){
    return View::make('cristallab');
});

Route::get('hello/{usuario}', function($usuario){
    return "Hello $usuario";
});

Route::get('tags/{tag}', function($tag){
    return "You are browsing $tag tag";
});

Route::get('user/edit/{id}', function($id){
    return "You are editing the user with the ID #$id";
})
->where('id','[0-9]+');

