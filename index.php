<!DOCTYPE html>
<html lang="en">
    <head><?php require 'head.php'?></head>
    <body>
        <?php include 'nav.php'?>
        <script>
          document.getElementById("navHeading").innerHTML = "Home";
          $(document).ready(function(){
            $('a[href^="index.php"]').addClass('active');
          });
        </script>
        <link rel="stylesheet" href="Pres/w3.css">
        <!-- marketing messaging and featurettes -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
          <style>
          	.mySlides {display:none}
          </style>
          </head>
          <body>

          <br>

          <div class="w3-content">
            <a href="ProductLifter.php"><img class="mySlides" src="Pres/slideshow/ProductLifter.JPG" style="width:100%"></a>
            <a href="VideoStand.php"><img class="mySlides" src="Pres/slideshow/VideoStand.JPG" style="width:100%"></a>
            <a href="Demos.php"><img class="mySlides" src="Pres/slideshow/Demos.gif" style="width:100%"></a>
          </div>

          <div class="w3-center">
            <button class="w3-button demo" onclick="currentDiv(1)">ProductLifter</button>
            <button class="w3-button demo" onclick="currentDiv(2)">VIDEO AD STAND</button>
            <button class="w3-button demo" onclick="currentDiv(3)">DEMOS</button>
          </div>

          <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function currentDiv(n) {
            showDivs(slideIndex = n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" w3-blue", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-blue";
          }

          setTimeout(automatic, 5000);

          function automatic() {
              setTimeout(automatic, 5000);
              plusDivs(1);
          }

          </script>
            <!-- FOOTER -->
            <?php include 'footer.php'?>
        </div>
    </body>
