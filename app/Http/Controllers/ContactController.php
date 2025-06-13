<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
{
    $data = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Log::info('Form dikirim:', $data); // Tambah baris ini

    try {
        Mail::raw(
            "Nama: {$data['name']}\n".
            "Email: {$data['email']}\n\n".
            "Pesan:\n{$data['message']}",
            function ($message) use ($data) {
                $message->to('zrill0612@gmail.com')
                        ->subject($data['subject']);
            }
        );
    } catch (\Exception $e) {
        Log::error('Gagal kirim email: '.$e->getMessage());
        return redirect()->back()->with('error', 'Gagal mengirim pesan.');
}


    return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
}
}