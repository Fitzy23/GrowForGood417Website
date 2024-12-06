<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<?php
// Include database connection
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_FILES['productImage']['name'];
    $inStock = isset($_POST['inStock']) ? 1 : 0;

    // Validate the form data
    if (empty($productName) || empty($productDescription) || empty($productPrice) || empty($productImage)) {
        echo "All fields are required.";
        exit;
    }

    // Upload the product image
    $target_dir = "../img/";
    $target_file = $target_dir . basename($productImage);
    
    // before launch there needs to be more than this in order to keep file sizes reasonable 
    if (!move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
    

    // Prepare an insert statement
    $sql = "INSERT INTO PRODUCTS (productName, productDesc, productPrice, productImage, inStock) VALUES (:productName, :productDesc, :productPrice, :productImage, :inStock)";

    try {
        // Prepare the statement
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productDesc', $productDescription);
        $stmt->bindParam(':productPrice', $productPrice);
        $stmt->bindParam(':productImage', $target_file);
        $stmt->bindParam(':inStock', $inStock);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the products page
            header("location: ./adminProduct.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    
}
?>