<?php
// Include database connection
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $promoCaption = $_POST['promoCaption'];
    $promoImg = $_FILES['promoImg']['name'];

    // Validate the form data
    if (empty($promoCaption) || empty($promoImg)) {
        echo "All fields are required.";
        exit;
    }

    // Upload the promo image
    $target_dir = "../img/";
    $target_file = $target_dir . basename($promoImg);
    
    // before launch there needs to be more than this in order to keep file sizes reasonable 
    if (!move_uploaded_file($_FILES["promoImg"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

    // Prepare an insert statement
    $sql = "INSERT INTO PROMOTION (promoImg, promoCaption) VALUES (:promoImg, :promoCaption)";

    try {
        // Prepare the statement
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':promoImg', $target_file);
        $stmt->bindParam(':promoCaption', $promoCaption);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the promotions page
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
