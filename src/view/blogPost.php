<?php
    if (!isset($_GET['postNum'])) {
        header('Location: plog.php');
        exit;
    }
    $blogPostsDir = __DIR__ . '/../blogPosts';
    //Use postNum when referencing the path to the blog post
    $postNum = $_GET['postNum'];
    //Use postNum2 when referencing the index of the blog post in the CSV file
    $postNum2 = $postNum - 1;
    $currentPostDir = __DIR__ . '/../blogPosts/post' . $postNum;
    $csvFile = fopen($blogPostsDir . '/blogs.csv', 'r');
    $csvData = [];
    $headers = fgetcsv($csvFile, 1000, ",");
    while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
        $csvData[] = array_combine($headers, $data);
    }
    fclose($csvFile);

    
?>

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
  <?php echo '<h2 class="text-4xl">' . $csvData[$postNum2]['Title'] . '</h2>'; ?>
     <?php include ($currentPostDir . '/' . $csvData[$postNum2]['HTMLFile'])?>
  </main>

  <!-- Footer -->
  <?php include './components/footer.html'; ?>
</body>
</html>