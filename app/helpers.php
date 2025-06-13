<?php

if (!function_exists('generateWhatsAppLink')) {
    /**
     * Generate a WhatsApp API link with prefilled message
     *
     * @param string $phoneNumber The WhatsApp phone number (with country code, no + or spaces)
     * @param array $data The data to include in the WhatsApp message
     * @return string The WhatsApp URL
     */
    function generateWhatsAppLink($phoneNumber, array $data = [])
    {
        // Sanitize phone number (remove spaces, +, etc)
        $phone = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Ensure phone starts with country code
        if (!str_starts_with($phone, '62') && strlen($phone) === 10) {
            $phone = '62' . substr($phone, 1);  // Convert 08xx to 628xx format
        }

        // Build the message with data
        $message = 'Halo, saya tertarik untuk berkonsultasi';

        // Add product info if available
        if (isset($data['productName'])) {
            $message .= ' tentang produk: ' . $data['productName'];

            if (isset($data['productCode'])) {
                $message .= ' (Kode: ' . $data['productCode'] . ')';
            }
        }

        // Add user info if available
        if (isset($data['name'])) {
            $message .= "\n\nNama: " . $data['name'];
        }

        if (isset($data['email'])) {
            $message .= "\nEmail: " . $data['email'];
        }

        if (isset($data['phone'])) {
            $message .= "\nTelepon: " . $data['phone'];
        }

        if (isset($data['message'])) {
            $message .= "\n\nPesan tambahan:\n" . $data['message'];
        }

        // URL encode the message
        $encodedMessage = urlencode($message);

        // Return the WhatsApp API link
        return "https://wa.me/{$phone}?text={$encodedMessage}";
    }
}
