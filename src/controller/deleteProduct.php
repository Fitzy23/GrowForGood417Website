<?php
// Include the database connection file
include 'db_connection.php';

// Check if the 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
    // Get the product ID from the GET request
    $product_id = $_GET['id'];

    // Prepare the SQL statement to delete the product
    $sql = "DELETE FROM PRODUCTS WHERE productID = :product_id";

    // Initialize the prepared statement
    if ($stmt = $pdo->prepare($sql)) {
        // Bind the product ID to the prepared statement as an integer
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Product deleted successfully.";
        } else {
            echo "Error deleting product: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "Error preparing statement: " . $pdo->errorInfo()[2];
    }

    // Close the database connection
    $pdo = null;
} else {
    echo "No product ID provided.";
}
header("Location: ../view/adminProduct.php");
?>
