<?php include '../controller/db_connection.php'; 
$query = $pdo->query("SELECT * FROM PRODUCTS");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Products | GrowForGood417</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .content-wrapper {
      flex: 1;
    }
  </style>
</head>
<body class="bg-light-green" style="font-family: 'Josefin Sans', sans-serif;">
  <div class="content-wrapper">
    <!-- Header -->
    <?php include './components/header.html'; ?>

    <!-- Main Content -->
    <div class="container mx-auto px-8">
      <div class="text-center text-6xl mt-9 mb-3">
        <h1>Products</h1>
      </div>
      <?php include './components/imgcarousel.html'; ?>
      <div class="flex flex-wrap">
        <?php while($item = $query->fetch(PDO::FETCH_ASSOC)): ?>
          <?php if ($item['inStock'] == 1): ?>
            <!-- Smaller card widths and reduced padding -->
            <div class="w-full sm:w-1/3 lg:w-1/5 p-2">
              <a href="productDetails.php?id=<?php echo htmlspecialchars($item['productID']); ?>">
                <div class="bg-white rounded-lg p-4 shadow-lg">
                  <img src="<?php echo htmlspecialchars($item['productImage']); ?>" alt="<?php echo htmlspecialchars($item['productName']); ?>" class="w-full h-auto rounded">
                  <div class="text-center mt-2">
                    <h2 class="text-2xl font-bold text-gray-800 mb-1"><?php echo htmlspecialchars($item['productName']); ?></h2>
                  </div>
                  <?php if ($item['productPrice'] != null): ?>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">$<?php echo htmlspecialchars($item['productPrice']); ?></h3>
                  <?php endif; ?>
                </div>
              </a>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
</body>
</html>