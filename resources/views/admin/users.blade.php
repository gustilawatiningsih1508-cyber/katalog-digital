<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="User Management - LapakGo">
  <title>User Management - LapakGo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin/images/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin/images/favicon-32x32.png') }}">
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
          <a href="/dashboard" class="text-xl font-bold flex items-center lg:ml-2.5">
            <img src="{{ asset('assets/admin/images/favicon.png') }}" class="h-6 mr-2" alt="LapakGo Logo">
            <span class="self-center whitespace-nowrap">LapakGo</span>
          </a>
                    <form action="#" method="GET" class="hidden lg:block lg:pl-32">
            <label for="topbar-search" class="sr-only">Search</label>
            <div class="mt-1 relative lg:w-64">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" name="email" id="topbar-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5"
                placeholder="Search">
            </div>
          </form>
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
              <ul class="space-y-2 pb-2">
                <li>
                  <a href="{{ route('dashboard') }}"
                    class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                      <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                  </a>
                </li>
              
                <li>
                  <a href="{{ route('users.index') }}"
                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group bg-gray-100">
                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                      fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
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
            </ul>
            <div class="space-y-2 pt-2">
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
            </div>
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

    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>

    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
      <main>
        <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
          <div class="mb-1 w-full">
            <div class="mb-4">
              <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                  <li class="inline-flex items-center">
                    <a href="/dashboard" class="text-gray-700 hover:text-gray-900 inline-flex items-center">
                      <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                      </svg>
                      Home
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <a href="/users"
                        class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">Users</a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium" aria-current="page">List</span>
                    </div>
                  </li>
                </ol>
              </nav>
              <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">All Users</h1>
            </div>
            <div class="sm:flex">
              <div class="hidden sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
                <form class="lg:pr-3" action="{{ route('users.search') }}" method="POST">
                  @csrf
                  <label for="users-search" class="sr-only">Search</label>
                  <div class="mt-1 relative lg:w-64 xl:w-96">
                    <input type="text" name="search" id="users-search"
                      class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                      placeholder="Search for users">
                  </div>
                </form>
              </div>
              <div class="flex items-center space-x-2 sm:space-x-3 ml-auto">
                <button type="button" data-modal-toggle="add-user-modal"
                  class="w-1/2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center sm:w-auto">
                  <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                      clip-rule="evenodd"></path>
                  </svg>
                  Add User
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- NOTIFIKASI -->
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

        @if($errors->any())
          <div class="p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden">
                <table class="table-fixed min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-100">
                    <tr>
                      <th scope="col" class="p-4">
                      </th>
                      <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                      <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Username</th>
                      <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                      <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Hak Akses</th>
                      <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Waktu Aktivitas
                      </th>
                      <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($users as $user)
                      <tr>
                        <td class="p-4">
                          <div class="flex items-center">
                            <input type="checkbox"
                              class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                          </div>
                        </td>
                        <td class="p-4 text-sm font-medium text-gray-900">
                          {{ $user->id }}
                        </td>
                        <td class="p-4 text-sm text-gray-900">
                          {{ $user->username }}
                        </td>
                        <td class="p-4 text-sm text-gray-900">
                          {{ $user->email }}
                        </td>
                        <td class="p-4 text-sm text-gray-900">
                          <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">
                            {{ $user->hak_akses == 1 ? 'Super Admin' : 'Penjual' }}
                          </span>
                        </td>
                        <td class="p-4 text-sm text-gray-900">
                          {{ $user->waktu_aktivitas ? $user->waktu_aktivitas->format('d M Y H:i') : '-' }}
                        </td>
                        <td class="p-4 text-sm font-medium">
                          <button type="button" data-modal-toggle="edit-user-modal-{{ $user->id }}"
                            class="text-cyan-600 hover:text-cyan-900 mr-3">Edit</button>
                          <button type="button" data-modal-toggle="delete-user-modal-{{ $user->id }}"
                            class="text-red-600 hover:text-red-900">Hapus</button>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="7" class="p-4 text-center text-gray-500">
                          Tidak ada data user
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- MODAL EDIT UNTUK SETIAP USER -->
        @foreach($users as $user)
          <div
            class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
            id="edit-user-modal-{{ $user->id }}">
            <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
              <div class="bg-white rounded-lg shadow relative">
                <div class="flex items-start justify-between p-5 border-b rounded-t">
                  <h3 class="text-xl font-semibold">Edit User</h3>
                  <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="edit-user-modal-{{ $user->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-3">
                        <label for="edit-username-{{ $user->id }}"
                          class="text-sm font-medium text-gray-900 block mb-2">Username</label>
                        <input type="text" name="username" id="edit-username-{{ $user->id }}"
                          value="{{ $user->username }}"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                          required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="edit-email-{{ $user->id }}"
                          class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                        <input type="email" name="email" id="edit-email-{{ $user->id }}" value="{{ $user->email }}"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                          required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="edit-password-{{ $user->id }}"
                          class="text-sm font-medium text-gray-900 block mb-2">Password (Kosongkan jika tidak
                          diubah)</label>
                        <input type="password" name="password" id="edit-password-{{ $user->id }}"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                          placeholder="••••••••">
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="edit-hak-akses-{{ $user->id }}"
                          class="text-sm font-medium text-gray-900 block mb-2">Hak Akses</label>
                        <select name="hak_akses" id="edit-hak-akses-{{ $user->id }}"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                          required>
                          <option value="1" {{ $user->hak_akses == 1 ? 'selected' : '' }}>Super Admin</option>
                          <option value="2" {{ $user->hak_akses == 2 ? 'selected' : '' }}>Penjual</option>
                        </select>
                      </div>
                      <div class="col-span-6">
                        <label for="edit-laporan-aktifitas-{{ $user->id }}"
                          class="text-sm font-medium text-gray-900 block mb-2">Laporan Aktifitas</label>
                        <textarea name="laporan_aktifitas" id="edit-laporan-aktifitas-{{ $user->id }}"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">{{ $user->laporan_aktifitas }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="p-6 border-t border-gray-200 rounded-b">
                    <button type="submit"
                      class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan
                      Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        @endforeach

        <!-- MODAL HAPUS UNTUK SETIAP USER -->
        @foreach($users as $user)
          <div
            class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
            id="delete-user-modal-{{ $user->id }}">
            <div class="relative w-full max-w-md px-4 h-full md:h-auto">
              <div class="bg-white rounded-lg shadow relative">
                <div class="flex justify-end p-2">
                  <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="delete-user-modal-{{ $user->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </div>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <div class="p-6 pt-0 text-center">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Apakah Anda yakin ingin menghapus user ini?
                    </h3>
                    <button type="submit"
                      class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                      Ya, Hapus
                    </button>
                    <button type="button"
                      class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center"
                      data-modal-toggle="delete-user-modal-{{ $user->id }}">
                      Tidak, Batal
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        @endforeach

        <!-- Add User Modal -->
        <div
          class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
          id="add-user-modal">
          <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
            <div class="bg-white rounded-lg shadow relative">
              <div class="flex items-start justify-between p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold">Add new user</h3>
                <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                  data-modal-toggle="add-user-modal">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
              <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="p-6 space-y-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="username" class="text-sm font-medium text-gray-900 block mb-2">Username</label>
                      <input type="text" name="username" id="username"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                      <input type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Password</label>
                      <input type="password" name="password" id="password"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="password_confirmation" class="text-sm font-medium text-gray-900 block mb-2">Konfirmasi
                        Password</label>
                      <input type="password" name="password_confirmation" id="password_confirmation"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="hak_akses" class="text-sm font-medium text-gray-900 block mb-2">Hak Akses</label>
                      <select name="hak_akses" id="hak_akses"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        required>
                        <option value="1">Super Admin</option>
                        <option value="2">Penjual</option>
                      </select>
                    </div>
                    <div class="col-span-6">
                      <label for="laporan_aktifitas" class="text-sm font-medium text-gray-900 block mb-2">Laporan
                        Aktifitas</label>
                      <textarea name="laporan_aktifitas" id="laporan_aktifitas"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"></textarea>
                    </div>
                  </div>
                </div>
                <div class="p-6 border-t border-gray-200 rounded-b">
                  <button type="submit"
                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add
                    User</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>
</body>

</html>