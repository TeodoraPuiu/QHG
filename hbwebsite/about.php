<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="logo.png">
      <title>QUEEN'S HEART GUESTHOUSE - ABOUT</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
      <?php require('inc/links.php'); ?>

</head>
<body class="bg-light">
  
<?php require('inc/header.php'); ?>


<div class="my-5 px-4">
    <h2 class="fw-bold text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
  Queen's heart guesthouse is a property with a view of Bran Castle
    </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3"></h3>
        <p>
        The idea of ​​the name-This property was built with the aim that our guests feel as close as possible to the history of Bran and
         to be closer to the place for which Marie gave her whole heart.
         Marie was the last queen of Romania as the wife of King Fernand I.<br>
         Her charm and innate elegance made the Queen popular World Wide. Also, through her celebrity, Queen Marie puts Romania on the spot.

A journalist said to her once  'I think you can get the title of the most beautiful woman in the world' and she replied 'That would be exaggerated. But the most beautiful queen, that it’s ok'.

The Queen also becomes the image of some cosmetic campaigns, and in 1924 appears on the cover of Time magazine in America.

The visit to the United States from 18 October to 24 November 1926, in the company of her 
children, Ileana and Nicolae, is the height of her popularity and the apogee of the popularity of a representative of the Romanian State 
in the world. The Queen’s visit to the United States of America aroused a wave of attention from the media. Everybody wanted to see the queen who was endowed with the bravery of a man and with the wisdom of a true artist.
        </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img  src="images/QHGphoto/fereastra.jpeg" width="450" height="400">
    </div>    
  </div>
</div>

<div class="container mt-5">
  <div class="row">
     <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <h4>2+ rooms</h4>
            </div>
     </div>
     <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <h4>2+ rooms</h4>
            </div>
     </div>
     <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <h4>2+ customers</h4>
            </div>
     </div>
     <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <h4>2+ staffs</h4>
            </div>
     </div>
   </div>
</div>


<h3 class="my-5 fw-bold h-font text-center">Alte locuri de vizitat in apropiere</h3>

<div class="container px-4">
  <div class="swiper mySwiper">
     <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="images/locations/brasov.jpg" class="w-60">
                <h5 class="mt-2">PIATA SFATULUI BRASOV - 30 km from the property</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="images/locations/Romania_Rasnov.jpg" class="w-50">
                <h5 class="mt-2">CETATEA RASNOV - 14 km from the property</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="images/locations/Dino-Parc-Rasnov-intre-dinozauri (1).jpg" class="w-50">
                <h5 class="mt-2">DINO PARC - 14 km from the property</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="images/locations/vilaBran.jpg" class="w-50">
                <h5 class="mt-2">VILA BRAN-4 km from property</h5>
            </div>
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/locations/brasov.jpg" class="w-50">
                    <h5 class="mt-2">AMFITEATRU</h5>
            </div>
     </div>
      <div class="swiper-pagination"></div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>
  
</body>
</html>