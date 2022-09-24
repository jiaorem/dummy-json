<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

    $id = $_GET['user_id'];
    $user_update = [
        'json' => [
                'id' => $id,
                'firstName' => 'Ed',
                'maidenName' => 'Sheee',
                'lastName' => 'Rands',
                'age' => '32',
                'gender' => 'male'
           ]
       ]; 
    $response = $client->put('users/' . $id , $user_update);

    echo $response->getBody();
?>