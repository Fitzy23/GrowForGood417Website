<?php

session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
  header('Location: login.php');
  exit;
}


if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Specify the directory where the uploaded images will be saved
    $uploadFileDir = '../uploaded_images/';
    $dest_path = $uploadFileDir . $fileName;

    // Create the directory if it doesn't exist
    if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir, 0755, true);
    }

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $response = array(
            'location' => $dest_path
        );
        echo json_encode($response);
    } else {
        echo "Error moving the uploaded file.";
    }
} else {
    echo "Error uploading the file.";
}
?>