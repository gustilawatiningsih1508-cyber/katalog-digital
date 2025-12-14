<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi OTP | Lapak Go</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #8B4513;
            --primary-dark: #654321;
            --primary-light: #D2691E;
            --accent-color: #DEB887;
            --success-color: #2E7D32;
            --error-color: #C62828;
            --light-bg: #FFF8DC;
            --card-bg: #FAF3E0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--light-bg) 0%, #FAEBD7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background: white;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(139, 69, 19, 0.15);
            border: 1px solid #F5DEB3;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            height: 50px;
            margin-bottom: 10px;
        }

        .logo h1 {
            font-size: 1.8rem;
            color: var(--primary-color);
            font-weight: 800;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            font-size: 1.6rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .header p {
            color: #795548;
            font-size: 0.95rem;
        }

        .email-info {
            background: #FFF8DC;
            border-left: 4px solid var(--primary-color);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            border: 1px solid #F5DEB3;
        }

        .email-info strong {
            color: var(--primary-color);
        }

        .otp-input-container {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin: 25px 0;
        }

        .otp-input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            border: 2px solid #D7CCC8;
            border-radius: 12px;
            transition: all 0.3s;
            background: white;
            color: #5D4037;
        }

        .otp-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.15);
        }

        .otp-input.filled {
            border-color: var(--primary-color);
            background: #FFF8DC;
        }

        .otp-input.error {
            border-color: var(--error-color);
            background: #FFEBEE;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
            font-family: 'Inter', sans-serif;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(139, 69, 19, 0.25);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .resend-section {
            text-align: center;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #D7CCC8;
        }

        .resend-text {
            color: #795548;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .resend-btn {
            background: none;
            border: none;
            color: var(--primary-color);
            font-weight: 600;
            cursor: pointer;
            text-decoration: underline;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
        }

        .resend-btn:hover {
            color: var(--primary-dark);
        }

        .resend-btn:disabled {
            color: #8D6E63;
            cursor: not-allowed;
            text-decoration: none;
        }

        .timer {
            color: var(--error-color);
            font-weight: 600;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .alert-success {
            background: #E8F5E9;
            color: var(--success-color);
            border: 1px solid #C8E6C9;
        }

        .alert-error {
            background: #FFEBEE;
            color: var(--error-color);
            border: 1px solid #FFCDD2;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #795548;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .back-link a:hover {
            color: var(--primary-color);
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            .otp-input {
                width: 45px;
                height: 55px;
                font-size: 20px;
            }

            .otp-input-container {
                gap: 8px;
            }
            
            .logo h1 {
                font-size: 1.5rem;
            }
            
            .header h2 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/admin/images/favicon.png') }}" alt="Lapak Go">
            <h1>Lapak Go</h1>
        </div>

        <div class="header">
            <h2>Verifikasi Email</h2>
            <p>Masukkan 6 digit kode yang telah dikirim ke email Anda</p>
        </div>

        <div class="email-info">
            📧 Kode OTP telah dikirim ke <strong>{{ session('registration_data')['email'] ?? '' }}</strong>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form action="{{ route('otp.verify.process') }}" method="POST" id="otpForm">
            @csrf
            
            <div class="otp-input-container">
                <input type="text" class="otp-input" maxlength="1" pattern="\d*" inputmode="numeric" data-index="0">
                <input type="text" class="otp-input" maxlength="1" pattern="\d*" inputmode="numeric" data-index="1">
                <input type="text" class="otp-input" maxlength="1" pattern="\d*" inputmode="numeric" data-index="2">
                <input type="text" class="otp-input" maxlength="1" pattern="\d*" inputmode="numeric" data-index="3">
                <input type="text" class="otp-input" maxlength="1" pattern="\d*" inputmode="numeric" data-index="4">
                <input type="text" class="otp-input" maxlength="1" pattern="\d*" inputmode="numeric" data-index="5">
            </div>

            <input type="hidden" name="otp" id="otpValue">

            <button type="submit" class="submit-btn" id="submitBtn">
                <i class="fas fa-check"></i> Verifikasi
            </button>
        </form>

        <div class="resend-section">
            <p class="resend-text">Tidak menerima kode?</p>
            <button type="button" class="resend-btn" id="resendBtn">
                Kirim Ulang <span class="timer" id="timer"></span>
            </button>
        </div>

        <div class="back-link">
            <a href="{{ route('signUp') }}">
                <i class="fas fa-arrow-left"></i> Kembali ke registrasi
            </a>
        </div>
    </div>

    <script>
        // OTP Input Handler
        const otpInputs = document.querySelectorAll('.otp-input');
        const otpValue = document.getElementById('otpValue');
        const submitBtn = document.getElementById('submitBtn');
        const otpForm = document.getElementById('otpForm');

        // Focus first input on load
        otpInputs[0].focus();

        otpInputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                const value = e.target.value;

                // Only allow numbers
                if (!/^\d*$/.test(value)) {
                    e.target.value = '';
                    return;
                }

                if (value.length === 1) {
                    input.classList.add('filled');
                    
                    // Move to next input
                    if (index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                } else {
                    input.classList.remove('filled');
                }

                updateOtpValue();
            });

            input.addEventListener('keydown', (e) => {
                // Handle backspace
                if (e.key === 'Backspace' && !e.target.value && index > 0) {
                    otpInputs[index - 1].focus();
                    otpInputs[index - 1].value = '';
                    otpInputs[index - 1].classList.remove('filled');
                    updateOtpValue();
                }

                // Handle paste
                if (e.key === 'v' && (e.ctrlKey || e.metaKey)) {
                    e.preventDefault();
                }
            });

            // Handle paste event
            input.addEventListener('paste', (e) => {
                e.preventDefault();
                const pastedData = e.clipboardData.getData('text').trim();
                
                if (/^\d{6}$/.test(pastedData)) {
                    pastedData.split('').forEach((char, i) => {
                        if (otpInputs[i]) {
                            otpInputs[i].value = char;
                            otpInputs[i].classList.add('filled');
                        }
                    });
                    otpInputs[5].focus();
                    updateOtpValue();
                }
            });
        });

        function updateOtpValue() {
            const otp = Array.from(otpInputs).map(input => input.value).join('');
            otpValue.value = otp;
            
            if (otp.length === 6) {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }

        // Form submission
        otpForm.addEventListener('submit', (e) => {
            if (otpValue.value.length !== 6) {
                e.preventDefault();
                alert('Silakan masukkan 6 digit kode OTP');
                return;
            }

            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memverifikasi...';
            submitBtn.disabled = true;
        });

        // Resend OTP with cooldown
        const resendBtn = document.getElementById('resendBtn');
        const timerEl = document.getElementById('timer');
        let cooldown = 60;
        let cooldownInterval;

        function startCooldown() {
            cooldown = 60;
            resendBtn.disabled = true;
            resendBtn.innerHTML = 'Kirim Ulang <span class="timer" id="timer"></span>';
            timerEl = document.getElementById('timer');
            
            cooldownInterval = setInterval(() => {
                cooldown--;
                timerEl.textContent = `(${cooldown}s)`;
                
                if (cooldown <= 0) {
                    clearInterval(cooldownInterval);
                    resendBtn.disabled = false;
                    timerEl.textContent = '';
                }
            }, 1000);
        }

        // Start cooldown on page load
        startCooldown();

        resendBtn.addEventListener('click', async () => {
            try {
                resendBtn.disabled = true;
                resendBtn.textContent = 'Mengirim...';

                const response = await fetch('{{ route("otp.resend") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                const result = await response.json();

                if (result.success) {
                    alert('✅ ' + result.message);
                    startCooldown();
                } else {
                    alert('❌ ' + result.message);
                    resendBtn.disabled = false;
                    resendBtn.innerHTML = 'Kirim Ulang <span class="timer" id="timer"></span>';
                }

            } catch (error) {
                console.error('Error:', error);
                alert('❌ Terjadi kesalahan. Silakan coba lagi.');
                resendBtn.disabled = false;
                resendBtn.innerHTML = 'Kirim Ulang <span class="timer" id="timer"></span>';
            }
        });
    </script>
</body>

</html>