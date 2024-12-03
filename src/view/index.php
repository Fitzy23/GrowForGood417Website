<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Home | GrowForGood417</title>
</head>
<body class="flex flex-col min-h-screen bg-light-green"style="font-family: 'Josefin Sans', sans-serif;>

  <!-- Header -->
  <?php include './components/header.html'; ?>

  <!-- Main Content -->
  <main class="flex-grow p-4">

    <?php include './components/imgcarousel.php'; ?>
    <div class="justify-center text-center">
      <h1 class="text-center text-5xl mt-6 mb-6 text-darkish-green" style="-webkit-text-stroke: 1px black;">Let our plant obsessions become your plant obsession!</h1>
    </div>
  </main>

  <div class="flex flex-row justify-center">
    <?php include './components/map.html'; ?>
  </div>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
  
</body>
</html>