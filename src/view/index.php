<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css"> <!-- Link to Tailwind CSS file -->
  <title>Home | GrowForGood417</title>
</head>
<body class="flex flex-col min-h-screen bg-light-green">

  <!-- Header -->
  <?php include './components/header.html'; ?>

  <!-- Main Content -->
  <main class="flex-grow p-4">
    <?php include './components/imgcarousel.php'; ?>
  </main>

  <div class="flex flex-row justify-center">
    <?php include './components/map.html'; ?>
  </div>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
  
</body>
</html>