<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Register | Rehan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #0b0e14;
            --surface: #121722;
            --border: #242b3a;
            --text: #e7eaf2;
            --text-muted: #8b93a7;
            --text-faint: #5b6578;
            --accent: #e8a33d;
            --accent-strong: #f5b95a;
            --accent-soft: rgba(232, 163, 61, 0.12);
            --accent-2: #5b8def;
            --accent-2-soft: rgba(91, 141, 239, 0.12);
            --success: #4fd1a5;
            --danger: #ef6f6c;
            --font-display: 'Space Grotesk', 'Inter', sans-serif;
            --font-body: 'Inter', sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-body);
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;

            background:
                radial-gradient(circle at 15% 20%, var(--accent-soft) 0%, transparent 35%),
                radial-gradient(circle at 85% 80%, var(--accent-2-soft) 0%, transparent 35%),
                var(--bg);

            color: var(--text);
            overflow: hidden;
        }

        body::before,
        body::after {
            content: "";
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
        }

        body::before {
            width: 280px;
            height: 280px;
            background: var(--accent-soft);
            top: -100px;
            right: -70px;
        }

        body::after {
            width: 230px;
            height: 230px;
            background: var(--accent-2-soft);
            bottom: -80px;
            left: -60px;
        }

        .register-container {
            width: 100%;
            max-width: 430px;
            position: relative;
            z-index: 1;
        }

        .register-box {
            padding: 40px;

            border: 1px solid var(--border);
            border-radius: 20px;

            background: var(--surface);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.04);
        }

        /* Logo */

        .logo {
            text-align: center;
            margin-bottom: 28px;
        }

        .logo-icon {
            width: 62px;
            height: 62px;

            margin: 0 auto 16px;

            display: flex;
            justify-content: center;
            align-items: center;

            border-radius: 16px;

            background: linear-gradient(135deg, var(--accent), var(--accent-2));

            box-shadow:
                0 12px 30px rgba(232, 163, 61, 0.25);

            color: #17130a;
            font-family: var(--font-display);
            font-size: 27px;
            font-weight: 700;
        }

        .logo h1 {
            font-family: var(--font-display);
            color: var(--text);
            font-size: 27px;
            font-weight: 650;
            letter-spacing: -0.01em;
        }

        .logo p {
            margin-top: 7px;
            color: var(--text-muted);
            font-size: 14px;
        }

        /* Messages */

        .error {
            padding: 12px 14px;
            margin-bottom: 18px;

            border: 1px solid rgba(239, 111, 108, 0.25);
            border-radius: 10px;

            background: rgba(239, 111, 108, 0.10);

            color: var(--danger);
            font-size: 13px;
        }

        .success {
            padding: 12px 14px;
            margin-bottom: 18px;

            border: 1px solid rgba(79, 209, 165, 0.25);
            border-radius: 10px;

            background: rgba(79, 209, 165, 0.10);

            color: var(--success);
            font-size: 13px;
        }

        /* Form */

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            margin-bottom: 8px;

            color: var(--text);
            font-size: 13px;
            font-weight: 500;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;

            left: 15px;
            top: 50%;

            transform: translateY(-50%);

            color: var(--text-faint);
            font-size: 15px;
        }

        input {
            width: 100%;
            height: 49px;

            padding: 0 15px 0 44px;

            border: 1px solid var(--border);
            border-radius: 11px;

            outline: none;

            background: var(--bg);

            color: var(--text);

            font-size: 14px;

            transition: 0.25s ease;
        }

        input::placeholder {
            color: var(--text-faint);
        }

        input:focus {
            border-color: var(--accent);

            background: var(--bg);

            box-shadow:
                0 0 0 3px var(--accent-soft);
        }

        /* Button */

        .register-btn {
            width: 100%;
            height: 51px;

            margin-top: 7px;

            border: none;
            border-radius: 11px;

            background: linear-gradient(
                135deg,
                var(--accent),
                var(--accent-strong)
            );

            color: #17130a;

            font-size: 15px;
            font-weight: 600;

            cursor: pointer;

            box-shadow:
                0 10px 25px rgba(232, 163, 61, 0.22);

            transition: 0.25s ease;
        }

        .register-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 14px 30px rgba(232, 163, 61, 0.32);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        /* Login link */

        .login-link {
            margin-top: 23px;

            text-align: center;

            color: var(--text-muted);
            font-size: 13px;
        }

        .login-link a {
            color: var(--accent);

            text-decoration: none;

            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
            color: var(--accent-strong);
        }

        .bottom-text {
            margin-top: 18px;

            text-align: center;

            color: var(--text-faint);
            font-family: var(--font-mono);
            font-size: 11px;
        }

        /* Mobile */

        @media (max-width: 500px) {

            body {
                padding: 15px;
            }

            .register-box {
                padding: 32px 24px;
                border-radius: 18px;
            }

            .logo h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="register-container">

        <div class="register-box">

            <div class="logo">

                <div class="logo-icon">
                    R
                </div>

                <h1>Create Admin Account</h1>

                <p>Register for your portfolio admin panel</p>

            </div>


<!-- 
            @if(session('success'))
    <p>{{ session('success') }}</p>
@endif -->


            {{-- Error Message --}}

            @if(session('error'))

                <div class="error">
                    {{ session('error') }}
                </div>

            @endif


            {{-- Validation Errors --}}

            @if($errors->any())

                <div class="error">

                    @foreach($errors->all() as $error)

                        <div>{{ $error }}</div>

                    @endforeach

                </div>

            @endif


            <form action="/Register" method="POST">

                @csrf


                {{-- Name --}}

                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            👤
                        </span>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            value="{{ old('name') }}"
                            required
                        >
                        

                    </div>

                </div>


                {{-- Email --}}

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            ✉
                        </span>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                            required
                        >
                       

                    </div>

                </div>


                {{-- Password --}}

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            🔒
                        </span>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Create a password"
                            required
                        >
                        
                    </div>

                </div>


                {{-- Confirm Password --}}

                <div class="form-group">

                    <label for="password_confirmation">
                        Confirm Password
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            🔐
                        </span>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Confirm your password"
                            required
                        >
                     
                    </div>

                </div>


                <button type="submit" class="register-btn">
                    Create Account
                </button>

            </form>


            <div class="login-link">

                Already have an account?

                <a href="">
                    Login
                </a>

            </div>


            <div class="bottom-text">
                Portfolio Admin Panel • Secure Registration
            </div>

        </div>

    </div>

</body>
</html>