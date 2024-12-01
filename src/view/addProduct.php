<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add a New Product</h1>
    <form action="../controller/addProduct.php" method="post">
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required><br><br>

        <label for="productDescription">Product Description:</label>
        <textarea id="productDescription" name="productDescription" required></textarea><br><br>

        <label for="productPrice">Product Price:</label>
        <input type="number" id="productPrice" name="productPrice" step="0.01" required><br><br>

        <label for="productCategory">Product Category:</label>
        <input type="text" id="productCategory" name="productCategory" required><br><br>

        <label for="productImage">Product Image:</label>
        <input type="file" id="productImage" name="productImage" accept="image/*" required><br><br>

        <label for="inStock">In Stock:</label>
        <input type="checkbox" id="inStock" name="inStock"><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>