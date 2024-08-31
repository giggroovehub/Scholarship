<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style/style.css">
<style>
  body {
  font-family: Arial, sans-serif;
}

.carousel-container {
  position: relative;
  width: 1710px; 
  margin: auto; 
  overflow: hidden; 
}

.slideshow {
  position: relative;
}

.mySlides {
  display: none; 
}

.w3-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: black;
  color: white;
  border: none;
  padding: 16px;
  cursor: pointer;
  z-index: 100;
}

.w3-display-left {
  left: 0;
}

.w3-display-right {
  right: 0;
}

</style>
</head>
<body>

  <?php
  include("nav.php");
  ?>

<div class="carousel-container">
    <div class="slideshow">
      <img class="mySlides" src="./images/Blue Yellow and White Modern School Admission Banner.png" height="800px" width="1710px">
      <img class="mySlides" src="./images/GMC.png" height="800px" width="1710px">
      <img class="mySlides" src="./images/students.jpg" height=800px" width="1710px">
      <!-- Add more images as needed -->
    </div>
    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  </div>

  <?php 
  include("footer.php");
  ?>





</body>
<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("mySlides");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 6000); // Change image every 5 seconds
}

function plusDivs(n) {
  showSlides(slideIndex += n);
}

</script>
</html>