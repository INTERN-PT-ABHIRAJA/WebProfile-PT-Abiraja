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
        } elseif ($isDesktop) {
            // Desktop: Enhanced URL with template data for web.whatsapp.com
            $webWhatsAppLink = "https://web.whatsapp.com/send?phone={$phone}&text={$encodedMessage}";

            // For desktop, also prepare a data URL for template passing
            $templateData = base64_encode(json_encode([
                'phone' => $phone,
                'message' => $message,
                'formData' => $data,
                'timestamp' => time()
            ]));

            return json_encode([
                'desktop_app' => "whatsapp://send?phone={$phone}&text={$encodedMessage}",
                'web_whatsapp' => $webWhatsAppLink,
                'web_whatsapp_enhanced' => $webWhatsAppLink . '&template=' . $templateData,
                'wa_me' => "https://wa.me/{$phone}?text={$encodedMessage}",
                'template_data' => $templateData,
                'type' => 'desktop'
            ]);
        } else {
            // Default fallback
            return "https://wa.me/{$phone}?text={$encodedMessage}";
        }
    }
}
