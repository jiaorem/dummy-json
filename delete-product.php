<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

    $id = $_GET['product_id'];
    $response = $client->delete('products/' . $id);

    echo $response->getBody();
?>