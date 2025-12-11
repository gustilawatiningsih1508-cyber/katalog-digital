<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login to Lapak Go - Your trusted e-commerce dashboard">
    <meta name="author" content="Lapak Go Team">
    <title>Login | Lapak Go Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Styles -->
    <style>
        :root {
            --primary-color: #0ea5e9;
            --primary-dark: #0284c7;
            --secondary-color: #10b981;
            --light-bg: #f8fafc;
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --smooth-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background-color: var(--light-bg);
            color: #334155;
            line-height: 1.5;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(at 40% 20%, rgba(14, 165, 233, 0.08) 0px, transparent 50%),
                radial-gradient(at 80% 0%, rgba(16, 185, 129, 0.08) 0px, transparent 50%),
                radial-gradient(at 0% 50%, rgba(139, 92, 246, 0.05) 0px, transparent 50%);
            z-index: -1;
        }
        
        .container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Left Side - Branding & Info */
        .login-left {
            flex: 1;
            background: linear-gradient(135deg, #0ea5e9 0%, #0c94d8 100%);
            color: white;
            padding: 3rem;
            display: none;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        @media (min-width: 992px) {
            .login-left {
                display: flex;
            }
        }
        
        .login-left::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            z-index: 0;
        }
        
        .login-left::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.03);
            z-index: 0;
        }
        
        .brand-logo {
            display: flex;
            align-items: center;
            margin-bottom: 2.5rem;
            z-index: 1;
            position: relative;
        }
        
        .brand-logo img {
            height: 50px;
            margin-right: 15px;
        }
        
        .brand-logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        .login-content {
            max-width: 480px;
            z-index: 1;
            position: relative;
        }
        
        .login-content h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .login-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .features-list {
            margin-top: 3rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .feature-icon {
            background: rgba(255, 255, 255, 0.15);
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .feature-icon i {
            font-size: 1.1rem;
        }
        
        /* Right Side - Login Form */
        .login-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            width: 100%;
        }
        
        @media (min-width: 992px) {
            .login-right {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            padding: 2.5rem;
            width: 100%;
            max-width: 440px;
            transition: var(--smooth-transition);
        }
        
        .login-card:hover {
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.15);
        }
        
        .mobile-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
        }
        
        @media (min-width: 992px) {
            .mobile-logo {
                display: none;
            }
        }
        
        .mobile-logo img {
            height: 50px;
            margin-right: 15px;
        }
        
        .mobile-logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.5px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .login-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }
        
        .login-header p {
            color: #64748b;
            font-size: 1rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 0.5rem;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.1rem;
        }
        
        .form-control {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            color: #334155;
            background-color: white;
            transition: var(--smooth-transition);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.15);
        }
        
        .form-control::placeholder {
            color: #94a3b8;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            font-size: 1.1rem;
        }
        
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .checkbox-container {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .checkbox-container input {
            display: none;
        }
        
        .checkmark {
            width: 18px;
            height: 18px;
            border: 2px solid #cbd5e1;
            border-radius: 5px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--smooth-transition);
        }
        
        .checkbox-container input:checked ~ .checkmark {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .checkbox-container input:checked ~ .checkmark::after {
            content: '✓';
            color: white;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .checkbox-label {
            font-size: 0.9rem;
            color: #475569;
        }
        
        .forgot-link {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--smooth-transition);
        }
        
        .forgot-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .login-button {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--smooth-transition);
            margin-bottom: 1.5rem;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(14, 165, 233, 0.25);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
        }
        
        .divider-line {
            flex: 1;
            height: 1px;
            background-color: #e2e8f0;
        }
        
        .divider-text {
            padding: 0 1rem;
            color: #94a3b8;
            font-size: 0.9rem;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .social-button {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            border: 1.5px solid #e2e8f0;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #475569;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--smooth-transition);
        }
        
        .social-button:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .register-link {
            text-align: center;
            font-size: 0.95rem;
            color: #64748b;
        }
        
        .register-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: var(--smooth-transition);
        }
        
        .register-link a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .footer {
            text-align: center;
            margin-top: 2.5rem;
            color: #94a3b8;
            font-size: 0.85rem;
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-card {
            animation: fadeIn 0.6s ease-out;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .login-card {
                padding: 2rem;
            }
            
            .login-header h2 {
                font-size: 1.6rem;
            }
            
            .form-options {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Side - Branding & Info -->
        <div class="login-left">
            <div class="brand-logo">
                <img src="{{ asset('assets/admin/images/favicon.png') }}" alt="Lapak Go Logo">
                <h1>Lapak Go</h1>
            </div>
            
            <div class="login-content">
                <h2>Selamat Datang di Halaman Login Lapak Go</h2>
                <p>Kelola bisnis Anda dengan mudah dan efisien melalui dashboard kami yang lengkap dan terintegrasi.</p>
                
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h3>Analisis Lengkap</h3>
                            <p>Pantau performa penjualan dengan dashboard analitik yang detail</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h3>Keamanan Terjamin</h3>
                            <p>Data Anda dilindungi</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3>Performa Optimal</h3>
                            <p>Akses cepat dan responsif di semua perangkat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="login-right">
            <div class="mobile-logo">
                <img src="{{ asset('assets/admin/images/favicon.png') }}" alt="Lapak Go Logo">
                <h1>Lapak Go</h1>
            </div>
            
            <div class="login-card">
                <div class="login-header">
                    <h2>Masuk ke Akun Anda</h2>
                    <p>Masukkan kredensial Anda untuk mengakses dashboard</p>
                </div>
                
                <form class="login-form" action="{{ route('login.process') }}" method="POST" id="loginForm">
                    @csrf
                    
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" name="email" id="email" class="form-control" placeholder="nama@contoh.com" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="password">Kata Sandi</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan kata sandi" required>
                            <button type="button" class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <label class="checkbox-container">
                                <input type="checkbox" name="remember" id="remember">
                                <span class="checkmark"></span>
                                <span class="checkbox-label">Ingat saya</span>
                            </label>
                        </div>
                        <a href="#" class="forgot-link">Lupa kata sandi?</a>
                    </div>
                    
                    <button type="submit" class="login-button">
                        <i class="fas fa-sign-in-alt"></i>
                        Masuk ke Akun
                    </button>
                    
                    <div class="divider">
                        <div class="divider-line"></div>
                        <div class="divider-text">atau masuk dengan</div>
                        <div class="divider-line"></div>
                    </div>
                    
                    <div class="social-login">
                        <button type="button" class="social-button">
                            <i class="fab fa-google"></i>
                        </button>
                        <button type="button" class="social-button">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="social-button">
                            <i class="fab fa-twitter"></i>
                        </button>
                    </div>
                    
                    <div class="register-link">
                        Belum punya akun? <a href="/sign-up">Daftar sekarang</a>
                    </div>
                </form>
                
                <div class="footer">
                    <p>&copy; 202 Lapak Go. Hak cipta dilindungi.</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
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
        
        // Form submission handling
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            // Basic validation
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                e.preventDefault();
                alert('Harap isi semua kolom yang diperlukan');
                return;
            }
            
            // Simulate loading state
            const submitButton = this.querySelector('.login-button');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            submitButton.disabled = true;
            
            // In a real application, this would be an AJAX call
            // For demo purposes, we'll revert after 2 seconds
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 2000);
        });
        
        // Add focus effects to form inputs
        const formInputs = document.querySelectorAll('.form-control');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
        
        // Social login button interactions
        const socialButtons = document.querySelectorAll('.social-button');
        socialButtons.forEach(button => {
            button.addEventListener('click', function() {
                const platform = this.querySelector('i').className.includes('google') ? 'Google' : 
                               this.querySelector('i').className.includes('facebook') ? 'Facebook' : 'Twitter';
                alert(`Fitur login dengan ${platform} akan segera tersedia!`);
            });
        });
    </script>
</body>
</html>