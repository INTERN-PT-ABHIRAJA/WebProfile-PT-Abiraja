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

        Log::info('Form berhasil diterima:', $data);

        Mail::raw(
            "Nama: {$data['name']}\n".
            "Email: {$data['email']}\n\n".
            "Pesan:\n{$data['message']}",
            function ($message) use ($data) {
                $message->to('zrill0612@gmail.com')
                        ->subject($data['subject']);
            }
        );

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}


