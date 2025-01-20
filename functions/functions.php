<?php
$location = '';
$parameters = [];
$response_code = 302;

function redirect($location,$parameters,$response_code){
    $qs = $parameters ? '?' . http_build_query($parameters) : '';
    $location = $location . $qs;
    header('Location:' . $location, $response_code);
    exit;
};