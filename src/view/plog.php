<?php
include '../controller/db_connection.php'; // Include your database connection

// Fetch all blog posts from the database
$query = $pdo->query("SELECT * FROM BLOG");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <title>Blog | GrowForGood417</title>
</head>
<body style="font-family: 'Josefin Sans', sans-serif;">

  <!-- Header -->
  <?php include './components/header.html'; ?>

  <!-- Blog Post List -->
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold text-center mb-6">Blog Posts</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php while ($post = $query->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($post['blogTitle']); ?></h2>
          <p class="text-gray-600 mb-4"><?php echo substr(strip_tags($post['blogContent']), 0, 200) . '...'; ?></p>
          <p class="text-gray-500 text-sm mb-4">Posted on: <?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
          <a href="blogPostDetail.php?id=<?php echo $post['blogID']; ?>" class="text-blue-600 hover:underline">Read More</a>
        </div>
      <?php endwhile; ?>
    </div>
    
  </div>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
</body>
</html>