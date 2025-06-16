<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Default WhatsApp number - coming from site settings
    protected $whatsappNumber = '6285156209325';  // GANTI DENGAN NOMOR WHATSAPP ANDA

    public function send(Request $request)
    {
        // Log the incoming request for debugging
        Log::info('Contact form request received:', [
            'method' => $request->method(),
            'headers' => $request->headers->all(),
            'data' => $request->all()
        ]);

        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
                'productName' => 'nullable|string',
                'productCode' => 'nullable|string',
                'productPrice' => 'nullable|string',
                'subject' => 'nullable|string|max:255',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Validation failed:', $e->errors());

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data tidak valid. Silakan periksa form Anda.',
                    'errors' => $e->errors()
                ], 422);
            }

            throw $e;
        }

        Log::info('Form dikirim:', $data);

        // Add default subject if not provided
        if (!isset($data['subject'])) {
            $subject = isset($data['productName'])
                ? 'Permintaan Konsultasi: ' . $data['productName']
                : 'Pesan dari Formulir Kontak';
            $data['subject'] = $subject;
        }

        try {
            // Send email notification to the admin
            Mail::raw(
                "Nama: {$data['name']}\n"
                    . "Email: {$data['email']}\n"
                    . "Telepon: {$data['phone']}\n"
                    . (isset($data['productName']) ? "Produk: {$data['productName']} ({$data['productCode']})\n" : '')
                    . (isset($data['productPrice']) ? "Harga: {$data['productPrice']}\n" : '')
                    . "\nPesan:\n{$data['message']}",
                function ($message) use ($data) {
                    $message
                        ->to('Abhirajagiovannicompany@gmail.com')
                        ->subject($data['subject']);
                }
            );

            // Generate WhatsApp link
            $whatsappLink = generateWhatsAppLink($this->whatsappNumber, $data);

            // If it's an AJAX request, return JSON response
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan berhasil dikirim!',
                    'whatsappLink' => $whatsappLink,
                    'formData' => [
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'phone' => $data['phone'],
                        'message' => $data['message'] ?? '',
                        'productName' => $data['productName'] ?? '',
                        'productCode' => $data['productCode'] ?? '',
                        'productPrice' => $data['productPrice'] ?? '',
                        'subject' => $data['subject']
                    ],
                    'whatsappNumber' => $this->whatsappNumber,
                    'timestamp' => now()->format('Y-m-d H:i:s')
                ]);
            }

            // For non-AJAX, redirect with success message
            return redirect()->back()->with([
                'success' => 'Pesan berhasil dikirim!',
                'whatsappLink' => $whatsappLink
            ]);
        } catch (\Exception $e) {
            Log::error('Gagal kirim email: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal mengirim pesan. ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Gagal mengirim pesan.');
        }
    }
}
