<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | ElevateOne Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
       <link rel="icon" type="image/png" href="{{ asset('assets/frontend/img/elevatefav.svg') }}" sizes="16x16">
    <style>
        :root {
            --primary: #006039;
            --glass-bg: rgba(255, 255, 255, 0.75);
            --border: rgba(255, 255, 255, 0.35);
            --text-dark: #1f2937;
            --text-light: #6b7280;
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #e9f5ef, #ffffff);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(14px);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 40px 30px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.12);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 170px;
        }

        .login-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .login-title h2 {
            margin: 0;
            color: var(--text-dark);
            font-weight: 600;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            background: transparent;
            font-size: 14px;
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            font-size: 14px;
            color: var(--text-light);
            pointer-events: none;
            transition: 0.3s;
            background: transparent;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -6px;
            font-size: 12px;
            color: var(--primary);
            background: #ffffff;
            padding: 0 6px;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 96, 57, 0.15);
        }

        .forgot {
            text-align: right;
            margin-bottom: 20px;
        }

        .forgot a {
            font-size: 13px;
            color: var(--primary);
            text-decoration: none;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: var(--primary);
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .btn-login.loading {
            pointer-events: none;
            background: #004c2d;
        }

        .btn-login.loading::after {
            content: "";
            width: 22px;
            height: 22px;
            border: 3px solid rgba(255,255,255,0.4);
            border-top-color: #fff;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg) translate(-50%, -50%); }
        }

        .error-message {
            color: red;
            font-size: 13px;
            margin-bottom: 15px;
            text-align: center;
        }

        .footer-text {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: var(--text-light);
        }
    </style>

    <script>
        function startLoading() {
            document.getElementById('loginBtn').classList.add('loading');
        }
    </script>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">

        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('assets/frontend/img/elevatenew.svg') }}" alt="ElevateOne Media">
        </div>

        <div class="login-title">
            <h2>Welcome Back</h2>
        </div>

        <!-- Display errors -->
        @if($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Laravel Login Form -->
        <form method="POST" action="{{ route('admin.login.post') }}" onsubmit="startLoading()">
    @csrf

   <div class="form-group"> <input type="email" name="email" required placeholder=" " value="{{ old('email') }}"> <label>Email Address</label> </div>

    <div class="form-group">
        <input type="password" name="password" required placeholder=" ">
        <label>Password</label>
    </div>

    <div class="forgot">
        <a href="#">Forgot Password?</a>
    </div>

    <button type="submit" class="btn-login" id="loginBtn">
        Login
    </button>
</form>


        <div class="footer-text">
            © {{ date('Y') }} ElevateOne Media
        </div>

    </div>
</div>

</body>
</html>
