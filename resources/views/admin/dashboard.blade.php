@extends('layouts.admin.main')
@vite('resources/css/app.css')

@section('content')

<main class="ml-auto w-4/5 md:w-3/4 lg:w-4/5 h-full flex flex-col overflow-y-auto">
    <div class="container">
        <div class="flex items-center space-x-3 mb-10">
            <svg class="w-8 h-8 mb-2 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 45 40">
                <!-- SVG Icon -->
            </svg>
            <h2 class="text-2xl font-bold mb-1 text-gray-800">Dashboard</h2>
        </div>

        <!-- Row 1 -->
        <div class="flex flex-wrap">
            <!-- Card 1: Pusat Data, Follow Up Sales, Saved by Sales -->
            <div class="overflow-x-auto w-full lg:w-7/12 px-1">
                <div class="w-full sm:min-w-[300px] md:min-w-[400px] lg:min-w-[450px]">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <span class="font-semibold text-2xl text-blue-700">Big Data Pusat</span>
                    </div>
                    <div class="flex justify-center p-2 mt-4">
                        <canvas id="chart-pie" width="300" height="300"></canvas>
                    </div>
                    <hr class="h-px mt-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                    <div class="ml-6 text-sm mt-6">
                        <div class="mb-4">
                            <span class="font-[Poppins]">Big Data : {{ isset($pusatData) ? $pusatData : 'Data tidak tersedia' }}</span>
                        </div>
                        <div class="mb-4">
                            <span class="font-[Poppins]">Follow Up Sales : {{ isset($followUpSales) ? $followUpSales : 'Data tidak tersedia' }}</span>
                        </div>
                        <div class="mb-4">
                            <span class="font-[Poppins]">Saved by Sales : {{ isset($savedBySales) ? $savedBySales : 'Data tidak tersedia' }}</span>
                        </div>
                    </div>                                                  
                </div>
            </div>

            <!-- Card 2: Pencapaian Sales dalam Follow Up Customer -->
            <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-[450px] flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <span class="font-semibold text-xl text-blue-700">Pencapaian Sales dalam Follow Up Customer</span>
                    </div>
                    <div class="flex-auto p-4">
                        <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                            <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                <div class="max-w-full overflow-x-auto overflow-y-auto max-h-[500px] scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
                                    <table class="min-w-max bg-white border border-gray-300 shadow rounded text-sm">
                                        <thead class="bg-gray-300 text-black">
                                            <tr>
                                                <th class="px-4 py-2 text-center font-semibold">No.</th>
                                                <th class="px-4 py-2 text-center font-semibold">Cabang</th>
                                                <th class="px-4 py-2 text-center font-semibold">Nama Sales</th>
                                                <th class="px-4 py-2 text-center font-semibold">Follow Up</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700">
                                            @if(isset($salesmen) && $salesmen->count() > 0)
                                                @foreach($salesmen as $key => $salesman)
                                                    <tr class="border-b hover:bg-gray-100 transition duration-200">
                                                        <td class="px-3 py-2 text-center">{{ $key + 1 }}</td>
                                                        <td class="px-3 py-2 text-center">{{ optional($salesman->branch)->name ?? 'Data tidak tersedia' }}</td>
                                                        <td class="px-3 py-2 text-center">{{ $salesman->name ?? 'Data tidak tersedia' }}</td>
                                                        <td class="px-3 py-2 text-center">{{ $salesman->customers()->where('progress', 'follow_up')->count() ?? '0' }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4" class="px-3 py-2 text-center">Tidak ada data salesman</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Card 2 -->
        </div> <!-- End Row -->

        <!-- Pie Chart Diagram -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('chart-pie').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Pusat Data', 'Follow Up Sales', 'Saved by Sales'],
                    datasets: [{
                        data: [
                            {{ isset($pusatData) ? $pusatData : 0 }},
                            {{ isset($followUpSales) ? $followUpSales : 0 }},
                            {{ isset($savedBySales) ? $savedBySales : 0 }}
                        ],
                        backgroundColor: ['#4CAF50', '#FFC107', '#FF5722']
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: false
                }
            });
        </script>

        <footer class="w-full mt-4 flex border-t pt-4">
            <div class="text-sm text-slate-500">
                © <script>
                    document.write(new Date().getFullYear());
                </script> TRUST DB. All rights reserved.
            </div>
        </footer>
    </main>

@endsection
