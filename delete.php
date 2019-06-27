<?php

require __DIR__ . '/start.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
    //'id' => 'my_ids',
];

$deleteIndexParams = [
    'index' => 'my_index',
];

try {
    // delete document form id
    //$response = $client->delete($params);

    // delete index
    $response = $client->indices()->delete($deleteIndexParams);
} catch (\Exception $e) {
    echo $e->getCode()."\n";

    echo $e->getMessage();

    return false;
}

print_r($response);
