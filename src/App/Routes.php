<?php 




$app->get('/test', function() {
    echo json_encode(array("msg" => "You look like you're from around here [GET]")); 
}); 

$app->post('/controllerTest','App\Controllers\TestController:Process')->setName('test');

$app->post('/test', function() {
    echo json_encode(array("msg" => "You look like you're from around here [POST]")); 
}); 

