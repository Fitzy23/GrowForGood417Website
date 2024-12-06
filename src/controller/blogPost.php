<?php

include 'db_connection.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $title = htmlspecialchars($_POST['blogTitle']);
    $content = $_POST['blogContent'];  // Content will come from TinyMCE
    

    // Prepare SQL query to insert the blog post into the database
    $query = $pdo->prepare("INSERT INTO BLOG (blogTitle, blogContent) 
                            VALUES (:blogTitle, :blogContent)");
    
    // Bind parameters and execute query
    $query->bindParam(':blogTitle', $title);
    $query->bindParam(':blogContent', $content);
    echo "here";
    try {
        if ($query->execute()) {
            echo "Blog post has been successfully uploaded!";
        } else {
            echo "There was an error uploading your blog post.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>