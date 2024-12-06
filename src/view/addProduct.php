
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
    <title>Add Product | GrowForGood417</title>
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
                <h1 class="text-3xl font-bold mb-6 text-center text-black">Add a New Product</h1>
                <form action="../controller/addProduct.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="productName" class="block text-sm font-medium text-gray-700">Product Name:</label>
                        <input type="text" id="productName" name="productName" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green">
                    </div>

                    <div class="mb-4">
                        <label for="productDescription" class="block text-sm font-medium text-gray-700">Product Description:</label>
                        <textarea id="productDescription" name="productDescription" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="productPrice" class="block text-sm font-medium text-gray-700">Product Price:</label>
                        <input type="number" id="productPrice" name="productPrice" step="0.01" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green">
                    </div>

                    <div class="mb-4">
                        <label for="productImage" class="block text-sm font-medium text-gray-700">Product Image:</label>
                        <input type="file" id="productImage" name="productImage" accept="image/*" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green">
                    </div>

                    <div class="mb-4">
                        <label for="inStock" class="block text-sm font-medium text-gray-700">In Stock:</label>
                        <input type="checkbox" id="inStock" name="inStock" class="mt-1">
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Add Product" class="px-4 py-2 bg-darkish-green text-white rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkish-green">
                    </div>
                </form>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include './components/footer.html'; ?>

</body>
</html>