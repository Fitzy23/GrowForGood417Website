<?php


//get promotions from the database
$query2 = $pdo->query("SELECT * FROM PROMOTION");
$promotions = $query2->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Promotions Carousel</title>
  <style>
    * {box-sizing: border-box;}

    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    .mySlides {
      display: none;
    }

    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: 40px;
      height: 40px;
      margin-top: -20px;
      padding: 10px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 50%;
      background-color: rgba(0, 0, 0, 0.8);
      text-align: center;
      line-height: 20px;
      user-select: none;
    }

    .next {
      right: 0;
    }

    .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 1);
    }

    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    @keyframes fade {
      from {opacity: .4;}
      to {opacity: 1;}
    }
  </style>
</head>
<body>
  <div class="slideshow-container">
    <?php foreach ($promotions as $index => $promo): ?>
      <div class="mySlides fade">
        <div class="numbertext"><?php echo $index + 1; ?> / <?php echo count($promotions); ?></div>
        <img src="../img/<?php echo htmlspecialchars($promo['promoImg']); ?>" style="width:100%" alt="Promotion">
        <div class="text"><?php echo htmlspecialchars($promo['promoCaption']); ?></div>
      </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <?php foreach ($promotions as $index => $promo): ?>
      <span class="dot" onclick="currentSlide(<?php echo $index + 1; ?>)"></span>
    <?php endforeach; ?>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1;}
      if (n < 1) {slideIndex = slides.length;}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
</body>
</html>