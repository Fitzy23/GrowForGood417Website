<?php include '../controller/db_connection.php'; 
$query = $pdo->query("SELECT * FROM PRODUCTS");
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
  <h1 class="text-center text-5xl mt-8">Admin Dashboard</h1>
  <div class="flex flex-row justify-center mt-8">
  <button class="border-l-2 border-r-2 border-t-2 border-b-2 w-56 h-10 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Promotions</button>
      <button onclick="window.location.href='adminProduct.php';" class="border-t-2 border-r-2 border-b-2 w-56 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Products</button>
      <button class="border-l-2 border-r-2 border-t-2 border-b-2 w-56 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Plog</button>
</div>
<div class="text-center contents-center justify-center">
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Product Stock</th>
        </tr>
<?php while($item = $query->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
        <td><?php echo htmlspecialchars($item['productID']); ?></td>
        <td><?php echo htmlspecialchars($item['productName']); ?></td>
        <td><?php echo htmlspecialchars($item['productDesc']); ?></td>
        <td><?php echo htmlspecialchars($item['productPrice']); ?></td>
        <td><?php echo htmlspecialchars($item['productImage']); ?></td>
        <td><?php echo htmlspecialchars($item['inStock']); ?></td>
    </tr>

<?php } ?>
    </table>
</div>
</body>
</html>