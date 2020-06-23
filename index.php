<?php
//allows access from all origins
header('Access-Control-Allow-Origin: *');
header('HTTP/1.1 200');
header("Content-Type: application/json");
$data = new stdClass();
$data->message = "you have arrived at the index route";
echo json_encode($data);