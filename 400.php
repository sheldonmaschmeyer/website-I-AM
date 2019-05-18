
<!DOCTYPE html>
<html lang="en">
    <head><?php require 'head.php'?></head>
    <body>
        <?php include 'nav.php'?>
        <script>
          document.getElementById("navHeading").innerHTML = "400";
          $(document).ready(function(){
            $('a[href^="index.php"]').addClass('active');
          });
        </script>
        <div class="container marketing">
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h1> ERROR: 400<br>Bad Request </h1> <br>
                  <h2> Please try again, <br> if the issue persists please <a href="https://maschmeyer.ca/contact.php"> click here </a> </h2>
                </div>
                <div class="col-md-4 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" style="width: 100% height: 500px;" src="lost.jpg" data-holder-rendered="true">
                </div>
            </div>
            <!-- FOOTER -->
            <?php include 'footer.php'?>
        </div>
    </body>
