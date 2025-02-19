@extends('layouts.sales.main')
@vite('resources/css/app.css')

@section('content')

<div class="fixed left-0 top-0 w-full bg-white z-50 shadow-md p-4">
    <main class="ml-auto w-4/5 p-6 md:w-3/4 lg:w-4/5 mt-16 h-screen overflow-y-auto">
        <div class="flex">
            <div class="container">
                <div class="flex items-center space-x-3 mb-10">
                    <svg class="size-9 text-gray-800 dark:text-white mr-3 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 45 40">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="currentColor" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                        <path class="opacity-60" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                        <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-2xl font-bold mb-1 text-gray-800">Dashboard</h2>
                </div>

                <!-- cards -->
                <div class=" w-full py-6 mx-auto">
                    <!-- cards row 1 -->
                    <div class="w-full max-w-full px-1 mt-0 lg:w-7/12 lg:flex-none">
                        <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                                <h6>Customer Databases</h6>
                                <p class="text-sm leading-normal">
                                    <i class="fa fa-arrow-up text-lime-500"></i>
                                    <span class="font-semibold">4% more</span> in 2024
                                </p>
                            </div>
                            <div class="flex-auto p-4">
                                <div>
                                    <canvas id="chart-line" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="pt-4">
                    <div class="w-full px-6 mx-auto">
                        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
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
<div class="flex">
    <main class="ml-auto w-4/5 p-6 md:w-3/4 lg:w-4/5">
        <!-- cards -->
        <div class=" w-full px-6 py-6 mx-auto">
            <!-- cards row 1 -->
            <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
                <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Sales overview</h6>
                        <p class="text-sm leading-normal">
                            <i class="fa fa-arrow-up text-lime-500"></i>
                            <span class="font-semibold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="chart-line" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-4">
            <div class="w-full mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            © Copyright
                            <script>
                                document.write(new Date().getFullYear() + ".");
                            </script>
                            CAR DEAL.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>
<!-- end cards -->
</main>
</div>

@endsection
