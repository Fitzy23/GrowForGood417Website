<?php
session_start();
require_once 'db_connection.php'; // Make sure to include your database connection file

//get the submitted username and password
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

//hash the submitted password
$submittedPasswordHash = md5($password);

//prepare and execute the query to fetch the user data
$query = $pdo->prepare("SELECT * FROM LOGIN WHERE Username = :username");
$query->bindParam(':username', $username);
$query->execute();
$user = $query->fetch();

if ($user && $submittedPasswordHash === $user['PasswordHash']) {
    //credentials are correct, grant access
    $_SESSION['user'] = "admin";
    $_SESSION['expire'] = time() + (30 * 60); // Session expires in 30 minutes
    header('Location: ../view/admin.php');
} else {
    //credentials are incorrect, deny access
    echo "Invalid username or password.";
}
?>
