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
    <title>Edit Product | GrowForGood417</title>
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
                <h1 class="text-3xl font-bold mb-6 text-center text-black">Edit Product</h1>
                <form action="../controller/updateProduct.php" method="post">
                    <div class="mb-4">
                        <label for="product_id" class="block text-sm font-medium text-gray-700">Product ID:</label>
                        <input type="text" id="product_id" name="product_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green" value="<?php echo htmlspecialchars($_GET['id']); ?>" required readonly>
                    </div>
                    <div class="mb-4">
                        <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name:</label>
                        <input type="text" id="product_name" name="product_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green" required>
                    </div>
                    <div class="mb-4">
                        <label for="product_description" class="block text-sm font-medium text-gray-700">Product Description:</label>
                        <textarea id="product_description" name="product_description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="product_price" class="block text-sm font-medium text-gray-700">Product Price:</label>
                        <input type="number" id="product_price" name="product_price" step="0.01" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green">
                    </div>
                    <div class="mb-4">
                        <label for="in_stock" class="block text-sm font-medium text-gray-700">In Stock:</label>
                        <select id="in_stock" name="in_stock" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-darkish-green focus:border-darkish-green" required>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="px-4 py-2 bg-darkish-green text-white rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-darkish-green">Update Product</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include './components/footer.html'; ?>

</body>
</html>