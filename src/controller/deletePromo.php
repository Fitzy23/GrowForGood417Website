<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<?php
// Include the database connection file
include 'db_connection.php';

// Check if the 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
    // Get the promo ID from the GET request
    $promo_id = $_GET['id'];

    // Prepare the SQL statement to delete the promotion
    $sql = "DELETE FROM PROMOTION WHERE promoID = :promo_id";

    // Initialize the prepared statement
    if ($stmt = $pdo->prepare($sql)) {
        // Bind the promo ID to the prepared statement as an integer
        $stmt->bindParam(':promo_id', $promo_id, PDO::PARAM_INT);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Promotion deleted successfully.";
        } else {
            echo "Error deleting promotion: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "Error preparing statement: " . $pdo->errorInfo()[2];
    }

    // Close the database connection
    $pdo = null;
} else {
    echo "No promo ID provided.";
}
header("Location: ../view/adminPromo.php");
?>