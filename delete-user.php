<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

    $id = $_GET['user_id'];
    $response = $client->delete('users/' . $id);

    echo $response->getBody();
?>