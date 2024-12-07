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
        // Get the blog ID from the GET request
        $blog_id = $_GET['id'];

        // Prepare the SQL statement to delete the blog post
        $sql = "DELETE FROM BLOG WHERE blogID = :blog_id";

        // Initialize the prepared statement
        if ($stmt = $pdo->prepare($sql)) {
                // Bind the blog ID to the prepared statement as an integer
                $stmt->bindParam(':blog_id', $blog_id, PDO::PARAM_INT);

                // Execute the prepared statement
                if ($stmt->execute()) {
                        echo "Blog post deleted successfully.";
                } else {
                        echo "Error deleting blog post: " . $stmt->errorInfo()[2];
                }
        } else {
                echo "Error preparing statement: " . $pdo->errorInfo()[2];
        }

        // Close the database connection
        $pdo = null;
} else {
        echo "No blog ID provided.";
}
header("Location: ../view/adminPlog.php");
?>