<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
        header('Location: login.php');
        exit;
    }
?>

<?php
//include db connection
include 'db_connection.php';

//check if the 'id' parameter is set in the GET request
if (isset($_GET['id'])) {
        //get the blog ID from the GET request
        $blog_id = $_GET['id'];

        //prepare the SQL statement to delete the blog post
        $sql = "DELETE FROM BLOG WHERE blogID = :blog_id";

        //initialize the prepared statement
        if ($stmt = $pdo->prepare($sql)) {
                //bind the blog ID to the prepared statement as an integer
                $stmt->bindParam(':blog_id', $blog_id, PDO::PARAM_INT);

                //execute the prepared statement
                if ($stmt->execute()) {
                        echo "Blog post deleted successfully.";
                } else {
                        echo "Error deleting blog post: " . $stmt->errorInfo()[2];
                }
        } else {
                echo "Error preparing statement: " . $pdo->errorInfo()[2];
        }

        //close the database connection
        $pdo = null;
} else {
        echo "No blog ID provided.";
}
header("Location: ../view/adminPlog.php");
?>