<?php

use Puppers\User;
use Puppers\Pup;

$app->get('/dev', function($req, $res, $args){
	$users = User::all();
	return $res->withStatus(200)->withJson($users);
});


$app->get('/dev/dogs', function($req, $res, $args){
	$pups = Pup::all();
	return $res->withStatus(200)->withJson($pups);
});

$app->get('/dev/dogs/{pup_id}', function($req, $res, $args){
	$pupId = $args["pup_id"];
	$pup = Pup::find($pupId);
	return $res->withStatus(200)->withJson($pup);
});

?>
