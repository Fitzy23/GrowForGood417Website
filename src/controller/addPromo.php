<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<?php
//include database connection
include 'db_connection.php';

//check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //get form data
    $promoCaption = $_POST['promoCaption'];
    $promoImg = $_FILES['promoImg']['name'];

    //validate the form data
    if (empty($promoCaption) || empty($promoImg)) {
        echo "All fields are required.";
        exit;
    }

    //upload promo image
    $target_dir = "../img/";
    $target_file = $target_dir . basename($promoImg);
    
    // before launch there needs to be more than this in order to keep file sizes reasonable 
    if (!move_uploaded_file($_FILES["promoImg"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

    //sql query
    $sql = "INSERT INTO PROMOTION (promoImg, promoCaption) VALUES (:promoImg, :promoCaption)";

    try {
        //prepare statement
        $stmt = $pdo->prepare($sql);

        //bind params
        $stmt->bindParam(':promoImg', $target_file);
        $stmt->bindParam(':promoCaption', $promoCaption);

        //execute
        if ($stmt->execute()) {
            //redirect or display errors
            header("location: ../view/adminPromo.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
