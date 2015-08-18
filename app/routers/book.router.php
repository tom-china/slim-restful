<?php
$app->get('/books', function () use ($app) {	
	$oBook = new models\Book();
    $hello = $oBook->getAllBooks();
    $app->response()->header("Content-Type", "application/json");
    echo json_encode($hello);
});