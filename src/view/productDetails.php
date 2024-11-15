

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="output.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php ?></title>
</head>
<body>
<?php
include '../controller/db_connection.php';
include './components/header.html';
$productID = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Query to get details for the specific product
$sql = "SELECT * FROM products WHERE productID = :productID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':productID', $productID, PDO::PARAM_INT);
$stmt->execute();

// Fetch product details
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="container mx-auto px-4 py-8">
    <?php if ($product): ?>
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="<?php echo htmlspecialchars($product['productImage']); ?>" alt="<?php echo htmlspecialchars($product['productName']); ?>" class="w-full h-64 object-cover">

            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($product['productName']); ?></h1>
                <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($product['productDesc']); ?></p>
                
                <p class="text-lg font-semibold text-green-700 mb-4">
                    Price: <?php echo $product['productPrice'] ? '$' . $product['productPrice'] : 'N/A'; ?>
                </p>
                
                <p class="text-sm <?php echo $product['inStock'] ? 'text-green-600' : 'text-red-600'; ?>">
                    <?php echo $product['inStock'] ? 'In Stock' : 'Out of Stock'; ?>
                </p>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center py-20">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Product not found</h2>
            <p class="text-gray-600">It seems like this product doesn't exist or may have been removed.</p>
            <a href="products.php" class="mt-4 inline-block text-green-500 hover:underline">Back to Products</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>