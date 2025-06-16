<?php

// Test the generateWhatsAppLink function

require_once 'app/helpers.php';

// Test data
$testData = [
    'name' => 'Test User',
    'email' => 'test@example.com',
    'phone' => '085263148215',
    'message' => 'Test message',
    'productName' => '',
    'productCode' => '',
    'productPrice' => ''
];

// Test the function
$whatsappLink = generateWhatsAppLink('6288971589438', $testData);

echo "Generated WhatsApp Link:\n";
echo $whatsappLink . "\n\n";

// Also test with mobile user agent
$_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1';

$mobileLlink = generateWhatsAppLink('6288971589438', $testData);

echo "Generated Mobile WhatsApp Link:\n";
echo $mobileLlink . "\n\n";

// Test with desktop user agent
$_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';

$desktopLink = generateWhatsAppLink('6288971589438', $testData);

echo "Generated Desktop WhatsApp Link:\n";
echo $desktopLink . "\n";
