<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>Admin Dashboard | GrowForGood417</title>
</head>
<body style="font-family: 'Josefin Sans', sans-serif;">
<?php
    include './components/header.html'
  ?>
  <?php include './components/adminMenu.html'; ?>
</body>
</html>