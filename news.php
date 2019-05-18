<!DOCTYPE html>
<html lang="en">
    <head><?php require 'head.php'?></head>
    <style>
      th, td {
      padding: 15px;
      }
    </style>
    <body>
        <?php include 'nav.php'?>
        <script>
          document.getElementById("navHeading").innerHTML = "News";
          $(document).ready(function(){
            $('a[href^="news.php"]').addClass('active');
          });
        </script>
        <!-- marketing messaging and featurettes -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
          <hr class="featurette-divider">
          <h1>News and Information:</h1>
          <table>
            <tr>
               <td> July 25<sup>th</sup>, 2018 </td>
               <td> Website redesign. For constructive comments or feedback <a href="http://maschmeyer.ca/contact.php"> click here </a></td>
            </tr>
          </table>
            <!-- FOOTER -->
            <?php include 'footer.php'?>
        </div>
    </body>
