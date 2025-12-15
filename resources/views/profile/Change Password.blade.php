<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Password - LapakGo</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .password-field {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }
        .password-strength {
            margin-top: 10px;
            display: none;
        }
        .strength-bar {
            height: 5px;
            background: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }
        .strength-fill {
            height: 100%;
            width: 0%;
            transition: all 0.3s;
            border-radius: 5px;
        }
        .strength-weak { background: #f44336; }
        .strength-medium { background: #ff9800; }
        .strength-strong { background: #4caf50; }
        .security-tips {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .security-tips ul {
            margin: 10px 0 0 20px;
        }
        .security-tips li {
            margin-bottom: 5px;
            font-size: 14px;
            color: #666;
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
        <!-- Sidebar -->
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
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full mb-4">
                            <i class="fas fa-lock text-white text-2xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-gray-900">Ubah Password</h1>
                        <p class="text-gray-600 mt-2">Pastikan password baru Anda aman dan mudah diingat</p>
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

                    @if(session('success'))
                        <div class="p-4 mb-6 text-sm text-green-800 bg-green-50 rounded-lg border border-green-200">
                            <i class="fas fa-check-circle"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('profile.change-password.process') }}" method="POST" id="passwordForm">
                        @csrf

                        @if(Auth::user()->password)
                        <!-- Current Password -->
                        <div class="form-group mb-6">
                            <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-key text-gray-500"></i> Password Lama *
                            </label>
                            <div class="password-field">
                                <input type="password" name="current_password" id="current_password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                <i class="fas fa-eye password-toggle" data-target="current_password"></i>
                            </div>
                        </div>
                        @else
                        <div class="p-4 mb-6 text-sm text-blue-800 bg-blue-50 rounded-lg border border-blue-200">
                            <i class="fas fa-info-circle"></i> Anda login dengan Google. Silakan buat password baru untuk keamanan akun.
                        </div>
                        @endif

                        <!-- New Password -->
                        <div class="form-group mb-6">
                            <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-lock text-gray-500"></i> Password Baru *
                            </label>
                            <div class="password-field">
                                <input type="password" name="new_password" id="new_password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                <i class="fas fa-eye password-toggle" data-target="new_password"></i>
                            </div>
                            <div class="password-strength" id="strength-indicator">
                                <div class="strength-bar">
                                    <div class="strength-fill" id="strength-fill"></div>
                                </div>
                                <p class="text-sm mt-2" id="strength-text"></p>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mb-6">
                            <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-lock text-gray-500"></i> Konfirmasi Password Baru *
                            </label>
                            <div class="password-field">
                                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                                <i class="fas fa-eye password-toggle" data-target="new_password_confirmation"></i>
                            </div>
                            <p class="text-sm mt-2 hidden" id="match-indicator"></p>
                        </div>

                        <!-- Security Tips -->
                        <div class="security-tips">
                            <h3 class="font-semibold text-gray-800 mb-2">
                                <i class="fas fa-shield-alt text-blue-600"></i> Tips Password Aman:
                            </h3>
                            <ul>
                                <li>✓ Minimal 6 karakter (lebih panjang lebih baik)</li>
                                <li>✓ Gunakan kombinasi huruf besar dan kecil</li>
                                <li>✓ Tambahkan angka dan karakter spesial</li>
                                <li>✓ Hindari kata yang mudah ditebak</li>
                                <li>✓ Jangan gunakan password yang sama dengan akun lain</li>
                            </ul>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3 mt-8">
                            <button type="submit" class="flex-1 bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition">
                                <i class="fas fa-save"></i> Ubah Password
                            </button>
                            <a href="{{ route('profile.show') }}" class="flex-1 bg-gray-500 text-white py-3 rounded-lg font-semibold hover:bg-gray-600 transition text-center">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/app.bundle.js') }}"></script>
    <script>
        // Toggle password visibility
        document.querySelectorAll('.password-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('fa-eye');
                    this.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.remove('fa-eye-slash');
                    this.classList.add('fa-eye');
                }
            });
        });

        // Password strength checker
        const newPassword = document.getElementById('new_password');
        const strengthIndicator = document.getElementById('strength-indicator');
        const strengthFill = document.getElementById('strength-fill');
        const strengthText = document.getElementById('strength-text');

        newPassword.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let text = '';
            let color = '';

            if (password.length === 0) {
                strengthIndicator.style.display = 'none';
                return;
            }

            strengthIndicator.style.display = 'block';

            // Check password strength
            if (password.length >= 6) strength++;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;

            // Set strength level
            if (strength <= 2) {
                text = 'Lemah';
                color = 'strength-weak';
                strengthFill.style.width = '33%';
            } else if (strength <= 4) {
                text = 'Sedang';
                color = 'strength-medium';
                strengthFill.style.width = '66%';
            } else {
                text = 'Kuat';
                color = 'strength-strong';
                strengthFill.style.width = '100%';
            }

            strengthFill.className = 'strength-fill ' + color;
            strengthText.textContent = 'Kekuatan Password: ' + text;
            strengthText.className = 'text-sm mt-2';
        });

        // Password match checker
        const confirmPassword = document.getElementById('new_password_confirmation');
        const matchIndicator = document.getElementById('match-indicator');

        confirmPassword.addEventListener('input', function() {
            if (this.value.length === 0) {
                matchIndicator.classList.add('hidden');
                return;
            }

            matchIndicator.classList.remove('hidden');

            if (this.value === newPassword.value) {
                matchIndicator.textContent = '✓ Password cocok';
                matchIndicator.className = 'text-sm mt-2 text-green-600';
            } else {
                matchIndicator.textContent = '✗ Password tidak cocok';
                matchIndicator.className = 'text-sm mt-2 text-red-600';
            }
        });
    </script>
</body>
</html>