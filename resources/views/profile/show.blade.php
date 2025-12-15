<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - LapakGo</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 0;
            color: white;
        }

        .avatar-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
        }

        .avatar-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .info-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .info-row {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #666;
            width: 150px;
            flex-shrink: 0;
        }

        .info-value {
            color: #333;
            flex: 1;
        }

        .badge-role {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .badge-admin {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .badge-seller {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile"
                        class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 rounded">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold flex items-center lg:ml-2.5">
                        <img src="{{ asset('assets/admin/images/favicon.png') }}" class="h-6 mr-2" alt="LapakGo Logo">
                        <span class="self-center whitespace-nowrap">LapakGo</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <span class="text-base font-normal text-gray-500 mr-5">
                        {{ Auth::user()->username }}
                        @if(Auth::user()->hak_akses == 1)
                            <span class="ml-2 px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded">Admin</span>
                        @else
                            <span class="ml-2 px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Penjual</span>
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex overflow-hidden bg-white pt-16">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75">
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-3 bg-white divide-y space-y-1">
                        <ul class="space-y-2 pb-2">
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>

                            @if(Auth::user()->hak_akses == 1)
                                <li>
                                    <a href="{{ route('users.index') }}"
                                        class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                                            </path>
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('products.index') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20">
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
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Promosi</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profile.show') }}"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group bg-gray-100">
                                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Profile</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Help -->
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
                            <button style="margin-top: 380px;"></button>
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

        <!-- Main Content -->
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <!-- Profile Header -->
                <div class="profile-header">
                    <div class="container">
                        <div class="avatar-container">
                            <img src="{{ $user->avatar_url }}" alt="Avatar" class="avatar-image">
                        </div>
                        <h1 class="text-center text-3xl font-bold mb-2">{{ $user->username }}</h1>
                        <p class="text-center opacity-90">{{ $user->email }}</p>
                        <div class="text-center mt-3">
                            @if($user->hak_akses == 1)
                                <span class="badge-role badge-admin">
                                    <i class="fas fa-crown"></i> Super Admin
                                </span>
                            @else
                                <span class="badge-role badge-seller">
                                    <i class="fas fa-store"></i> Penjual
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Alert Messages -->
                <div class="container mx-auto px-4 py-6">
                    @if(session('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 bg-green-50 rounded-lg border border-green-200">
                            <i class="fas fa-check-circle"></i> {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error') || $errors->any())
                        <div class="p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg border border-red-200">
                            <i class="fas fa-exclamation-circle"></i>
                            @if(session('error'))
                                {{ session('error') }}
                            @else
                                @foreach($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            @endif
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 mb-6">
                        <a href="{{ route('profile.edit') }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            <i class="fas fa-edit mr-2"></i> Edit Profile
                        </a>
                        <button type="button" data-modal-toggle="avatar-modal"
                            class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                            <i class="fas fa-camera mr-2"></i> Ubah Foto
                        </button>
                        <a href="{{ route('profile.change-password') }}"
                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                            <i class="fas fa-key mr-2"></i> Ubah Password
                        </a>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Personal Information -->
                        <div class="info-card">
                            <h2 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-user text-blue-600 mr-2"></i>
                                Informasi Personal
                            </h2>
                            <div class="info-row">
                                <div class="info-label">Username:</div>
                                <div class="info-value">{{ $user->username }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Email:</div>
                                <div class="info-value">{{ $user->email }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">No. Telepon:</div>
                                <div class="info-value">{{ $user->phone ?? '-' }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Tanggal Lahir:</div>
                                <div class="info-value">
                                    @if($user->birth_date)
                                        {{ $user->birth_date->format('d F Y') }}
                                        <span class="text-sm text-gray-500">({{ $user->age }} tahun)</span>
                                    @else
                                        -
                                    @endif
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Jenis Kelamin:</div>
                                <div class="info-value">
                                    @if($user->gender == 'male')
                                        <i class="fas fa-mars text-blue-500"></i> Laki-laki
                                    @elseif($user->gender == 'female')
                                        <i class="fas fa-venus text-pink-500"></i> Perempuan
                                    @else
                                        -
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Account Information -->
                        <div class="info-card">
                            <h2 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-info-circle text-green-600 mr-2"></i>
                                Informasi Akun
                            </h2>
                            <div class="info-row">
                                <div class="info-label">Status Akun:</div>
                                <div class="info-value">
                                    @if($user->email_verified_at)
                                        <span class="text-green-600"><i class="fas fa-check-circle"></i>
                                            Terverifikasi</span>
                                    @else
                                        <span class="text-red-600"><i class="fas fa-times-circle"></i> Belum
                                            Terverifikasi</span>
                                    @endif
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Tipe Login:</div>
                                <div class="info-value">
                                    @if($user->google_id)
                                        <i class="fab fa-google text-red-500"></i> Google Account
                                    @else
                                        <i class="fas fa-envelope"></i> Email & Password
                                    @endif
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Bergabung:</div>
                                <div class="info-value">{{ $user->created_at->format('d F Y') }}</div>
                            </div>
                            <div class="info-row">
                                <div class="info-label">Terakhir Aktif:</div>
                                <div class="info-value">
                                    @if($user->waktu_aktivitas)
                                        {{ $user->waktu_aktivitas->diffForHumans() }}
                                    @else
                                        -
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Address & Bio -->
                        @if($user->address || $user->bio)
                            <div class="info-card lg:col-span-2">
                                @if($user->address)
                                    <h3 class="text-lg font-semibold mb-2 flex items-center">
                                        <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                                        Alamat
                                    </h3>
                                    <p class="text-gray-700 mb-4">{{ $user->address }}</p>
                                @endif

                                @if($user->bio)
                                    <h3 class="text-lg font-semibold mb-2 flex items-center">
                                        <i class="fas fa-comment-alt text-purple-600 mr-2"></i>
                                        Bio
                                    </h3>
                                    <p class="text-gray-700">{{ $user->bio }}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal Upload Avatar -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
        id="avatar-modal">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <div class="bg-white rounded-lg shadow relative">
                <div class="flex items-start justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold">Ubah Foto Profile</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="avatar-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('profile.update-avatar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6">
                        <div class="mb-4 text-center">
                            <img src="{{ $user->avatar_url }}" alt="Current Avatar"
                                class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-gray-200"
                                id="preview-avatar">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Foto Baru</label>
                            <input type="file" name="avatar" id="avatar-input" accept="image/*"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                required>
                            <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                        </div>
                    </div>
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <i class="fas fa-upload"></i> Upload Foto
                        </button>
                        @if($user->avatar && !filter_var($user->avatar, FILTER_VALIDATE_URL))
                            <form action="{{ route('profile.delete-avatar') }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus foto profile?')"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                    <i class="fas fa-trash"></i> Hapus Foto
                                </button>
                            </form>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>
    <script>
        // Preview avatar before upload
        document.getElementById('avatar-input').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('preview-avatar').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>