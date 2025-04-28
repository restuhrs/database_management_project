@extends('layouts/admin/main')
@vite('resources/css/app.css')

@section('content')

<main class="ml-auto w-4/5 md:w-3/4 lg:w-4/5 h-full flex flex-col overflow-y-auto">
    <div class="container">
        <div class="flex items-center space-x-3 mb-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mr-3 text-gray-800">
                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
            </svg>
            <h2 class="text-2xl font-bold mb-1 text-gray-800">Manage Akun</h2>
        </div>

        <div class="flex items-center justify-between mb-4">
            <a href="{{ route('admin.akun.create') }}" class="flex items-center gap-x-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="font-semibold">Tambah</span>
            </a>

            <div class="flex items-center w-56 ml-auto mt-7">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 inset-y-0 left-0 flex items-center pl-3 text-slate-500">
                        <i class="fas fa-search"></i>
                    </span>
                    <input
                        type="text"
                        class="pl-10 text-sm ease-soft w-full leading-5.6 relative block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300"
                        placeholder="Search..." />
                </div>
            </div>
        </div>

        <div class="w-full overflow-x-auto overflow-y-auto max-h-[500px] scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
            <table class="w-full bg-white border border-gray-300 shadow rounded text-sm">
                <thead class="bg-gray-300 text-black">
                    <tr>
                        <th class="px-4 py-2 text-center font-semibold">ID</th>
                        <th class="px-4 py-2 text-center font-semibold">Cabang</th>
                        <th class="px-4 py-2 text-center font-semibold">Username</th>
                        <th class="px-4 py-2 text-center font-semibold">Nama</th>
                        <th class="px-4 py-2 text-center font-semibold">Role</th>
                        <th class="px-4 py-2 text-center font-semibold">Status</th>
                        <th class="px-4 py-2 text-center font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($users as $user)
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">{{ $user->id }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->branch->name ?? 'N/A' }}</td> <!-- Assuming branch relation -->
                        <td class="px-3 py-2 text-center">{{ $user->username }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->name }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->role }}</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                {{ $user->status === 'aktif' ? 'Aktif' : 'Non-Aktif' }}
                            </button>
                        </td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <!-- Add action buttons here -->
                            <a href="{{ route('admin.akun.show', $user->id) }}" class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </a>
                            <a href="{{ route('admin.akun.edit', $user->id) }}" class="bg-yellow-600 text-white px-2 py-2 rounded shadow hover:bg-yellow-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21 12h-8M10 13v8m-1-10a5 5 0 0 1 9.364-3.536C21.25 6.25 20.678 4.395 18.207 2.321c-1.3-.921-3.451.042-3.39 1.832l.175 5.046a2 2 0 1 1 1.392 1.206c.35.514 1.525.415 1.25 1.924l-5.267-.858-1.428 5.017c-.205-.635-2.637-1.573-4.184-1.89l-.288-5.85a5.034 5.034 0 0 1 1.057-.72" />
                                </svg>
                            </a>
                            <form action="{{ route('admin.akun.destroy', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="flex justify-end mt-4">
            {{ $users->links() }}
        </div>
    </div>

    <footer class="pt-2">
        <div class="flex flex-col items-end px-6 py-3">
            <span class="text-sm text-gray-700 dark:text-gray-400 mb-2">
                Showing <span class="font-semibold text-gray-700">1</span> to
                <span class="font-semibold text-gray-700">{{ count($users) }}</span> of
                <span class="font-semibold text-gray-700">{{ $users->total() }}</span> Entries
            </span>
        </div>
    </footer>
</main>

@endsection
