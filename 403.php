
<!DOCTYPE html>
<html lang="en">
    <head><?php require 'head.php'?></head>
    <body>
        <?php include 'nav.php'?>
        <script>
          document.getElementById("navHeading").innerHTML = "403";
          $(document).ready(function(){
            $('a[href^="index.php"]').addClass('active');
          });
        </script>
        <div class="container marketing">
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h1> ERROR: 403<br>Forbidden</h1> <br>
                  <h2> If you believe this is incorrect <br>
                  please <a href="https://maschmeyer.ca/contact.php"> click here </a> </h2>
                </div>
                <div class="col-md-5 order-md-1" align="center">
                    <img class="featurette-image img-fluid mx-auto" style="width: 100% height: 500px;" src="forbid.png" data-holder-rendered="true">
                </div>
            </div>
            <!-- FOOTER -->
            <?php include 'footer.php'?>
        </div>
    </body>
