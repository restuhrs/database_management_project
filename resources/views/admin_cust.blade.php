@extends('layouts/main')
@vite('resources/css/app.css')

@section('content')

<div class="fixed left-0 top-0 w-full bg-white z-50 shadow-md p-4">
    <main class="ml-auto w-4/5 p-6 md:w-3/4 lg:w-4/5 mt-16 h-screen overflow-y-auto">
        <div class="flex">
            <div class="container">
                <div class="flex items-center space-x-3 mb-10">
                    <svg class="w-11 h-11 text-gray-800 dark:text-white mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-2xl font-bold mb-1">Data Customer</h2>
                </div>

                <div class="flex items-center justify-between">
                    <button type="button" class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-500 dark:focus:ring-green-600 font-medium rounded-lg text-sm px-2 py-2 text-center me-2">
                        <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01" />
                        </svg>
                        <span class="font-semibold">Import Excel</span>
                    </button>

                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2 text-center me-2">
                        <svg svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="font-semibold">Tambah</span>
                    </button>

                    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                        <div class="flex items-center md:ml-auto md:pr-4">
                            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-search"></i>
                                </span>
                                <input type="text" class="pl-8.75 text-sm ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring_blue-300" placeholder="Search..." />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="max-w-full overflow-x-auto max-h-96 overflow-y-auto">
                    <table class="min-w-max bg-white border border-gray-300 shadow rounded mt-4 text-sm">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="px-4 py-2 text-center font-semibold">Nama</th>
                                <th class="px-4 py-2 text-center font-semibold">Kota</th>
                                <th class="px-4 py-2 text-center font-semibold">Tanggal Lahir</th>
                                <th class="px-4 py-2 text-center font-semibold">Jenis Kendaraan</th>
                                <th class="px-4 py-2 text-center font-semibold">Salesman</th>
                                <th class="px-4 py-2 text-center font-semibold">Cabang</th>
                                <th class="px-4 py-2 text-center font-semibold">Progress</th>
                                <th class="px-6 py-2 text-center font-semibold">Alasan</th>
                                <th class="px-4 py-2 text-center font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota dan tidak bisa melakukan janji temu</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">Putra</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12 April 1985</td>
                                <td class="px-3 py-2 text-center">Sedan</td>
                                <td class="px-3 py-2 text-center">Kristiawan</td>
                                <td class="px-3 py-2 text-center">Pondok Cabe</td>
                                <td class="px-3 py-2 text-center">
                                    <button class="bg-yellow-500 text-white py-1 px-2 rounded shadow hover:bg-yellow-600 transition">
                                        Pending
                                    </button>
                                </td>
                                <td class="px-6 py-2">Sedang di luar kota</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-3 py-2 rounded shadow hover:bg-gray-600 transition">
                                        <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </button>
                                    <button class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700 transition">
                                        <svg class="w-6 h-6 ml-1 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-6 mb-8 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            CAR DEAL. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>
</main>
</div>
@endsection
