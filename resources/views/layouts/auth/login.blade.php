<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Car Deal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-blue-800 to-gray-600 h-screen flex items-center justify-center">
  <div class="bg-gray-100 rounded-lg shadow-lg p-8 max-w-md w-full text-center border-t-4 border-blue-600">
    <div class="flex justify-center mb-6">
      <img src="https://i.pinimg.com/474x/ec/fb/cc/ecfbcc8e62cbd0e18b4de89960ecb606.jpg" alt="Logo" class="w-24 h-24 object-cover rounded-full border-4 border-blue-700 shadow-md">
    </div>
    <h1 class="text-3xl font-extrabold text-gray-800 mb-4">Welcome to TrustDB</h1>
    <p class="text-gray-700 mb-8">"Secure, Scalable, and Smart Database Solutions"</p>
    <div class="flex flex-col gap-4">
      <a href="{{ route('form_login') }}" class="block w-full text-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold py-3 rounded-lg shadow-md transition duration-200">
        Login
      </a>
      <!-- <a href="#" class="block w-full text-center bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-semibold py-3 rounded-lg shadow-md transition duration-200">
        Login as Sales
      </a> -->
    </div>
  </div>
</body>
</html>
