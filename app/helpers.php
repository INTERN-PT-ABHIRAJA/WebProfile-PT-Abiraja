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
        if (isset($data['productName']) && !empty($data['productName'])) {
            $message .= ' tentang produk: ' . $data['productName'];

            if (isset($data['productCode']) && !empty($data['productCode'])) {
                $message .= ' (Kode: ' . $data['productCode'] . ')';
            }
        }

        // Add user info if available
        if (isset($data['name']) && !empty($data['name'])) {
            $message .= "\n\nNama: " . $data['name'];
        }

        if (isset($data['email']) && !empty($data['email'])) {
            $message .= "\nEmail: " . $data['email'];
        }

        if (isset($data['phone']) && !empty($data['phone'])) {
            $message .= "\nTelepon: " . $data['phone'];
        }

        if (isset($data['message']) && !empty($data['message'])) {
            $message .= "\n\nPesan tambahan:\n" . $data['message'];
        }  // URL encode the message
        $encodedMessage = urlencode($message);

        // Detect user agent for better WhatsApp link generation
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $isMobile = (strpos($userAgent, 'Mobile') !== false ||
            strpos($userAgent, 'Android') !== false ||
            strpos($userAgent, 'iPhone') !== false ||
            strpos($userAgent, 'iPad') !== false);

        $isWindows = strpos($userAgent, 'Windows') !== false;
        $isMac = strpos($userAgent, 'Macintosh') !== false;
        $isDesktop = ($isWindows || $isMac) && !$isMobile;

        // Return different link types for better PC/mobile compatibility
        if ($isMobile) {
            // Mobile: Use api.whatsapp.com for better app integration
            return "https://api.whatsapp.com/send?phone={$phone}&text={$encodedMessage}";
        } else {
            // Desktop and fallback: Use wa.me for universal compatibility
            return "https://wa.me/{$phone}?text={$encodedMessage}";
        }
    }
}

if (!function_exists('formatWhatsAppNumber')) {
    /**
     * Format phone number for WhatsApp link with company-specific message
     *
     * @param string $phoneNumber The phone number to format
     * @param string $companyName The name of the subsidiary company (optional)
     * @return string The formatted WhatsApp URL with message
     */
    function formatWhatsAppNumber($phoneNumber, $companyName = '')
    {
        if (empty($phoneNumber)) {
            return '#';
        }

        // Sanitize phone number (remove spaces, +, dashes, etc)
        $phone = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Ensure phone starts with country code (Indonesia)
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);  // Convert 08xx to 628xx format
        } elseif (!str_starts_with($phone, '62') && strlen($phone) >= 9) {
            $phone = '62' . $phone;  // Add country code if missing
        }

        // Create template message
        $message = 'Halo! Saya tertarik untuk mengetahui lebih lanjut tentang layanan';

        if (!empty($companyName)) {
            $message .= ' dari ' . $companyName;
        }

        $message .= '. Bisakah Anda memberikan informasi lebih detail? Terima kasih.';

        // URL encode the message
        $encodedMessage = urlencode($message);

        // Return WhatsApp link with message
        return "https://wa.me/{$phone}?text={$encodedMessage}";
    }
}
