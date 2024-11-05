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
  <div class="flex justify-center mt-8">
    <div class="grid grid-cols-4">
      <button class="border-l-2 border-r-2 border-t-2 border-b-2 w-56 h-10 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Promotions</button>
      <button class="border-t-2 border-r-2 border-b-2 w-56 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Products</button>
      <button class="border-t-2 border-b-2 w-56 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Plant Care</button>
      <button class="border-l-2 border-r-2 border-t-2 border-b-2 w-56 border-black hover:bg-darkish-green text-black font-bold transition duration-200 ease-in-out">Plog</button>
    </div>
</div>
</body>
</html>