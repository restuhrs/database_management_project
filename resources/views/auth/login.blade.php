<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gradient-to-br from-gray-900 via-blue-800 to-gray-600 h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Login</h1>
            <img class="mx-auto w-28 h-28 w-auto mb-4" src="https://i.pinimg.com/474x/ec/fb/cc/ecfbcc8e62cbd0e18b4de89960ecb606.jpg" alt="logo">
            <p class="text-gray-600 mb-6">Please login to your account.</p>
        </div>

        <form action="{{ route('login.action') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" id="username" name="username" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter username" value="{{ old('username') }}">
                @error('username')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter password">
                    <div class="absolute inset-y-0 right-3 flex items-center">
                        <button type="button" id="toggle-password" class="text-gray-600 focus:outline-none mr-2">
                            <i id="icon-eye" class="fas fa-eye text-blue-600"></i>
                            <i id="icon-eye-slash" class="fas fa-eye-slash hidden text-blue-600"></i>
                        </button>
                    </div>
                </div>
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            @if(session('login_error'))
                <div class="text-red-500 text-sm mt-1">{{ session('login_error') }}</div>
            @endif
            <div class="text-right">
                <a href="" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
            </div>
            <button type="submit" class="block w-full text-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold py-3 rounded-lg shadow-md transition duration-200">
                Login
            </button>
        </form>
        
    </div>

    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordInput = document.getElementById('password');
        const iconEye = document.getElementById('icon-eye');
        const iconEyeSlash = document.getElementById('icon-eye-slash');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            iconEye.classList.toggle('hidden', !isPassword);
            iconEyeSlash.classList.toggle('hidden', isPassword);
        });
    </script>

</body>

</html>
