<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\app([
	'setting' => [
		'displayErrorDetails' => true,
		]
	]);

$app->get('/', function($request, $response){
	return "Hello";
});




