<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$product = [
        'json' => [
                'id' => '101',
                'title' => 'Xbox',
                'description' => 'Xbox 360',
                'brand' => 'Microsoft',
                'category' => 'Console',
                'thumbnail' => 'thumbnail.jpg'
           ]
       ]; 
    $response = $client->post('products/add', $product);
    echo $response->getBody();
?>