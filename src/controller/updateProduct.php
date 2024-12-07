<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<?php
//include database connection
require_once 'db_connection.php';
//check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //get product details from POST request
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productDescription = $_POST['product_description'];
    $inStock = $_POST['in_stock'];

    //validate input
    if (!empty($productId) && !empty($productName) && !empty($productPrice) && !empty($productDescription) && isset($inStock)) {
        //prepare SQL update statement
        $sql = "UPDATE PRODUCTS SET productName = ?, productPrice = ?, productDesc = ?, InStock = ? WHERE productID = ?";
        if ($stmt = $pdo->prepare($sql)) {
            //bind variables to the prepared statement as parameters
            $stmt->bindValue(1, $productName, PDO::PARAM_STR);
            $stmt->bindValue(2, $productPrice, PDO::PARAM_STR);
            $stmt->bindValue(3, $productDescription, PDO::PARAM_STR);
            $stmt->bindValue(4, $inStock, PDO::PARAM_INT);
            $stmt->bindValue(5, $productId, PDO::PARAM_INT);

            //attempt to execute the prepared statement
            if ($stmt->execute()) {
                echo "Product updated successfully.";
                header("Location: ../view/adminProduct.php");
            } else {
                echo "Error updating product: " . implode(", ", $stmt->errorInfo());
            }

            //close statement
            $stmt->closeCursor();
        }
    } else {
        echo "All fields are required.";
    }

    //close connection
    $pdo = null;
} else {
    echo "Invalid request.";
}
?>