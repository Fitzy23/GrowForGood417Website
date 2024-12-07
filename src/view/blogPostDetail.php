<?php
    include '../controller/db_connection.php'; 
    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];
        $query = $pdo->query("SELECT * FROM BLOG WHERE blogID = $id");
        $post = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <!-- Header -->
    <?php include './components/header.html'; ?>

    <!-- Main Content -->
    <div class="container mx-auto px-8">
        <div class="bg-white border border-gray-200 shadow-lg rounded-lg p-6 mt-9 mb-3">
            <div class="text-center text-6xl mb-6">
                <h1><?php echo htmlspecialchars($post['blogTitle']); ?></h1>
            </div>
            <div class="text-lg leading-relaxed">
                <?php echo$post['blogContent']; ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include './components/footer.html'; ?>
</body>
</html>