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
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body style="font-family: 'Josefin Sans', sans-serif;">
<?php
        include './components/header.html'
    ?>
    <?php include './components/adminMenu.html'; ?>
<div class="text-center contents-center justify-center">
    <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Product Stock</th>
            <th>Edit</th>
        </tr>
        <?php while($item = $query->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td><?php echo htmlspecialchars($item['productID']); ?></td>
            <td><?php echo htmlspecialchars($item['productName']); ?></td>
            <td><?php echo htmlspecialchars($item['productDesc']); ?></td>
            <td><?php echo htmlspecialchars($item['productPrice']); ?></td>
            <td><?php echo htmlspecialchars($item['productImage']); ?></td>
            <td><?php echo htmlspecialchars($item['inStock']); ?></td>
            <td><a href="editProduct.php?id=<?php echo $item['productID']; ?>">Edit</a></td>
        </tr>
        <?php } ?>
    </table>
    <button onclick="window.location.href='addProduct.php';" class="border-l-2 border-r-2 border-t-2 border-b-2 w-56 h-10 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out mt-4">Add New Plant</button>

</div>
</body>
</html>
