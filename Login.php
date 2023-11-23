<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            @apply bg-cover bg-center bg-fixed;
            background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),
            url('img/data-warehousen.jpg');
            
        }
    </style>
    <title>Login Page</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <!-- Login Form -->
        <form id="login-form">
            <img src="img/black.png" alt="Logo" class="mx-auto mb-8 rounded-full w-32 h-20">
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="john.doe@example.com" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="********" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200">
                Login
            </button>
            <p class="mt-4 text-sm text-gray-600">Don't have an account? <a href="#" id="show-signup">Sign up</a></p>
        </form>

        <!-- Signup Form -->
        <form id="signup-form" class=" hidden">
        <img src="img/black.png" alt="Logo" class="mx-auto mb-8 rounded-full w-32 h-20">
            <div class="mb-4">
                <label for="signup-nom" class="block text-gray-600 text-sm font-semibold mb-2">Nom</label>
                <input type="nom" id="signup-nom" name="signup-nom" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Nom" required>
            </div>
           
            <div class="mb-4">
                <label for="signup-prenom" class="block text-gray-600 text-sm font-semibold mb-2">Prenom</label>
                <input type="prenom" id="signup-prenom" name="signup-prenom" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Prenom" required>
            </div>
            <div class="mb-4">
                <label for="signup-email" class="block text-gray-600 text-sm font-semibold mb-2">Email</label>
                <input type="email" id="signup-email" name="signup-email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="john.doe@gmail.com" required>
            </div>
            <div class="mb-4">
                <label for="signup-tel" class="block text-gray-600 text-sm font-semibold mb-2">Telephone</label>
                <input type="tel" id="signup-tel" name="signup-tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Telephone" required>
            </div>
            <div class="mb-4">
                <label for="signup-password" class="block text-gray-600 text-sm font-semibold mb-2">Password</label>
                <input type="password" id="signup-password" name="signup-password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="********" required>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200">
                Sign Up
            </button>
            <p class="mt-4 text-sm text-gray-600">Already have an account? <a href="#" id="show-login">Login</a></p>
        </form>

        <script>
            // JavaScript to toggle form visibility
            document.getElementById('show-signup').addEventListener('click', function () {
                document.getElementById('login-form').classList.add('hidden');
                document.getElementById('signup-form').classList.remove('hidden');
            });

            document.getElementById('show-login').addEventListener('click', function () {
                document.getElementById('signup-form').classList.add('hidden');
                document.getElementById('login-form').classList.remove('hidden');
            });
        </script>
    </div>
</body>
</html>



