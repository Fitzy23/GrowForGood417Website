<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Test</title>
  <link href="output.css" rel="stylesheet"> <!-- Link to your compiled Tailwind CSS file -->
</head>
<body class="bg-gray-100 p-10">

  <!-- Card Component -->
  <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/300x200" alt="Random Image">
    
    <div class="p-6">
      <h2 class="text-xl font-semibold text-gray-800">Tailwind CSS Test</h2>
      <p class="text-gray-600 mt-2">
        This is a test card to check if Tailwind CSS styles are working as expected.
      </p>
      <button class="mt-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">
        Test Button
      </button>
    </div>
  </div>

  <!-- Responsive Test -->
  <div class="mt-10 text-center">
    <h2 class="text-lg md:text-xl lg:text-2xl text-gray-700">
      Resize the window to test responsive styles.
    </h2>
  </div>

</body>
</html>