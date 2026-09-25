
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Rehan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background:
                radial-gradient(circle at 15% 20%, #263b73 0%, transparent 30%),
                radial-gradient(circle at 85% 80%, #4b235f 0%, transparent 30%),
                #080b12;
            overflow: hidden;
        }

        /* Background circles */

        body::before,
        body::after {
            content: "";
            position: fixed;
            border-radius: 50%;
            filter: blur(2px);
            pointer-events: none;
        }

        body::before {
            width: 280px;
            height: 280px;
            background: rgba(91, 119, 255, 0.12);
            top: -100px;
            right: -70px;
        }

        body::after {
            width: 230px;
            height: 230px;
            background: rgba(194, 76, 255, 0.10);
            bottom: -80px;
            left: -60px;
        }

        .login-container {
            width: 100%;
            max-width: 430px;
            position: relative;
            z-index: 1;
        }

        .login-box {
            padding: 42px;
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 24px;

            background: rgba(255, 255, 255, 0.055);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.08);
        }

        /* Logo */

        .logo {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo-icon {
            width: 62px;
            height: 62px;
            margin: 0 auto 18px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background: linear-gradient(135deg, #667eea, #764ba2);

            box-shadow:
                0 12px 30px rgba(102, 126, 234, 0.30);

            color: white;
            font-size: 27px;
            font-weight: 700;
        }

        .logo h1 {
            color: #fff;
            font-size: 28px;
            font-weight: 650;
            letter-spacing: -0.5px;
        }

        .logo p {
            margin-top: 8px;
            color: #9298a8;
            font-size: 14px;
        }

        /* Error */

        .error {
            padding: 12px 14px;
            margin-bottom: 20px;

            border: 1px solid rgba(255, 90, 90, 0.25);
            border-radius: 10px;

            background: rgba(255, 70, 70, 0.08);
            color: #ff8c8c;

            font-size: 13px;
        }

        .success {
            padding: 12px 14px;
            margin-bottom: 20px;

            border: 1px solid rgba(70, 255, 150, 0.25);
            border-radius: 10px;

            background: rgba(70, 255, 150, 0.08);
            color: #72e6a0;

            font-size: 13px;
        }

        /* Form */

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;

            color: #dfe2eb;
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

            color: #777e91;
            font-size: 15px;
        }

        input {
            width: 100%;
            height: 50px;

            padding: 0 15px 0 44px;

            border: 1px solid rgba(255, 255, 255, 0.09);
            border-radius: 11px;

            outline: none;

            background: rgba(0, 0, 0, 0.25);
            color: #fff;

            font-size: 14px;

            transition: 0.25s ease;
        }

        input::placeholder {
            color: #626879;
        }

        input:focus {
            border-color: #7185ff;

            background: rgba(0, 0, 0, 0.32);

            box-shadow:
                0 0 0 3px rgba(113, 133, 255, 0.10);
        }

        /* Button */

        .login-btn {
            width: 100%;
            height: 51px;

            margin-top: 5px;

            border: none;
            border-radius: 11px;

            background: linear-gradient(
                135deg,
                #667eea,
                #764ba2
            );

            color: white;

            font-size: 15px;
            font-weight: 600;

            cursor: pointer;

            box-shadow:
                0 10px 25px rgba(102, 126, 234, 0.20);

            transition: 0.25s ease;
        }

        .login-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 14px 30px rgba(102, 126, 234, 0.32);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        /* Bottom */

        .bottom-text {
            margin-top: 27px;

            text-align: center;

            color: #666d7e;
            font-size: 12px;
        }

        .bottom-text span {
            color: #8992a8;
        }

        /* Mobile */

        @media (max-width: 500px) {

            body {
                padding: 15px;
            }

            .login-box {
                padding: 32px 24px;
                border-radius: 20px;
            }

            .logo h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-box">

            <div class="logo">

                <div class="logo-icon">
                    R
                </div>

                <h1>Welcome Back</h1>

                <p>Sign in to your portfolio admin panel</p>

            </div>


            {{-- Error Message --}}

            @if(session('error'))

                <div class="error">
                    {{ session('error') }}
                </div>

            @endif


            {{-- Success Message --}}

            @if(session('success'))

                <div class="success">
                    {{ session('success') }}
                </div>

            @endif


            {{-- Validation Errors --}}

            @if($errors->any())

                <div class="error">
                    {{ $errors->first() }}
                </div>

            @endif


            <form action="/adminlogin" method="post">

                @csrf


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
                            placeholder="Enter your password"
                            required
                        >

                    </div>

                </div>


                <button type="submit" class="login-btn">
                    Sign In
                </button>

            </form>


            <div class="bottom-text">
                <span>Portfolio Admin Panel</span>
                • Secure Login
            </div>

        </div>

    </div>

</body>
</html>

