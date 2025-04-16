@extends('layouts/spv/main')
@vite('resources/css/app.css')

@section('content')

<main class="ml-auto w-4/5 md:w-3/4 lg:w-4/5 h-full flex flex-col overflow-y-auto">
    <div class="container">
        <div class="flex items-center space-x-3 mb-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mr-3 text-gray-800">
                <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 0 0 0 1.5H3v10.5a3 3 0 0 0 3 3h1.21l-1.172 3.513a.75.75 0 0 0 1.424.474l.329-.987h8.418l.33.987a.75.75 0 0 0 1.422-.474l-1.17-3.513H18a3 3 0 0 0 3-3V3.75h.75a.75.75 0 0 0 0-1.5H2.25Zm6.04 16.5.5-1.5h6.42l.5 1.5H8.29Zm7.46-12a.75.75 0 0 0-1.5 0v6a.75.75 0 0 0 1.5 0v-6Zm-3 2.25a.75.75 0 0 0-1.5 0v3.75a.75.75 0 0 0 1.5 0V9Zm-3 2.25a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5Z" clip-rule="evenodd" />
            </svg>
            <h2 class="text-2xl font-bold mb-1 text-gray-800">Laporan</h2>
        </div>

        <div class="flex items-center justify-between mb-4">
            <button type="button" class="flex items-center gap-x-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-500 dark:focus:ring-green-600 font-medium rounded-lg text-sm px-3 py-2 text-center me-2">
                <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01" />
                </svg>
                <span class="font-semibold">Export Excel</span>
            </button>

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
                        <th class="px-4 py-2 text-center font-semibold">Total Follow Up</th>
                        <th class="px-4 py-2 text-center font-semibold">Total Saved</th>
                        <th class="px-4 py-2 text-center font-semibold">Total Kontak Valid</th>
                        <th class="px-4 py-2 text-center font-semibold">Total kontak Tidak Valid</th>
                        <th class="px-4 py-2 text-center font-semibold">Total Pending (%)</th>
                        <th class="px-4 py-2 text-center font-semibold">Process (%)</th>
                        <th class="px-6 py-2 text-center font-semibold">Closing (%)</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                        <td class="px-3 py-2 text-center">TVBTG</td>
                        <td class="px-3 py-2 text-center">Andi</td>
                        <td class="px-3 py-2 text-center">50</td>
                        <td class="px-3 py-2 text-center">78</td>
                        <td class="px-3 py-2 text-center">40</td>
                        <td class="px-3 py-2 text-center">10</td>
                        <td class="px-3 py-2 text-center">20</td>
                        <td class="px-6 py-2">50</td>
                        <td class="px-6 py-2">30</td>
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
                        TRUST DB. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>

@endsection
