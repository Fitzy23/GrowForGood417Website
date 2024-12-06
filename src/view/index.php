<?php 
  include '../controller//db_connection.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Home | GrowForGood417</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-family: 'Josefin Sans', sans-serif;
    }
    .content {
      flex: 1;
    }
  </style>
</head>
<body class="bg-light-green">

  <div class="content">
    <!-- Header -->
    <?php include './components/header.html'; ?>

    <!-- Main Content -->
    <main class="flex-grow p-4">
      <?php include './components/imgcarousel.php'; ?>
      <div class="justify-center text-center">
        <h1 class="text-center text-5xl mt-6 mb-6 text-darkish-green" style="-webkit-text-stroke: 1px black;">Let our plant obsessions become your plant obsession!</h1>
      </div>
    </main>

    <div class="flex flex-col md:flex-row justify-center mb-8 space-y-4 md:space-y-0 md:space-x-4">
      <div class="w-full md:w-1/2 max-w-md rounded-lg shadow-md overflow-y-auto" style="max-height: 300px;">
      <?php include './components/map.html'; ?>
      </div>
      
      <div class="w-full md:w-1/2 max-w-md p-4 bg-white rounded-lg shadow-md overflow-y-auto" style="max-height: 300px;">
      <h2 class="text-xl font-bold mb-4">Latest Blogs</h2>
      <?php
      try {
      
      $query = "SELECT blogID, blogTitle, created_at FROM BLOG ORDER BY created_at DESC LIMIT 5";
      
      $stmt = $pdo->prepare($query);

      $stmt->execute();
      
      $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if ($blogs) {
        foreach ($blogs as $blog) {
        echo '<div class="mb-2">';
        echo '<h3 class="text-lg font-semibold">' . htmlspecialchars($blog['blogTitle']) . '</h3>';
        echo '<div class="flex justify-between items-center">';
        echo '<p class="text-sm text-gray-600">' . htmlspecialchars($blog['created_at']) . '</p>';
        echo '<a href="blogPostDetail.php?id=' . $blog['blogID'] . '" class="text-blue-600 hover:underline">Read More</a>';
        echo '</div>';
        echo '</div>';
        echo '<hr class="my-2">';
        }
      } else {
        echo '<p>No blogs found.</p>';
      }
      } catch (PDOException $e) {
      echo '<p>Error: ' . htmlspecialchars($e->getMessage()) . '</p>';
      }
      ?>
      </div>
    </div>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>

</body>
</html>