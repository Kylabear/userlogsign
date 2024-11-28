<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Register</h2>
        <form action="process_registration.php" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded" required>
            <input type="text" name="year" placeholder="Year" class="w-full p-2 border rounded" required>
            <input type="text" name="course" placeholder="Course" class="w-full p-2 border rounded" required>
            <input type="text" name="program" placeholder="Program" class="w-full p-2 border rounded" required>
            <button type="submit" class="w-full p-2 text-white bg-blue-600 rounded hover:bg-blue-700">Register</button>
        </form>
        <a href="login.php" class="block text-center text-blue-600 hover:underline">Already have an account? Login</a>
    </div>
</body>
</html>
