<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buat akun Lapak Go - Bergabunglah dengan platform e-commerce terpercaya">
    <meta name="author" content="Lapak Go Team">
    <title>Daftar Akun | Lapak Go</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #8B4513;
            --primary-dark: #654321;
            --primary-light: #D2691E;
            --secondary-color: #A0522D;
            --accent-color: #DEB887;
            --light-bg: #FFF8DC;
            --card-bg: #FAF3E0;
            --card-shadow: 0 20px 40px -15px rgba(139, 69, 19, 0.15);
            --smooth-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #FFF8DC 0%, #FAEBD7 100%);
            color: #5D4037;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            min-height: 600px;
            display: flex;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            background: white;
            position: relative;
        }

        /* Left Panel */
        .left-panel {
            flex: 1;
            background: linear-gradient(160deg, var(--primary-dark) 0%, var(--primary-color) 100%);
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
            min-height: 600px;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
        }

        .left-panel::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.03);
        }

        .logo-section {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            z-index: 2;
            position: relative;
        }

        .logo-section img {
            height: 40px;
            margin-right: 12px;
            filter: brightness(0) invert(1);
        }

        .logo-section h1 {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .content {
            z-index: 2;
            position: relative;
        }

        .content h2 {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .content p {
            font-size: 0.95rem;
            opacity: 0.9;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            transition: var(--smooth-transition);
        }

        .feature:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateX(5px);
        }

        .feature-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.2rem;
        }

        .feature-text h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .feature-text p {
            font-size: 0.85rem;
            opacity: 0.8;
            margin-bottom: 0;
        }

        /* Right Panel */
        .right-panel {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
            min-width: 0;
            background-color: var(--light-bg);
        }

        .mobile-header {
            display: none;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }

        .form-header p {
            color: #795548;
            font-size: 0.95rem;
        }

        /* Social Login Buttons */
        .social-login {
            display: flex;
            gap: 12px;
            margin-bottom: 25px;
        }

        .social-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px;
            border: 2px solid #D7CCC8;
            border-radius: 12px;
            background: white;
            color: #5D4037;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--smooth-transition);
            text-decoration: none;
        }

        .social-btn:hover {
            border-color: var(--primary-color);
            background: #F5F5F5;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.15);
        }

        .social-btn i {
            font-size: 1.2rem;
        }

        .google-btn {
            color: #5D4037;
        }

        .google-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-dark);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: #D7CCC8;
        }

        .divider-text {
            padding: 0 15px;
            color: #8D6E63;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        /* Form */
        .register-form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #5D4037;
            margin-bottom: 8px;
        }

        .input-with-icon {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #A1887F;
            font-size: 1.1rem;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px 14px 46px;
            border: 2px solid #D7CCC8;
            border-radius: 12px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            color: #4E342E;
            background: white;
            transition: var(--smooth-transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.15);
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #A1887F;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .password-strength {
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .strength-meter {
            flex: 1;
            height: 6px;
            background: #D7CCC8;
            border-radius: 3px;
            overflow: hidden;
        }

        .strength-fill {
            height: 100%;
            width: 20%;
            background: var(--primary-light);
            border-radius: 3px;
            transition: var(--smooth-transition);
        }

        .strength-text {
            font-size: 0.8rem;
            color: #795548;
            min-width: 100px;
        }

        /* Terms */
        .terms {
            margin: 20px 0;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .terms-checkbox {
            margin-top: 3px;
        }

        .terms-checkbox input {
            display: none;
        }

        .custom-checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid #BCAAA4;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--smooth-transition);
            cursor: pointer;
            flex-shrink: 0;
        }

        .terms-checkbox input:checked+.custom-checkbox {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .terms-checkbox input:checked+.custom-checkbox::after {
            content: '✓';
            color: white;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .terms-label {
            font-size: 0.85rem;
            color: #5D4037;
            line-height: 1.5;
        }

        .terms-label a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .terms-label a:hover {
            text-decoration: underline;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--smooth-transition);
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 10px 0;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Login Link */
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #795548;
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 700;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 25px;
            color: #8D6E63;
            font-size: 0.8rem;
        }

        /* Alert */
        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }

        .alert-success {
            background-color: #E8F5E9;
            color: #2E7D32;
            border: 1px solid #C8E6C9;
        }

        .alert-error {
            background-color: #FFEBEE;
            color: #C62828;
            border: 1px solid #FFCDD2;
        }

        .error-message {
            color: #D84315;
            font-size: 0.85rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .error-message::before {
            content: '⚠';
            font-size: 0.8rem;
        }

        /* Media Queries */
        @media (max-width: 1024px) {
            .container {
                max-width: 800px;
            }

            .left-panel,
            .right-panel {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                max-width: 500px;
                min-height: auto;
            }

            .left-panel {
                min-height: 300px;
                padding: 30px 20px;
            }

            .left-panel .logo-section {
                margin-bottom: 20px;
            }

            .left-panel .content h2 {
                font-size: 1.4rem;
            }

            .feature {
                padding: 12px;
            }

            .feature-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .feature-text h3 {
                font-size: 0.9rem;
            }

            .feature-text p {
                font-size: 0.8rem;
            }

            .mobile-header {
                display: none;
            }

            .right-panel {
                padding: 30px 20px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .container {
                border-radius: 16px;
            }

            .left-panel {
                min-height: 250px;
                padding: 20px;
            }

            .left-panel::before,
            .left-panel::after {
                display: none;
            }

            .content h2 {
                font-size: 1.3rem;
            }

            .features {
                margin-top: 20px;
                gap: 15px;
            }

            .feature {
                padding: 10px;
            }

            .right-panel {
                padding: 25px 15px;
            }

            .form-header h2 {
                font-size: 1.5rem;
            }

            .form-header p {
                font-size: 0.9rem;
            }

            .social-login {
                flex-direction: column;
            }

            .form-control {
                padding: 12px 16px 12px 42px;
                font-size: 0.9rem;
            }

            .input-icon {
                left: 14px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="logo-section">
                <img src="{{ asset('assets/admin/images/favicon.png') }}" alt="Lapak Go Logo">
                <h1>Lapak Go</h1>
            </div>

            <div class="content">
                <h2>Mulai Perjalanan Bisnis Online Anda</h2>
                <p>Bergabunglah dengan ribuan seller sukses yang telah mempercayai Lapak Go sebagai platform e-commerce
                    mereka.</p>

                <div class="features">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Dashboard Lengkap</h3>
                            <p>Kelola produk, pesanan, dan analisis penjualan dengan mudah</p>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Keamanan Data</h3>
                            <p>Enkripsi tingkat tinggi untuk melindungi informasi bisnis Anda</p>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Analisis Real-time</h3>
                            <p>Pantau performa penjualan dengan laporan real-time yang akurat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            <!-- Mobile Header (Hidden by default) -->
            <div class="mobile-header">
                <img src="{{ asset('assets/admin/images/favicon.png') }}" alt="Lapak Go Logo">
                <h1>Lapak Go</h1>
            </div>

            <div class="form-header">
                <h2>Buat Akun Baru</h2>
                <p>Daftar dengan Google atau isi form di bawah</p>
            </div>

            <!-- Social Login Buttons -->
            <div class="social-login">
                <a href="{{ route('auth.google') }}?context=signup" class="social-btn google-btn">
                    <i class="fab fa-google"></i>
                    <span>Daftar dengan Google</span>
                </a>
            </div>

            <div class="divider">
                <div class="divider-line"></div>
                <div class="divider-text">atau daftar dengan email</div>
                <div class="divider-line"></div>
            </div>

            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            <form action="{{ route('register.process') }}" method="POST" class="register-form" id="registerForm">
                @csrf

                <!-- Username -->
                <div class="form-group">
                    <label class="form-label" for="username">Username *</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Masukkan username" value="{{ old('username') }}" required>
                    </div>
                    @error('username')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label class="form-label" for="email">Email *</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" id="email" class="form-control" placeholder="nama@contoh.com"
                            value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="form-label" for="password">Password *</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Buat password yang kuat" required>
                        <button type="button" class="password-toggle" id="togglePassword"
                            aria-label="Toggle password visibility">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <div class="password-strength">
                        <div class="strength-meter">
                            <div class="strength-fill" id="passwordStrength"></div>
                        </div>
                        <div class="strength-text" id="passwordText">Lemah</div>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label class="form-label" for="password_confirmation">Konfirmasi Password *</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control" placeholder="Ulangi password Anda" required>
                        <button type="button" class="password-toggle" id="toggleConfirmPassword"
                            aria-label="Toggle password visibility">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div id="passwordMatch" class="strength-text" style="margin-top: 4px;"></div>
                </div>

                <!-- Terms -->
                <div class="terms">
                    <label class="terms-checkbox">
                        <input type="checkbox" name="terms" id="terms" required>
                        <span class="custom-checkbox"></span>
                    </label>
                    <span class="terms-label">
                        Saya setuju dengan <a href="#" target="_blank">Syarat & Ketentuan</a> dan <a href="#"
                            target="_blank">Kebijakan Privasi</a> Lapak Go.
                    </span>
                </div>
                @error('terms')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <!-- Submit Button -->
                <button type="submit" class="submit-btn" id="submitBtn">
                    <i class="fas fa-user-plus"></i>
                    Buat Akun Baru
                </button>

                <!-- Login Link -->
                <div class="login-link">
                    Sudah punya akun? <a href="{{ route('signIn') }}">Masuk ke akun Anda</a>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <p>&copy; 2024 Lapak Go. Hak cipta dilindungi.</p>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

        togglePassword.addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
                this.setAttribute('aria-label', 'Sembunyikan password');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
                this.setAttribute('aria-label', 'Tampilkan password');
            }
        });

        toggleConfirmPassword.addEventListener('click', function () {
            const confirmInput = document.getElementById('password_confirmation');
            const icon = this.querySelector('i');

            if (confirmInput.type === 'password') {
                confirmInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
                this.setAttribute('aria-label', 'Sembunyikan password');
            } else {
                confirmInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
                this.setAttribute('aria-label', 'Tampilkan password');
            }
        });

        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthFill = document.getElementById('passwordStrength');
        const strengthText = document.getElementById('passwordText');
        const passwordMatch = document.getElementById('passwordMatch');

        passwordInput.addEventListener('input', function () {
            const password = this.value;

            let strength = 0;
            let text = 'Kosong';
            let color = '#D2691E';
            let width = 0;

            if (password.length > 0) {
                strength = 1;
                text = 'Sangat Lemah';
                color = '#D2691E';
                width = 20;
            }

            if (password.length >= 6) {
                strength = 2;
                text = 'Lemah';
                color = '#A0522D';
                width = 40;
            }

            if (password.length >= 8 && /[A-Z]/.test(password) && /[0-9]/.test(password)) {
                strength = 3;
                text = 'Cukup';
                color = '#8B4513';
                width = 60;
            }

            if (password.length >= 10 && /[A-Z]/.test(password) && /[0-9]/.test(password) && /[^A-Za-z0-9]/.test(password)) {
                strength = 4;
                text = 'Kuat';
                color = '#654321';
                width = 80;
            }

            strengthFill.style.width = width + '%';
            strengthFill.style.backgroundColor = color;
            strengthText.textContent = text;
            strengthText.style.color = color;

            checkPasswordMatch();
        });

        // Password confirmation check
        document.getElementById('password_confirmation').addEventListener('input', checkPasswordMatch);

        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;

            if (confirmPassword.length === 0) {
                passwordMatch.textContent = '';
                passwordMatch.style.color = '#795548';
                return;
            }

            if (password === confirmPassword) {
                passwordMatch.textContent = '✓ Password cocok';
                passwordMatch.style.color = '#2E7D32';
            } else {
                passwordMatch.textContent = '✗ Password tidak cocok';
                passwordMatch.style.color = '#C62828';
            }
        }

        // Form submission with better validation
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;
            const terms = document.getElementById('terms').checked;

            let hasError = false;
            const errorMessages = [];

            // Clear previous inline errors
            document.querySelectorAll('.error-message').forEach(el => {
                if (!el.classList.contains('server-error')) {
                    el.remove();
                }
            });

            // Username validation
            if (!username) {
                showError('username', 'Username harus diisi');
                hasError = true;
            } else if (username.length < 3) {
                showError('username', 'Username minimal 3 karakter');
                hasError = true;
            }

            // Email validation
            if (!email) {
                showError('email', 'Email harus diisi');
                hasError = true;
            } else if (!isValidEmail(email)) {
                showError('email', 'Format email tidak valid');
                hasError = true;
            }

            // Password validation
            if (!password) {
                showError('password', 'Password harus diisi');
                hasError = true;
            } else if (password.length < 8) {
                showError('password', 'Password minimal 8 karakter');
                hasError = true;
            }

            // Confirm password validation
            if (!confirmPassword) {
                showError('password_confirmation', 'Konfirmasi password harus diisi');
                hasError = true;
            } else if (password !== confirmPassword) {
                showError('password_confirmation', 'Password tidak cocok');
                hasError = true;
            }

            // Terms validation
            if (!terms) {
                const termsError = document.createElement('div');
                termsError.className = 'error-message';
                termsError.textContent = 'Anda harus menyetujui Syarat & Ketentuan';
                document.querySelector('.terms').insertAdjacentElement('afterend', termsError);
                hasError = true;
            }

            if (hasError) {
                e.preventDefault();
                return;
            }

            // Simulate loading state
            const submitButton = document.getElementById('submitBtn');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            submitButton.disabled = true;

            // Re-enable button after 3 seconds if form doesn't submit
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 3000);
        });

        function showError(fieldId, message) {
            const field = document.getElementById(fieldId);
            const formGroup = field.closest('.form-group');
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.textContent = message;

            const existingError = formGroup.querySelector('.error-message');
            if (existingError && !existingError.classList.contains('server-error')) {
                existingError.remove();
            }

            formGroup.appendChild(errorDiv);
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Auto-focus first input
        document.getElementById('username').focus();
    </script>
</body>

</html>