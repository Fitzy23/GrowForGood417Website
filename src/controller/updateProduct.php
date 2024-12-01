<?php
// Include database connection
require_once 'db_connection.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get product details from POST request
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productDescription = $_POST['product_description'];
    $inStock = $_POST['in_stock'];

    // Validate input
    if (!empty($productId) && !empty($productName) && !empty($productPrice) && !empty($productDescription) && isset($inStock)) {
        // Prepare SQL update statement
        $sql = "UPDATE PRODUCTS SET productName = ?, productPrice = ?, productDesc = ?, InStock = ? WHERE productID = ?";
        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(1, $productName, PDO::PARAM_STR);
            $stmt->bindValue(2, $productPrice, PDO::PARAM_STR);
            $stmt->bindValue(3, $productDescription, PDO::PARAM_STR);
            $stmt->bindValue(4, $inStock, PDO::PARAM_INT);
            $stmt->bindValue(5, $productId, PDO::PARAM_INT);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                echo "Product updated successfully.";
                header("Location: ../view/adminProduct.php");
            } else {
                echo "Error updating product: " . implode(", ", $stmt->errorInfo());
            }

            // Close statement
            $stmt->closeCursor();
        }
    } else {
        echo "All fields are required.";
    }

    // Close connection
    $pdo = null;
} else {
    echo "Invalid request.";
}
?>