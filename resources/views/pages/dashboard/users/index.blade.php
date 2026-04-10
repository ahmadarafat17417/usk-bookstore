@extends('layouts.default')

@section('page_content')
<div class="min-h-screen font-[Poppins] bg-gray-50">
    <header class="bg-white border-b shadow-sm border-slate-200">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center gap-3">
                <div class="p-2 rounded-lg bg-indigo-50">
                    <x-mdi-account-group-outline class="w-6 h-6 text-indigo-600" />
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900">User Management</h1>
            </div>
        </div>
    </header>

    <main class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="overflow-hidden bg-white border shadow sm:rounded-2xl border-slate-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">User Info</th>
                                <th class="px-6 py-4 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">Role</th>
                                <th class="px-6 py-4 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">Joined Date</th>
                                <th class="px-6 py-4 text-xs font-bold tracking-widest text-right text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                            <tr class="transition hover:bg-slate-50/50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center justify-center w-10 h-10 font-bold text-indigo-600 bg-indigo-100 rounded-full">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div class="text-sm font-bold text-slate-900">{{ $user->name }}</div>
                                            <div class="text-xs text-slate-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full
                                        {{ $user->role == 'admin' ? 'bg-purple-100 text-purple-700' : 'bg-blue-100 text-blue-700' }}">
                                        {{ $user->role }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $user->created_at->format('d M Y') }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <div class="flex justify-end gap-3">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="p-2 text-indigo-600 transition rounded-lg bg-indigo-50 hover:bg-indigo-600 hover:text-white">
                                            <x-mdi-pencil-outline class="w-5 h-5" />
                                        </a>

                                        @if($user->id !== Auth::id())
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Hapus user ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 transition rounded-lg text-rose-600 bg-rose-50 hover:bg-rose-600 hover:text-white">
                                                <x-mdi-trash-can-outline class="w-5 h-5" />
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
