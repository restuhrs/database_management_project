<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="https://i.pinimg.com/474x/ec/fb/cc/ecfbcc8e62cbd0e18b4de89960ecb606.jpg" />
    <title>TrustDB</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <!-- Tailwind css icons -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <span class="absolute top-5 left-4 cursor-pointer" onclick="toggleSidebar()">
        <button class="flex items-center justify-center w-12 h-12 bg-white border-2 border-blue-600 rounded-xl shadow-md hover:bg-gray-100">
            <i class="fas fa-bars text-blue-600 text-xl"></i>
        </button>
    </span>
    <!-- sidenav  -->
    <aside class="sidebar max-w-64 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-lg transition-transform duration-200 xl:left-0">
        <div class="h-20 mb-2 flex items-center">
            <img src="https://i.pinimg.com/474x/ec/fb/cc/ecfbcc8e62cbd0e18b4de89960ecb606.jpg" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12 ml-4 bg-blue-600 rounded-lg" alt="logo" />
            <span class="ml-5 text-gray-800 font-bold text-lg transition-all duration-200 ease-nav-brand">TrustDB</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer ml-10 transition-colors hover:text-blue-600" onclick="toggleSidebar()">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
            </svg>
        </div>
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto min-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-2 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 font-semibold transition-colors hover:text-blue-600">
                        <div class="shadow-soft-2xl mr-2 flex w-10 h-10 items-center justify-center rounded-lg bg-white stroke-0 text-center xl:p-2.5">
                            <svg class="size-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 45 40">
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
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 font-semibold transition-colors hover:text-blue-600">
                        <div class="shadow-soft-2xl mr-2 flex w-10 h-10 items-center justify-center rounded-lg bg-white stroke-0 text-center xl:p-2.5">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                                <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Laporan</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 font-semibold transition-colors hover:text-blue-600">
                        <div class="shadow-soft-2xl mr-2 flex w-10 h-10 items-center justify-center rounded-lg bg-white stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6A2.25 2.25 0 0 0 15.75 18.75V15M12 9l-3 3m0 0 3 3m-3-3h12.75"></path>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                    </a>
                </li>
            </ul>
    </aside>

    <!-- end sidenav -->

    <!-- Navbar -->
    <nav class="ml-80 flex flex-wrap items-center justify-between px-6 py-2 mx-6 transition-all shadow-lg duration-250 ease-soft-in rounded-2xl">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto">
            <nav>
                <!-- Breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="opacity-50 text-slate-700" href="#">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:content-['/'] before:pr-2 before:text-gray-600" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
            </nav>

            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <!-- notifications -->
                <li class="relative flex items-center pr-2 mr-8">
                    <p class="hidden transform-dropdown-show"></p>
                    <a href="#" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
                        <i class="fa fa-bell fa-xl flex items-center justify-center cursor-pointer"></i>
                    </a>

                    <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                        <!-- add show class on dropdown open js -->
                        <li class="relative mb-2">
                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="#">
                                <div class="flex py-1">
                                    <!-- <div class="my-auto">
                                        <img src="./assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                                    </div> -->
                                    <div class="flex flex-col justify-center">
                                        <h6>-- Coming Soon --</h6>
                                        <!-- <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Pesan baru</span> dari Admin</h6>
                                        <p class="mb-0 text-xs leading-tight text-slate-400">
                                            <i class="mr-1 fa fa-clock"></i>
                                            13 minutes ago
                                        </p> -->
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- profile picture  -->

                <li class="flex items-center">
                    <a href="" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                        <img class="w-8 h-8 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="https://i.pinimg.com/474x/c7/9a/37/c79a37e13ef14be556b51143bcbb1b01.jpg" alt="foto profil">
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- end Navbar -->

    <!-- Konten Utama -->
    <main class="flex-1 overflow-y-auto p-6">
        @yield('content')
    </main>


    <script type="text/javascript">
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('-translate-x-full');
        }

        function dropdown() {
            document.querySelector('#submenu').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-0');
        }
        dropdown()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('chart-pie').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Pusat Data', 'Follow Up Sales', 'Saved by Sales'],
                datasets: [{
                    data: [50, 30, 30],
                    backgroundColor: ['#4CAF50', '#FFC107', '#FF5722']
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: false
            }
        });
    </script>

</body>

<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>
