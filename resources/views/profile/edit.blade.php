<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile - LapakGo</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-header {
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 14px;
        }
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
        }
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        .radio-group {
            display: flex;
            gap: 20px;
        }
        .radio-label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .radio-label input {
            margin-right: 8px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .btn-secondary {
            background: #6c757d;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-secondary:hover {
            background: #5a6268;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 rounded">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold flex items-center lg:ml-2.5">
                        <img src="{{ asset('assets/admin/images/favicon.png') }}" class="h-6 mr-2" alt="LapakGo Logo">
                        <span class="self-center whitespace-nowrap">LapakGo</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex overflow-hidden bg-white pt-16">
        <!-- Sidebar (sama seperti profile show) -->
        <aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75">
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-3 bg-white divide-y space-y-1">
                        <ul class="space-y-2 pb-2">
                            <li>
                                <a href="{{ route('dashboard') }}" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            
                            @if(Auth::user()->hak_akses == 1)
                            <li>
                                <a href="{{ route('users.index') }}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                                </a>
                            </li>
                            @endif
                            
                            <li>
                                <a href="{{ route('products.index') }}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ route('promosi-admin.index') }}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Promosi</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profile.show') }}" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group bg-gray-100">
                                    <svg class="w-6 h-6 text-gray-900 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Profile</span>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="space-y-2 pt-2">
                            <button style="margin-top: 380px;"></button>
                            <div class="p-4 border-t border-gray-200 mt-auto">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full block py-2 px-3 rounded bg-red-600 text-center hover:bg-red-700 text-white">
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
            <main class="p-6">
                <div class="form-container">
                    <div class="form-header">
                        <h1 class="text-2xl font-bold text-gray-900 flex items-center">
                            <i class="fas fa-user-edit text-blue-600 mr-3"></i>
                            Edit Profile
                        </h1>
                        <p class="text-gray-600 mt-2">Perbarui informasi profile Anda</p>
                    </div>

                    @if($errors->any())
                        <div class="p-4 mb-6 text-sm text-red-800 bg-red-50 rounded-lg border border-red-200">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Username -->
                            <div class="form-group">
                                <label for="username" class="form-label">
                                    <i class="fas fa-user text-gray-500"></i> Username *
                                </label>
                                <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="form-control" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope text-gray-500"></i> Email *
                                </label>
                                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone" class="form-label">
                                    <i class="fas fa-phone text-gray-500"></i> No. Telepon
                                </label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" class="form-control" placeholder="08123456789">
                            </div>

                            <!-- Birth Date -->
                            <div class="form-group">
                                <label for="birth_date" class="form-label">
                                    <i class="fas fa-birthday-cake text-gray-500"></i> Tanggal Lahir
                                </label>
                                <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date', $user->birth_date?->format('Y-m-d')) }}" class="form-control">
                            </div>

                            <!-- Gender -->
                            <div class="form-group md:col-span-2">
                                <label class="form-label">
                                    <i class="fas fa-venus-mars text-gray-500"></i> Jenis Kelamin
                                </label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="gender" value="male" {{ old('gender', $user->gender) == 'male' ? 'checked' : '' }}>
                                        <span>Laki-laki</span>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="gender" value="female" {{ old('gender', $user->gender) == 'female' ? 'checked' : '' }}>
                                        <span>Perempuan</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="form-group md:col-span-2">
                                <label for="address" class="form-label">
                                    <i class="fas fa-map-marker-alt text-gray-500"></i> Alamat
                                </label>
                                <textarea name="address" id="address" rows="3" class="form-control" placeholder="Alamat lengkap Anda">{{ old('address', $user->address) }}</textarea>
                            </div>

                            <!-- Bio -->
                            <div class="form-group md:col-span-2">
                                <label for="bio" class="form-label">
                                    <i class="fas fa-comment-alt text-gray-500"></i> Bio
                                </label>
                                <textarea name="bio" id="bio" rows="4" class="form-control" placeholder="Ceritakan sedikit tentang diri Anda" maxlength="500">{{ old('bio', $user->bio) }}</textarea>
                                <small class="text-gray-500">Maksimal 500 karakter</small>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3 mt-8 pt-6 border-t border-gray-200">
                            <button type="submit" class="btn-primary">
                                <i class="fas fa-save"></i> Simpan Perubahan
                            </button>
                            <a href="{{ route('profile.show') }}" class="btn-secondary">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>
</body>
</html>