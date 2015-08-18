<?php
$app->get('/stuffs', function () use ($app) {	
	$oBook = new models\Stuff();
    $hello = $oBook->getAllStuff();
    $app->response()->header("Content-Type", "application/json");
    echo json_encode($hello);
});