@extends('layouts/spv/main')
@vite('resources/css/app.css')

@section('content')

<main class="ml-auto w-4/5 md:w-3/4 lg:w-4/5 h-full flex flex-col overflow-y-auto">
    <div class="container">
        <div class="flex items-center space-x-3 mb-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mr-3 text-gray-800">
                <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
            </svg>
            <h2 class="text-2xl font-bold mb-1 text-gray-800">Data Customer</h2>
        </div>

        <div class="flex items-center justify-between mb-4">
            <button type="button" class="flex items-center gap-x-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-500 dark:focus:ring-green-600 font-medium rounded-lg text-sm px-3 py-2 text-center me-2">
                <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01" />
                </svg>
                <span class="font-semibold">Import Excel</span>
            </button>

            <button id="button-tambah"
                class="flex items-center gap-x-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="font-semibold">Tambah</span>
            </button>

            @include('layouts/spv/modal_tambah_cust')

            <div class="flex items-center w-56 ml-auto">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="pl-8.75 text-sm ease-soft w-full leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Search..." />
                </div>
            </div>
        </div>

        <div class="max-w-full overflow-x-auto overflow-y-auto max-h-[500px] scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
            <table class="min-w-max bg-white border border-gray-300 shadow rounded text-sm">
                <thead class="bg-gray-300 text-black">
                    <tr>
                        <th class="px-4 py-2 text-center font-semibold">Cabang</th>
                        <th class="px-4 py-2 text-center font-semibold">Nama</th>
                        <th class="px-4 py-2 text-center font-semibold">Kota</th>
                        <th class="px-4 py-2 text-center font-semibold">Tanggal Lahir</th>
                        <th class="px-4 py-2 text-center font-semibold">Jenis Kendaraan</th>
                        <th class="px-4 py-2 text-center font-semibold">Salesman</th>
                        <th class="px-4 py-2 text-center font-semibold">Progress</th>
                        <th class="px-6 py-2 text-center font-semibold">Alasan</th>
                        <th class="px-4 py-2 text-center font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota dan tidak bisa melakukan janji temu</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">Jakarta</td>
                        <td class="px-3 py-2 text-center">12/05/1990</td>
                        <td class="px-3 py-2 text-center">Sedan</td>
                        <td class="px-3 py-2 text-center">Kristiawan</td>
                        <td class="px-3 py-2 text-center">
                            <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                Pending
                            </button>
                        </td>
                        <td class="px-6 py-2">Sedang di luar kota</td>
                        <td class="px-3 py-2 flex justify-center space-x-2">
                            <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="size-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </button>
                            <button class="bg-red-600 text-white px-2 py-2 rounded shadow hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="pt-2">
        <div class="flex flex-col items-end px-6 py-3">
            <span class="text-sm text-gray-700 dark:text-gray-400 mb-2">
                Showing <span class="font-semibold text-gray-700">1</span> to
                <span class="font-semibold text-gray-700">10</span> of
                <span class="font-semibold text-gray-700">100</span> Entries
            </span>

            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-sm">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight
                        text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg
                        hover:bg-gray-100 hover:text-gray-700">
                            Previous
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight
                        text-blue-600 bg-white border border-gray-300 hover:bg-blue-100 hover:text-blue-700">
                            1
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight
                        text-gray-500 border border-gray-300 bg-gray-50 hover:bg-gray-100 hover:text-gray-700">
                            2
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8
                        text-gray-500 border border-gray-300 bg-gray-50 hover:bg-gray-100 hover:text-gray-700">
                            3
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight
                        text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                            Next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="w-full px-6 mx-auto mb-5">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        TRUST DB. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
@endsection
