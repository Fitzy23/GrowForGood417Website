<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Contact Us | GrowForGood417</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    .flex-container {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .flex-grow {
      flex: 1;
    }
  </style>
</head>
<body class="bg-light-green">
  <div class="flex-container">
    <!-- Header -->
    <?php include './components/header.html'; ?>

    <!-- Main Content -->
    <main class="flex-grow p-4">
      <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
      <p class="mb-4">Interested in contacting us? We're excited to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>
      <form action="submit_contact.php" method="POST" class="space-y-4">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
          <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
        </div>
        <div>
          <button type="submit" class="inline-flex justify-center mt-4 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-darkish-green hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Submit
          </button>
        </div>
      </form>
    </main>

    <!-- Footer -->
    <?php include './components/footer.html'; ?>
  </div>
</body>
</html>