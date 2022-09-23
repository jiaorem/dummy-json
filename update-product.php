<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

    $id = $_GET['product_id'];
    $product_update = [
        'json' => [
                'id' => $id,
                'title' => 'New Xbox',
                'description' => 'Xbox 99',
                'brand' => 'Microsoft',
                'category' => 'Console',
                'thumbnail' => 'new_thumbnail.jpg'
           ]
       ]; 
    $response = $client->put('products/' . $id , $product_update);

    echo $response->getBody();
?>