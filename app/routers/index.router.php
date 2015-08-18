<?php
// GET index route
$app->get('/', function () use ($app) {
    $oBook = new models\Book();
    $hello = $oBook->getAllBooks();
    $app->response()->header("Content-Type", "application/json");
    echo json_encode($hello);
});