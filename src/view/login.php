<!--<?php include '../controller/db_connection.php'; ?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | GrowForGood417</title>
    <link href="output.css" rel="stylesheet">
</head>
<body>
<?php include './components/header.html'; ?>

<div class="bg-gray-100 flex items-center justify-center min-h-screen py-6">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Log In</h1>
        <form action="../controller/login.php" method="POST" class="space-y-3">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
                <input type="username" name="username" id="username" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-darkish-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Log In</button>
            </div>
        </form>
    </div>
</div>
<?php include './components/footer.html'; ?>
</body>

</html>