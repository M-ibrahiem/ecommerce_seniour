<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="{{ asset('reg-login/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="login__field">
                        <label for="name" class="login__label">{{ __('Name') }}</label>
                        <i class="login__icon fas fa-user"></i>
                        <input id="name" class="login__input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Email Address -->
                    <div class="login__field">
                        <label for="email" class="login__label">{{ __('Email') }}</label>
                        <i class="login__icon fas fa-envelope"></i>
                        <input id="email" class="login__input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="login__field">
                        <label for="password" class="login__label">{{ __('Password') }}</label>
                        <i class="login__icon fas fa-lock"></i>
                        <input id="password" class="login__input" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="login__field">
                        <label for="password_confirmation" class="login__label">{{ __('Confirm Password') }}</label>
                        <i class="login__icon fas fa-lock"></i>
                        <input id="password_confirmation" class="login__input" type="password" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button type="submit" class="button login__submit">
                            <span class="button__text">{{ __('Register') }}</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>
