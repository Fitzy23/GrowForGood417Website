<?php
  session_start();
  if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: login.php');
    exit;
  }
  echo $_SESSION['user'];
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
<div class="flex justify-center items-start min-h-screen p-6">
    <form action="../controller/blogUploadHandler.php" method="post" enctype="multipart/form-data" class="max-w-lg mt-10 p-6 bg-white rounded-lg shadow-md">
            <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="title" name="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                    <label for="folder" class="block text-gray-700 text-sm font-bold mb-2">Upload Folder:</label>
                    <input type="file" id="folder" name="folder[]" webkitdirectory directory multiple required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <input type="hidden" id="uploadDateTime" name="uploadDateTime" value="<?php echo date('Y-m-d H:i:s'); ?>">
            <div class="flex items-center justify-center">
                    <input type="submit" value="Upload" class="bg-darkish-green text-black rounded pl-2 pr-2 pt-1 pb-1">
            </div>
    </form>
</div>
</body>
</html>