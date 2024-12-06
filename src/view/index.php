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

    <div class="flex flex-row justify-center mb-8">
      <?php include './components/map.html'; ?>
    </div>
  </div>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>

</body>
</html>