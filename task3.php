<?php

require_once __DIR__ . '/vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

// Initialize Google Client
$client = new Client();
$client->setAuthConfig(__DIR__ . '/junior-php-test-6f99dceab057.json'); // Path to your service account key file
$client->setHttpClient(new GuzzleHttp\Client(['verify' => false])); // Disabled SSL due to verification error
$client->setApplicationName('Task 3 Google Sheets API PHP');
$client->setScopes([Sheets::SPREADSHEETS_READONLY]);

// Create Google Sheets Service
$service = new Sheets($client);

// Define spreadsheet ID and range
$spreadsheetId = '1L8tBIH7wRSDtGhGpHiGHwlKTcYu_Sf4N7oUFyQYf9Nk';
$range = 'Sheet1!A2:C4';

// Fetch data from the spreadsheet
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

// Process the response
$products = [];
if (!empty($values)) {
    foreach ($values as $row) {
        $products[] = [
            'id' => $row[0],
            'name' => $row[1],
            'price' => $row[2],
        ];
    }
}

// Output the products
foreach ($products as $product) {
    echo 'Product ID: ' . $product['id'] . ', Name: ' . $product['name'] . ', Price: ' . $product['price'] . "\n";
}
