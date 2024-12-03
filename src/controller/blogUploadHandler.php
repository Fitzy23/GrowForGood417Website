<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
        header('Location: login.php');
        exit;
    }

    //You are going to have 10000 permissions errors when you move this to the web server, probably don't use chmod 666 or 777 in production version and actually solve it

    $title = $_POST['title'];
    $uploadDateTime = $_POST['uploadDateTime'];
    $folder = $_FILES['folder'];
    
    
    $directory = '../blogPosts';

    function createTargetDir($baseDir) {
        $i = 1;
        while (file_exists($baseDir . $i)) {
            $i++;
        }
        $targetDir = $baseDir . $i;
        echo "Attempting to create directory: $targetDir<br>";
        if (!mkdir($targetDir, 0777, true)) {
            die("Failed to create directory: $targetDir");
        }
        echo "Directory created: $targetDir<br>";
        return $targetDir;
    }
    
    $baseDir = "../blogPosts/post";
    $targetDir = createTargetDir($baseDir);

    foreach ($folder['tmp_name'] as $index => $tmpName) {
        $destination = $targetDir . '/' . $folder['name'][$index];
        if (!move_uploaded_file($tmpName, $destination)) {
            die('Failed to move uploaded file.');
        }
    }
    $csvFile = fopen('../blogPosts/blogs.csv', 'a');
    if ($csvFile === false) {
        die('Error opening the file');
    }
    
    $fileName = $folder['name'][1];
    if ($folder['name'][0] == 'image1.png'){
        $imageNames = $folder['name'][0];
    }
    
    
    $csvData = [$title, $uploadDateTime, $fileName, $imageNames, $targetDir];
    fputcsv($csvFile, $csvData);

    fclose($csvFile);
?>