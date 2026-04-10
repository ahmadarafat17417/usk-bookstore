<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function index()
    {
        // Mengambil semua user kecuali yang sedang login (opsional)
        $users = User::latest()->get();
        return view('pages.dashboard.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('pages.dashboard.users_edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,user',
        ]);

        $user->update($request->only('name', 'email', 'role'));

        ToastMagic::success('User ' . $user->name . ' berhasil diperbarui!');
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        // Proteksi agar admin tidak menghapus dirinya sendiri
        if ($user->id === Auth::id()) {
            ToastMagic::error('Anda tidak bisa menghapus akun sendiri!');
            return back();
        }

        $user->delete();
        ToastMagic::success('User berhasil dihapus.');
        return back();
    }
}
