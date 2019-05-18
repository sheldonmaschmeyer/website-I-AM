<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require 'head.php'?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <style>#send {
    width: 113px;
    height: 35px;
}</style>
    <body>
        <?php include 'nav.php'?>
        <script>
          document.getElementById("navHeading").innerHTML = "Contact Us";
          $(document).ready(function(){
            $('a[href^="ContactUs.php"]').addClass('active');
          });
        </script>
        <div class="container marketing">
            <hr class="featurette-divider">
            <center>
                <br>
                <table width="auto" border="0">
                    <tr>
                        <td> <?php
    $action=$_REQUEST['action'];
    if ($action=="")    /* display the contact form */
        {
        ?><font face="Verdana, Geneva, sans-serif"> <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="action" value="submit">
                                        Your name:
                                        <br>
                                        <input name="name" type="text" value="" size="30"/>
                                        <br>
                                        Your email:
                                        <br>
                                        <input name="email" type="text" value="" size="30"/>
                                        <br>
                                        Company name:
                                        <br>
                                        <input name="subject" type="text" value="" size="30"/>
                                        <br>
                                        Your message:
                                        <br>
                                        <textarea name="message" rows="7" cols="30"></textarea>
                                        <br>
                                        <div class="g-recaptcha" data-sitekey="6LfirSMTAAAAAED1Vf9cjMQg0JjkQK2VktGC-W5g"></div>
                                        <input type="submit" id="send" value="" style="background:url(send.jpg)"/>
                                        <br>
                                        <font face="Verdana, Geneva, sans-serif" size="2"> For website issues, click <a href="http://maschmeyer.ca/contact.php"> here </a> to contact.</font>
                                        <br>
                                    </form> </font> <?php
        }
    else                /* send the submitted data */
        {
        $name=$_POST['name'];
        $email=$_POST['email'];
		$subject=$_POST['subject'];
        $message=$_POST['message'];

        if (($name=="")||($email=="")||($message=="")||($subject==""))
            {
           echo "<h3><center>All fields are required <br> <a href=\"\">Please fill in the form again</a>.</center></h3>";
            }
        else{
			$userIP = $_SERVER["REMOTE_ADDR"];
			$recaptchaResponse = $_POST['g-recaptcha-response'];
			$secretKey = "6LfirSMTAAAAAJAaz8ZeiRhPbrDdSIisva97sp53";
			$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");

			if(!strstr($request, "true")){
				echo "<h3><center>Failed ROBOT test <br> <a href=\"\">Please try again</a></center></h3>";
			}
			else{
				$from="From: $name<$email>\r\nReturn-path: $email";
				$subject="Company Name: $subject";
				mail("brucem@i-aminc.com", $subject, $message, $from);
				echo "<h3><center>Message sent <br> We will contact you shortly using the information provided.<br><a href=http://i-aminc.com>Home</a></center></h3>";
			}
		}
		}
    ?> </td>
                    </tr>
                </table>
            </center>
            <?php include 'footer.php'?>
        </div>
    </body>
</html>
