<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$user = [
        'json' => [
                'id' => '101',
                'firstName' => 'Ryan',
                'maidenName' => 'Rey',
                'lastName' => 'Nolds',
                'age' => '46',
                'gender' => 'male'
           ]
       ]; 
    $response = $client->post('users/add', $user);
    echo $response->getBody();
?>