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

$app->get('/', function () use ($app) {
	return view('home');
});

$app->get('/billings',function(){
 return view('billings.main');
});

$app->get('/repair',function(){
 return view('repairs.main');
});

$app->get('/inquiries',function(){
 return view('inquiries.main');
});
