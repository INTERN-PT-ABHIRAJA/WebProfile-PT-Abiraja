<?php
require_once 'vendor/autoload.php';
require_once 'bootstrap/app.php';

// Create a simple test of the ContactController
$app = app();
$controller = new App\Http\Controllers\ContactController();

// Create a test request
$request = new Illuminate\Http\Request([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'message' => 'Test message',
    'phone' => '081234567890'
]);

try {
    $response = $controller->send($request);
    $responseData = $response->getData(true);

    echo 'Response Status: ' . $response->getStatusCode() . PHP_EOL;
    echo 'Response Data: ' . json_encode($responseData, JSON_PRETTY_PRINT) . PHP_EOL;
    echo 'WhatsApp Link: ' . ($responseData['whatsapp_link'] ?? 'Not found') . PHP_EOL;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
