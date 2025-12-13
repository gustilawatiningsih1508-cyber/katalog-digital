<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="LapakGo Admin Dashboard">
  <meta name="author" content="LapakGo">
  <title>Dashboard - LapakGo</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/admin/images/favicon.png') }}">
</head>

<body class="bg-gray-50">

  <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
            class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold flex items-center lg:ml-2.5">
            <img src="{{ asset('assets/admin/images/favicon.png') }}" class="h-6 mr-2" alt="LapakGo Logo"
              onerror="this.style.display='none'">
            <span class="self-center whitespace-nowrap">LapakGo</span>
          </a>
        </div>
        <div class="flex items-center">
          <div class="hidden lg:flex items-center">
            <span class="text-base font-normal text-gray-500 mr-5">
              {{ Auth::user()->username ?? 'User' }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="flex overflow-hidden bg-white pt-16">

    <aside id="sidebar"
      class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
      aria-label="Sidebar">
      <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
          <div class="flex-1 px-3 bg-white divide-y space-y-1">
            <ul class="space-y-2 pb-2">
              <li>
                <a href="{{ route('admin.dashboard') }}"
                  class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group bg-gray-100">
                  <svg class="w-6 h-6 text-gray-900 group-hover:text-gray-900 transition duration-75"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="ml-3">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{ route('users.index') }}"
                  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                  <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                </a>
              </li>
              <li>
                <a href="{{ route('products.index') }}"
                  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                  <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                </a>
              </li>
              <li>
                <a href="{{ route('promosi-admin.index') }}"
                  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                  <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-3 flex-1 whitespace-nowrap">Promosi</span>
                </a>
              </li>
            </ul>
            <a href="#!"
              class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
              <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span class="ml-3">Help</span>
            </a>
            <div class="space-y-2 pt-2">
              <button style="margin-top: 9cm;"></button>
              <div class="p-4 border-t border-gray-200 mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit"
                    class="w-full block py-2 px-3 rounded bg-red-600 text-center hover:bg-red-700 text-white">
                    Logout
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- Main Content Area -->
    <div class="bg-gray-50 relative overflow-y-auto lg:ml-64 flex-1">
      <main class="p-6">

        <!-- Success Message -->
        @if(session('success'))
          <div class="p-4 mb-4 text-sm text-green-800 bg-green-50 rounded-lg">
            {{ session('success') }}
          </div>
        @endif

        @if(session('error'))
          <div class="p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg">
            {{ session('error') }}
          </div>
        @endif

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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                  </path>
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

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
          <h2 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="{{ route('products.index') }}"
              class="p-4 bg-blue-50 rounded-lg text-center hover:bg-blue-100 transition-colors">
              <div class="mx-auto w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                  </path>
                </svg>
              </div>
              <p class="text-sm font-medium text-blue-700">Tambah Produk</p>
            </a>

            <a href="{{ route('promosi-admin.index') }}"
              class="p-4 bg-green-50 rounded-lg text-center hover:bg-green-100 transition-colors">
              <div class="mx-auto w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                  </path>
                </svg>
              </div>
              <p class="text-sm font-medium text-green-700">Buat Promosi</p>
            </a>

            <a href="{{ route('users.index') }}"
              class="p-4 bg-purple-50 rounded-lg text-center hover:bg-purple-100 transition-colors">
              <div class="mx-auto w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                  </path>
                </svg>
              </div>
              <p class="text-sm font-medium text-purple-700">Kelola User</p>
            </a>

            <a href="#" class="p-4 bg-yellow-50 rounded-lg text-center hover:bg-yellow-100 transition-colors">
              <div class="mx-auto w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                  </path>
                </svg>
              </div>
              <p class="text-sm font-medium text-yellow-700">Laporan</p>
            </a>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>

  <script>
    // Toggle sidebar mobile
    document.addEventListener('DOMContentLoaded', function () {
      const toggleButton = document.getElementById('toggleSidebarMobile');
      const sidebar = document.getElementById('sidebar');

      if (toggleButton && sidebar) {
        toggleButton.addEventListener('click', function () {
          sidebar.classList.toggle('hidden');
        });
      }
    });
  </script>
</body>

</html>