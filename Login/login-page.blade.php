<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/styles.css')
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="/images/fcsit_upm.png" alt="Building" class="building-image">
        </div>
        <div class="login-section">
            <h2>Log in as Admin</h2>
            <!-- Addded new login function -->
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username"></label>
                    <input type="text" id="username" name="username" placeholder="USERNAME" required>
                </div>
                <div class="input-group">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="PASSWORD" required>
                </div>
                <button type="submit" class="login-button">LOGIN</button>
                <a href="{{ url('/home') }}" class="as_guest">As a Guest?</a>
            </form>

            @if ($errors->has('invalid'))
                <p class="error-message">{{ $errors->first('invalid') }}</p>
            @endif
        </div>
    </div>
</body>
</html>
