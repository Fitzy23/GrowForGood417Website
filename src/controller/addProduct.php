
<?php
//check if user is admin
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<?php
//include db_connection
include 'db_connection.php';

//check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //assign form data to vars
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_FILES['productImage']['name'];
    $inStock = isset($_POST['inStock']) ? 1 : 0;

    //validate
    if (empty($productName) || empty($productDescription) || empty($productPrice) || empty($productImage)) {
        echo "All fields are required.";
        exit;
    }

    //upload image
    $target_dir = "../img/";
    $target_file = $target_dir . basename($productImage);
    
    // before launch there needs to be more than this in order to keep file sizes reasonable 
    if (!move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
    

    //sql query
    $sql = "INSERT INTO PRODUCTS (productName, productDesc, productPrice, productImage, inStock) VALUES (:productName, :productDesc, :productPrice, :productImage, :inStock)";

    try {
        //prepare statement
        $stmt = $pdo->prepare($sql);

        //bind params
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':productDesc', $productDescription);
        $stmt->bindParam(':productPrice', $productPrice);
        $stmt->bindParam(':productImage', $target_file);
        $stmt->bindParam(':inStock', $inStock);

        //execute
        if ($stmt->execute()) {
            //redirect or display error
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