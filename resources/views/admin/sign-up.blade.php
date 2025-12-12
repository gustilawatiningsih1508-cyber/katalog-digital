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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #0ea5e9;
            --primary-dark: #0284c7;
            --secondary-color: #10b981;
            --light-bg: #f8fafc;
            --card-shadow: 0 20px 40px -15px rgba(14, 165, 233, 0.15);
            --smooth-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow: hidden;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            height: 90vh;
            min-height: 600px;
            max-height: 800px;
            display: flex;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            background: white;
        }
        
        /* Left Panel */
        .left-panel {
            flex: 1;
            background: linear-gradient(160deg, #0ea5e9 0%, #0c4a6e 100%);
            color: white;
            padding: 40px;
            display: none;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
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
        }
        
        .features {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .feature-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .feature-text h3 {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 3px;
        }
        
        .feature-text p {
            font-size: 0.8rem;
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
            overflow: hidden;
        }
        
        .mobile-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .mobile-header img {
            height: 40px;
            margin-right: 12px;
        }
        
        .mobile-header h1 {
            font-size: 1.6rem;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.5px;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .form-header h2 {
            font-size: 1.6rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }
        
        .form-header p {
            color: #64748b;
            font-size: 0.9rem;
        }
        
        /* Form */
        .register-form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 16px;
        }
        
        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 6px;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1rem;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 14px 12px 42px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            color: #334155;
            background: white;
            transition: var(--smooth-transition);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.15);
        }
        
        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .password-strength {
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .strength-meter {
            flex: 1;
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            overflow: hidden;
        }
        
        .strength-fill {
            height: 100%;
            width: 20%;
            background: #ef4444;
            border-radius: 2px;
            transition: var(--smooth-transition);
        }
        
        .strength-text {
            font-size: 0.75rem;
            color: #64748b;
            min-width: 110px;
        }
        
        /* Terms */
        .terms {
            margin: 15px 0;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        
        .terms-checkbox {
            margin-top: 3px;
        }
        
        .terms-checkbox input {
            display: none;
        }
        
        .custom-checkbox {
            width: 16px;
            height: 16px;
            border: 2px solid #cbd5e1;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--smooth-transition);
            cursor: pointer;
            flex-shrink: 0;
        }
        
        .terms-checkbox input:checked + .custom-checkbox {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .terms-checkbox input:checked + .custom-checkbox::after {
            content: '✓';
            color: white;
            font-size: 0.7rem;
            font-weight: bold;
        }
        
        .terms-label {
            font-size: 0.8rem;
            color: #475569;
            line-height: 1.4;
        }
        
        .terms-label a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            transition: var(--smooth-transition);
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin: 10px 0;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(14, 165, 233, 0.25);
        }
        
        /* Login Link */
        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 0.85rem;
            color: #64748b;
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
            margin-top: 20px;
            color: #94a3b8;
            font-size: 0.75rem;
        }
        
        /* Media Queries */
        @media (min-width: 1024px) {
            .left-panel {
                display: flex;
            }
            
            .mobile-header {
                display: none;
            }
        }
        
        @media (max-width: 1023px) {
            .container {
                height: auto;
                min-height: 100vh;
                max-height: none;
                flex-direction: column;
            }
            
            .left-panel {
                display: none;
            }
            
            .right-panel {
                padding: 30px 20px;
            }
            
            .mobile-header {
                display: flex;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .container {
                border-radius: 16px;
            }
            
            .right-panel {
                padding: 25px 15px;
            }
            
            .form-header h2 {
                font-size: 1.4rem;
            }
        }
        
        /* Error message styling */
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        
        .alert-error {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        
        .error-message {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 4px;
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
                <p>Bergabunglah dengan ribuan seller sukses yang telah mempercayai Lapak Go sebagai platform e-commerce mereka.</p>
                
                <div class="features">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Dashboard Lengkap</h3>
                            <p>Kelola produk, pesanan, dan analisis penjualan</p>
                        </div>
                    </div>
                    
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Keamanan Data</h3>
                            <p>Enkripsi untuk melindungi informasi bisnis</p>
                        </div>
                    </div>
                    
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Analisis Real-time</h3>
                            <p>Pantau performa penjualan dengan laporan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel -->
        <div class="right-panel">
            <div class="mobile-header">
                <img src="{{ asset('assets/admin/images/favicon.png') }}" alt="Lapak Go Logo">
                <h1>Lapak Go</h1>
            </div>
            
            <div class="form-header">
                <h2>Buat Akun Baru</h2>
                <p>Isi informasi di bawah untuk memulai perjalanan Anda</p>
            </div>
            
            <!-- Tampilkan pesan error/success -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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
                        <input type="email" name="email" id="email" class="form-control" 
                               placeholder="nama@contoh.com" value="{{ old('email') }}" required>
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
                        <button type="button" class="password-toggle" id="togglePassword">
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
                        <button type="button" class="password-toggle" id="toggleConfirmPassword">
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
                        Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> Lapak Go.
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
                    Sudah punya akun? <a href="/sign-in">Masuk ke akun Anda</a>
                </div>
                
                <!-- Footer -->
                <div class="footer">
                    <p>&copy; 2023 Lapak Go. Hak cipta dilindungi.</p>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        
        togglePassword.addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        toggleConfirmPassword.addEventListener('click', function() {
            const confirmInput = document.getElementById('password_confirmation');
            const icon = this.querySelector('i');
            
            if (confirmInput.type === 'password') {
                confirmInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                confirmInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthFill = document.getElementById('passwordStrength');
        const strengthText = document.getElementById('passwordText');
        const passwordMatch = document.getElementById('passwordMatch');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            
            let strength = 0;
            let text = 'Kosong';
            let color = '#ef4444';
            let width = 0;
            
            if (password.length > 0) {
                strength = 1;
                text = 'Sangat Lemah';
                color = '#ef4444';
                width = 20;
            }
            
            if (password.length >= 6) {
                strength = 2;
                text = 'Lemah';
                color = '#f59e0b';
                width = 40;
            }
            
            if (password.length >= 8 && /[A-Z]/.test(password) && /[0-9]/.test(password)) {
                strength = 3;
                text = 'Cukup';
                color = '#3b82f6';
                width = 60;
            }
            
            if (password.length >= 10 && /[A-Z]/.test(password) && /[0-9]/.test(password) && /[^A-Za-z0-9]/.test(password)) {
                strength = 4;
                text = 'Kuat';
                color = '#10b981';
                width = 80;
            }
            
            strengthFill.style.width = width + '%';
            strengthFill.style.backgroundColor = color;
            strengthText.textContent = text;
            strengthText.style.color = color;
            
            // Check password match
            checkPasswordMatch();
        });
        
        // Password confirmation check
        document.getElementById('password_confirmation').addEventListener('input', checkPasswordMatch);
        
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;
            
            if (confirmPassword.length === 0) {
                passwordMatch.textContent = '';
                passwordMatch.style.color = '#64748b';
                return;
            }
            
            if (password === confirmPassword) {
                passwordMatch.textContent = '✓ Password cocok';
                passwordMatch.style.color = '#10b981';
            } else {
                passwordMatch.textContent = '✗ Password tidak cocok';
                passwordMatch.style.color = '#ef4444';
            }
        }
        
        // Form submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;
            const terms = document.getElementById('terms').checked;
            
            if (!username || !email || !password || !confirmPassword) {
                alert('Harap isi semua kolom yang wajib diisi');
                return;
            }
            
            if (password !== confirmPassword) {
                alert('Password dan konfirmasi password tidak cocok');
                return;
            }
            
            if (!terms) {
                alert('Anda harus menyetujui Syarat & Ketentuan');
                return;
            }
            
            // Simulate loading state
            const submitButton = document.getElementById('submitBtn');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            submitButton.disabled = true;
            
            // Submit form
            setTimeout(() => {
                this.submit();
            }, 1500);
        });
    </script>
</body>
</html>