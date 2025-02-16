<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-900 via-blue-800 to-gray-600 h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Register</h1>
            <p class="text-gray-600 mb-6">Enter your details to register.</p>
        </div>

        <form action="" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter your full name">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter your password">
                    <div class="absolute inset-y-0 right-3 flex items-center">
                        <input type="checkbox" id="show-password" class="mr-2">
                        <label for="show-password" class="text-sm text-gray-600">Show</label>
                    </div>
                </div>
            </div>

            <div>
                <label for="confirm_pass" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <div class="relative">
                    <input type="password" id="confirm_pass" name="confirm_password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Confirm your password">
                    <div class="absolute inset-y-0 right-3 flex items-center">
                        <input type="checkbox" id="show-confirm-password" class="mr-2">
                        <label for="show-confirm-password" class="text-sm text-gray-600">Show</label>
                    </div>
                </div>
            </div>

            <div class="text-right">
                <a href="" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
            </div>

            <button type="submit"
                class="block w-full text-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold py-3 rounded-lg shadow-md transition duration-200">
                Register
            </button>
        </form>

        <p class="text-center text-gray-600 text-sm mt-6">
            Already have an account? <a href="" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>

    <script>
        document.getElementById('show-password').addEventListener('change', function() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = this.checked ? 'text' : 'password';
        });

        document.getElementById('show-confirm-password').addEventListener('change', function() {
            const passwordInput = document.getElementById('confirm_pass');
            passwordInput.type = this.checked ? 'text' : 'confirm_pass';
        });
    </script>
</body>

</html>
