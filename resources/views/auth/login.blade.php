<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="company-profile">
            <div class="logo">
                <img src="{{ asset('image/sathielogo.png') }}" alt="Sathie Service Centre">
                <p>For Business Inquires : <span>sathie@gmail.com</span></p>
            </div>
            <p class="user-guide">Please use your existing user ID and password (credentials) to login to sarthie
                service center, an integrated platform for Service
            </p>
        </div>
        <div class="divider"></div>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="input-field-container {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-container">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="Email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="terms-forgot">
                <div class="terms-container">
                    <input type="checkbox">
                    <p class="terms">Accept Terms & Condition</p>
                </div>
                <div class="forgot-password">
                    Forgot Password
                </div>
            </div>
            <div class="primary-btn login-btn">
                <button>Log In</button>
            </div>
        </form>
        <div class="privacy-read">
            We do care about the security of your transactions. To make it better, please read <span><a href="">Privacy
                    Policy</a></span>
        </div>
    </div>
</body>

</html>




