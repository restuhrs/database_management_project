@extends('layouts/main')
@vite('resources/css/app.css')

@section('content')
<div class="fixed left-0 top-0 w-full bg-white z-50 shadow-md p-4">
    <main class="ml-auto w-4/5 p-6 md:w-3/4 mt-16 h-screen overflow-y-auto">
        <div class="flex">
            <div class="container">
                <div class="flex items-center space-x-3 mb-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mr-3 text-gray-800">
                        <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                    </svg>
                    <h2 class="text-2xl font-bold mb-1 text-gray-800">Data Akun</h2>
                </div>

                <div class="flex items-center justify-between">
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
                        <thead class="bg-gray-300 text-black">
                            <tr>
                                <th class="px-4 py-2 text-center font-semibold">ID</th>
                                <th class="px-4 py-2 text-center font-semibold">Username</th>
                                <th class="px-4 py-2 text-center font-semibold">Role</th>
                                <th class="px-4 py-2 text-center font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b hover:bg-gray-100 transition duration-200">
                                <td class="px-3 py-2 text-center">1</td>
                                <td class="px-3 py-2 text-center">fadjri</td>
                                <td class="px-3 py-2 text-center">sales</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">1</td>
                                <td class="px-3 py-2 text-center">fadjri</td>
                                <td class="px-3 py-2 text-center">sales</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">1</td>
                                <td class="px-3 py-2 text-center">fadjri</td>
                                <td class="px-3 py-2 text-center">sales</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">1</td>
                                <td class="px-3 py-2 text-center">fadjri</td>
                                <td class="px-3 py-2 text-center">sales</td>
                                <td class="px-3 py-2 flex justify-center space-x-2">
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">Andi</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12-05-1985</td>
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
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">Andi</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12-05-1985</td>
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
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">Andi</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12-05-1985</td>
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
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                                <td class="px-3 py-2 text-center">Andi</td>
                                <td class="px-3 py-2 text-center">Jakarta</td>
                                <td class="px-3 py-2 text-center">12-05-1985</td>
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
                                    <button class="bg-gray-400 text-white px-2 py-2 rounded shadow hover:bg-gray-600 transition">
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
                            CAR DEAL. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</div>

@endsection
