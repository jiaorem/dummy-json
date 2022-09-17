<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

// $response = $client->get('products');
// $code = $response->getStatusCode();
// $body = $response->getBody();
// $products = json_decode($body) -> products;

$response = $client->request('POST', 'products', 
['id' => '999',
'title' => 'Xbox',
'description' => 'Xbox 360',
'brand' => 'Microsoft',
'category' => 'Console',
'thumbnail' => 'thumbnail.jpg'
]
);

$body = $response->getBody();
var_dump($body);
?>