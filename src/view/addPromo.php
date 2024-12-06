<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Add Promotion | GrowForGood417</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Josefin Sans', sans-serif;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body class="bg-light-green">

    <div class="content">
        <!-- Header -->
        <?php include './components/header.html'; ?>

        <!-- Main Content -->
        <main class="flex-grow p-4">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md pl-4 pr-4">
                <h1 class="text-3xl font-bold mb-6 text-center text-black">Add a New Promotion</h1>
                <form action="../controller/addPromo.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="promoCaption" class="block text-sm font-medium text-gray-700">Promotion Caption:</label>
                        <textarea id="promoCaption" name="promoCaption" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="promoImg" class="block text-sm font-medium text-gray-700">Promotion Image:</label>
                        <input type="file" id="promoImg" name="promoImg" accept="image/*" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green">
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Add Promotion" class="px-4 py-2 bg-darkish-green text-white rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkish-green">
                    </div>
                </form>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include './components/footer.html'; ?>

</body>
</html>
