<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/APIKEYHERE/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <title>Admin Dashboard | GrowForGood417</title>
</head>
<body style="font-family: 'Josefin Sans', sans-serif;">
<?php
    include './components/header.html'
  ?>
  <?php include './components/adminMenu.html'; ?>
  <div class="container mx-auto p-6">
  <?php if (file_exists('../controller/blogPost.php')) {
    echo "Yeah its there";
  }
  else {
    echo "Nope";
  }
  ?>
  <form action="../controller/blogPost.php" method="POST" enctype="multipart/form-data">
      <!-- Title Input -->
      <div class="mb-4">
        <label for="blogTitle" class="block text-lg font-medium">Blog Title:</label>
        <input type="text" id="blogTitle" name="blogTitle" class="w-full p-3 border border-gray-300 rounded-lg" required>
      </div>

      <!-- Content Input (TinyMCE) -->
      <div class="mb-4">
        <label for="blogContent" class="block text-lg font-medium">Content:</label>
        <textarea id="blogContent" name="blogContent" style="pointer-events: auto;"></textarea>
      </div>
    

      <!-- Submit Button -->
      <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Submit</button>
    </form>
</div>
<script>
  // Initialize TinyMCE editor on the textarea with ID 'blogContent'
  tinymce.init({
    selector: 'textarea#blogContent',
    plugins: 'image link media lists',  // Add 'lists' plugin for list functionality
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | formatselect', 
    menubar: false,
    automatic_uploads: true,
    height: 400
  });

  // Ensure TinyMCE content is saved to the textarea before form submission
  document.querySelector('form').addEventListener('submit', function (e) {
    tinymce.triggerSave(); // Ensure TinyMCE content is saved to the textarea
    const blogContent = document.getElementById('blogContent');
    if (!blogContent.value.trim()) {
      e.preventDefault(); // Prevent form submission if content is empty
      alert('Please enter content for the blog post.');
      blogContent.focus(); // Focus the TinyMCE editor
    }
  });
</script>
</body>
</html>