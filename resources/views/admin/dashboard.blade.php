<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a free and open source Tailwind CSS admin dashboard featuring a sidebar layout, advanced charts, and hundreds of components based on Flowbite">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.143.0">

    <title>LapakGo</title>

    <link rel="canonical" href="index.php">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets admin/css/app.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets admin/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets admin/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets admin/images/favicon-16x16.png">
    <link rel="icon" type="image/png" href="assets admin/images/favicon.ico">
    <link rel="manifest" href="assets admin/images/site.webmanifest">
    <link rel="mask-icon" href="assets admin/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141734189-6');
    </script>

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-THQTXJ7');</script>
  </head>
  <body class="bg-gray-50">
      
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      
    <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
              <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <a href="index.php" class="text-xl font-bold flex items-center lg:ml-2.5">
              <img src="assets admin/images/logo.svg" class="h-6 mr-2" alt="LapakGo Logo">
              <span class="self-center whitespace-nowrap">LapakGo</span>
            </a>
            <form action="#" method="GET" class="hidden lg:block lg:pl-32">
              <label for="topbar-search" class="sr-only">Search</label>
              <div class="mt-1 relative lg:w-64">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
              </div>
            </form>
          </div>
          <div class="flex items-center">
            <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
              <span class="sr-only">Search</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden lg:flex items-center">
              <span class="text-base font-normal text-gray-500 mr-5"></span>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="flex overflow-hidden bg-white pt-16">

      <aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
        <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
          <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white divide-y space-y-1">
              <ul class="space-y-2 pb-2">
                <li>
                  <form action="#" method="GET" class="lg:hidden">
                    <label for="mobile-search" class="sr-only">Search</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                      </div>
                      <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                    </div>
                  </form>
                </li>
                <li>
                  <a href="dashboard" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="users" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Admin</span>
                  </a>
                </li>
                <li>
                  <a href="products" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                  </a>
                </li>
                <li>
                  <a href="promosi-admin" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Promosi</span>
                  </a>
                </li>
                <li>
                  <a href="sign-in" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Sign-In</span>
                  </a>
                </li>
                <li>
                  <a href="sign-up" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Sign-Up</span>
                  </a>
                </li>
              </ul>
              <div class="space-y-2 pt-2">
                <a href="#!" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                  <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                  <span class="ml-3">Help</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <div class="bg-gray-50 relative overflow-y-auto lg:ml-64 flex-1">
        <main class="p-6">
          <!-- Welcome Section -->
          <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Selamat Datang di Dashboard LapakGo</h1>
            <p class="text-gray-600">Kelola toko online Anda dengan mudah dan efisien</p>
          </div>

          <!-- Stats Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
              <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-500 mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-medium text-gray-600">Total Produk</p>
                  <p class="text-2xl font-bold text-gray-900">1,248</p>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-green-500 text-sm font-medium">+12.5%</span>
                <span class="text-gray-500 text-sm">dari bulan lalu</span>
              </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
              <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-500 mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-medium text-gray-600">Pesanan Selesai</p>
                  <p class="text-2xl font-bold text-gray-900">892</p>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-green-500 text-sm font-medium">+8.3%</span>
                <span class="text-gray-500 text-sm">dari bulan lalu</span>
              </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
              <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-500 mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-medium text-gray-600">Pesanan Tertunda</p>
                  <p class="text-2xl font-bold text-gray-900">56</p>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-red-500 text-sm font-medium">-2.1%</span>
                <span class="text-gray-500 text-sm">dari bulan lalu</span>
              </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
              <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-500 mr-4">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-medium text-gray-600">Pelanggan Baru</p>
                  <p class="text-2xl font-bold text-gray-900">124</p>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-green-500 text-sm font-medium">+15.7%</span>
                <span class="text-gray-500 text-sm">dari bulan lalu</span>
              </div>
            </div>
          </div>

          <!-- Charts and Recent Activity -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Sales Chart -->
            <div class="bg-white rounded-lg shadow p-6">
              <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Statistik Penjualan</h2>
                <div class="flex space-x-2">
                  <button class="text-sm px-3 py-1 bg-blue-100 text-blue-600 rounded-full">Minggu</button>
                  <button class="text-sm px-3 py-1 bg-gray-100 text-gray-600 rounded-full">Bulan</button>
                  <button class="text-sm px-3 py-1 bg-gray-100 text-gray-600 rounded-full">Tahun</button>
                </div>
              </div>
              <div class="h-64 flex items-center justify-center bg-gray-50 rounded-lg">
                <p class="text-gray-500">Grafik penjualan akan ditampilkan di sini</p>
              </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow p-6">
              <h2 class="text-lg font-semibold text-gray-900 mb-4">Pesanan Terbaru</h2>
              <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                  <div>
                    <p class="font-medium text-gray-900">#ORD-001245</p>
                    <p class="text-sm text-gray-500">Budi Santoso</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 450.000</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                      Selesai
                    </span>
                  </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                  <div>
                    <p class="font-medium text-gray-900">#ORD-001244</p>
                    <p class="text-sm text-gray-500">Sari Indah</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 320.000</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                      Proses
                    </span>
                  </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                  <div>
                    <p class="font-medium text-gray-900">#ORD-001243</p>
                    <p class="text-sm text-gray-500">Ahmad Fauzi</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 780.000</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                      Dikirim
                    </span>
                  </div>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                  <div>
                    <p class="font-medium text-gray-900">#ORD-001242</p>
                    <p class="text-sm text-gray-500">Dewi Lestari</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 210.000</p>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                      Batal
                    </span>
                  </div>
                </div>
              </div>
              <div class="mt-4 text-center">
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lihat semua pesanan</a>
              </div>
            </div>
          </div>

          <!-- Top Products and Quick Actions -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Top Products -->
            <div class="bg-white rounded-lg shadow p-6">
              <h2 class="text-lg font-semibold text-gray-900 mb-4">Produk Terlaris</h2>
              <div class="space-y-4">
                <div class="flex items-center">
                  <div class="w-10 h-10 bg-gray-200 rounded-lg flex-shrink-0"></div>
                  <div class="ml-4 flex-1">
                    <p class="font-medium text-gray-900">Smartphone XYZ</p>
                    <p class="text-sm text-gray-500">Terjual: 245 pcs</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 3.450.000</p>
                    <div class="flex items-center text-yellow-400">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                      </svg>
                      <span class="ml-1 text-sm text-gray-600">4.8</span>
                    </div>
                  </div>
                </div>
                <div class="flex items-center">
                  <div class="w-10 h-10 bg-gray-200 rounded-lg flex-shrink-0"></div>
                  <div class="ml-4 flex-1">
                    <p class="font-medium text-gray-900">Laptop ABC</p>
                    <p class="text-sm text-gray-500">Terjual: 189 pcs</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 8.750.000</p>
                    <div class="flex items-center text-yellow-400">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                      </svg>
                      <span class="ml-1 text-sm text-gray-600">4.6</span>
                    </div>
                  </div>
                </div>
                <div class="flex items-center">
                  <div class="w-10 h-10 bg-gray-200 rounded-lg flex-shrink-0"></div>
                  <div class="ml-4 flex-1">
                    <p class="font-medium text-gray-900">Headphone Premium</p>
                    <p class="text-sm text-gray-500">Terjual: 312 pcs</p>
                  </div>
                  <div class="text-right">
                    <p class="font-medium text-gray-900">Rp 650.000</p>
                    <div class="flex items-center text-yellow-400">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                      </svg>
                      <span class="ml-1 text-sm text-gray-600">4.9</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-lg shadow p-6">
              <h2 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h2>
              <div class="grid grid-cols-2 gap-4">
                <a href="products" class="p-4 bg-blue-50 rounded-lg text-center hover:bg-blue-100 transition-colors">
                  <div class="mx-auto w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium text-blue-700">Tambah Produk</p>
                </a>
                <a href="promosi-admin" class="p-4 bg-green-50 rounded-lg text-center hover:bg-green-100 transition-colors">
                  <div class="mx-auto w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium text-green-700">Buat Promosi</p>
                </a>
                <a href="users" class="p-4 bg-purple-50 rounded-lg text-center hover:bg-purple-100 transition-colors">
                  <div class="mx-auto w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium text-purple-700">Kelola Admin</p>
                </a>
                <a href="#" class="p-4 bg-yellow-50 rounded-lg text-center hover:bg-yellow-100 transition-colors">
                  <div class="mx-auto w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium text-yellow-700">Laporan</p>
                </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script src="assets admin/js/app.bundle.js"></script>
  </body>
</html>