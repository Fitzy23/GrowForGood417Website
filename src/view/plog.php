<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Plog | GrowForGood417</title>
</head>
<body class="bg-light-green">
  <!-- Header -->
  <?php include './components/header.html'; ?>

  <!-- Main Content -->
  <main class="flex-grow p-4">
    <?php
    $blogPostsDir = __DIR__ . '/../blogPosts';
    $csvFilePath = $blogPostsDir . '/blogs.csv';

    $csvFile = fopen($blogPostsDir . '/blogs.csv', 'r');
    
    $csvData = [];
    $headers = fgetcsv($csvFile, 1000, ",");
    while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
      $csvData[] = array_combine($headers, $data);
    }
    $folders = array_filter(glob($blogPostsDir . '/*'), 'is_dir');
    if ($folders === false) {
      die("Error: glob() failed. Check the directory path: $blogPostsDir");
    }
    echo "<pre>";
    print_r(htmlspecialchars($csvData[0]['Path']));
print_r($folders[1]);
echo "</pre>";
echo "here";
$i = 0;
$j = 1;

while (isset($folders[$j])) {
  echo "<div class='blog-post bg-white shadow-md rounded-lg p-6 mb-4'>";
    echo "<a href='blogPost.php?postNum=" . $j . "' class='text-blue-500 hover:underline'>";
      echo "<h2 class='text-2xl font-bold mb-2'>" . htmlspecialchars($csvData[$i]['Title']) . "</h2>";
    echo "</a>";
  echo "</div>";

  $i++;
  $j++;
}
    fclose($csvFile);
    ?>
  </main>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
</body>
</html>