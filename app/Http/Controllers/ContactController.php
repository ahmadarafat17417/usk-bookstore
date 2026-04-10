<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Devrabiul\ToastMagic\Facades\ToastMagic;

class ContactController extends Controller
{
    // User: Menampilkan form contact dan riwayat pesan
    public function index()
    {
        $messages = Contact::where('user_id', Auth::id())->latest()->get();
        return view('pages.main.contact', compact('messages'));
    }

    // User: Mengirim pesan baru
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        ToastMagic::success('Pesan berhasil dikirim ke admin!');
        return back();
    }

    // Admin: Menampilkan daftar semua pesan dari user
    public function adminIndex()
    {
        // Mengambil semua pesan, diurutkan dari yang belum dibalas (pending)
        $messages = Contact::with('user')->orderBy('status', 'asc')->latest()->get();
        return view('pages.dashboard.contacts.index', compact('messages'));
    }

    // Admin: Menyimpan balasan untuk user
    public function reply(Request $request, Contact $contact)
    {
        $request->validate([
            'admin_reply' => 'required|string',
        ]);

        $contact->update([
            'admin_reply' => $request->admin_reply,
            'status' => 'replied',
        ]);

        ToastMagic::success('Balasan berhasil dikirim ke ' . $contact->user->name);
        return back();
    }
}
