<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Plant Care | GrowForGood417</title>
</head>
<body class="bg-light-green">
  <!-- Header -->
  <?php include './components/header.html'; ?>

  <!-- Main Content -->
  <main class="flex-grow p-4">
    <?php
    $csvFile = fopen('./components/category.csv', 'r');
    $categories = [];
    if ($csvFile !== FALSE) {
      $header = fgetcsv($csvFile); // Skip the header row
      while (($row = fgetcsv($csvFile)) !== FALSE) {
        $categories[] = $row;
      }
      fclose($csvFile);
    }
    ?>

    <div class="flex flex-row justify-center">
      <div class="w-full md:w-1/3 p-4 basis-1/2">
        <?php foreach ($categories as $index => $category): ?>
          <div id="category-box" class="category-box p-4 m-2 bg-white shadow-lg rounded cursor-pointer hover:bg-gray-100" onclick="showDetails(<?php echo $index; ?>)">
            <?php echo htmlspecialchars($category[0]); ?>
          </div>
        <?php endforeach; ?>
      </div>
      <div id="details" class="basis-1/2"></div>
    </div>

    <script>
      const categories = <?php echo json_encode($categories); ?>;
      function showDetails(index) {
        const detailsDiv = document.getElementById('details');
        detailsDiv.innerHTML = `
        <div class="text-center w-full md:pr-20 p-4 m-2 bg-white shadow-lg rounded mr-4">
          <h1 class="text-2xl font-bold mb-4">${categories[index][0]}</h1>
          <div class="flex justify-center mb-4"> 
            <img src="../img/${categories[index][5].toLowerCase()}" class="w-auto h-96">
          </div>
          <p class="mb-2">Light: ${categories[index][1]}</p>
          <p class="mb-2">Care: ${categories[index][2]}</p>
          <p class="mb-2">Growth: ${categories[index][3]}</p>
          <p class="mb-2">About: ${categories[index][4]}</p>
        </div>
        `;
        detailsDiv.classList.remove('hidden');
        detailsDiv.style.height = 'auto'; // Adjust height to fit content
        // Reset background color for all category boxes
        document.querySelectorAll('.category-box').forEach(box => {
          box.classList.remove('bg-darkish-green');
          box.classList.add('bg-white');
        });

        // Set background color for the selected category box
        document.querySelectorAll('.category-box')[index].classList.remove('bg-white');
        document.querySelectorAll('.category-box')[index].classList.add('bg-darkish-green');
        document.querySelectorAll('.category-box')[index].classList.remove('hover:bg-gray-100');
      }

      // Show the first entry by default
      if (categories.length > 0) {
        showDetails(0);
      }
    </script>
  </main>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
</body>
</html>