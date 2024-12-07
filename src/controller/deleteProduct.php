<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<?php
//include the database connection file
include 'db_connection.php';

//check if the 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
    //get the product ID from the GET request
    $product_id = $_GET['id'];

    //prepare the SQL statement to delete the product
    $sql = "DELETE FROM PRODUCTS WHERE productID = :product_id";

    //initialize the prepared statement
    if ($stmt = $pdo->prepare($sql)) {
        //bind the product ID to the prepared statement as an integer
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);

        //execute the prepared statement
        if ($stmt->execute()) {
            echo "Product deleted successfully.";
        } else {
            echo "Error deleting product: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "Error preparing statement: " . $pdo->errorInfo()[2];
    }

    //close the database connection
    $pdo = null;
} else {
    echo "No product ID provided.";
}
header("Location: ../view/adminProduct.php");
?>
