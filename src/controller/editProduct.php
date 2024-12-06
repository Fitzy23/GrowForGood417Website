<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Edit Product</h1>
        <form action="../controller/updateProduct.php" method="post">
            <div class="mb-4">
            <label for="product_id" class="block text-gray-700">Product ID:</label>
            <input type="text" id="product_id" name="product_id" class="w-full px-3 py-2 border rounded-lg" value="<?php echo htmlspecialchars($_GET['id']); ?>" required readonly>
            </div>
            <div class="mb-4">
            <label for="product_name" class="block text-gray-700">Product Name:</label>
            <input type="text" id="product_name" name="product_name" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
            <label for="product_description" class="block text-gray-700">Product Description:</label>
            <textarea id="product_description" name="product_description" class="w-full px-3 py-2 border rounded-lg" required></textarea>
            </div>
            <!--need to change this to let it be null-->
            <div class="mb-4">
            <label for="product_price" class="block text-gray-700">Product Price:</label>
            <input type="text" id="product_price" name="product_price" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
            <label for="in_stock" class="block text-gray-700">In Stock:</label>
            <select id="in_stock" name="in_stock" class="w-full px-3 py-2 border rounded-lg" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>
            <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Product</button>
            </div>
        </form>
    </div>
</body>
</html>