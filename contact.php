<?php


// Check if form was submitted:
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

		// Build POST request:
		$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
		$recaptcha_secret = '6Le-QPYUAAAAAALUQMTKFYnbY09hG5qv8Zn5YpIa';
		$recaptcha_response = $_POST['recaptcha_response'];
	
		// Make and decode POST request:
		$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
		$recaptcha = json_decode($recaptcha);
	
		// Take action based on the score returned:
		if ($recaptcha->score >= 0.5) {
		  $user_name	= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
		  $user_email	= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
		  $content		= filter_var($_POST["message"], FILTER_SANITIZE_STRING);
		  
			if(empty($user_name)) {
			$empty[] = "<b>Name</b>";		
			}
			if(empty($user_email)) {
			$empty[] = "<b>Email</b>";
			}
			if(empty($content)) {
			$empty[] = "<b>Message</b>";
			}
			
			if(!empty($empty)) {
			$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
				die($output);
			}
			
			if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
				$output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
			die($output);
			}
			
			$toEmail = "mail@eonadela.com";
			$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
			$mailBody = "User Name: " . $user_name . "\n";
			$mailBody .= "User Email: " . $user_email . "\n";
			$mailBody .= "Content: " . $content . "\n";
		
			if (mail($toEmail, "Contact Mail", $mailBody, $mailHeaders)) {
				$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for contacting us. We will get back to you as soon as possible.'));
				//die($output);
			} else {
				$output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.$toEmail));
				//die($output);
			}
		} 
		
		else {
			// Not verified - show form error
		}
	
	}
	 ?>


<!-- <?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
	$location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $location);
	exit;
  }
  
  
  ?> -->
  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <title>Thank You | Elymar Nadela</title>
    <meta name="keywords" content="thank you page">
    <meta name="description" content="Thank you for contacting EON website.">
    <script src="js/modernizr.js" type="text/javascript"></script>
</head>

<body class="wrapper">
    <div id="loader-wrapper">
        <div id="loader">
            <div class="circ-one"></div>
            <div class="circ-two"></div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <header>
        <nav class="pt-4 px-5 navbar fixed-top navbar-expand-lg navbar-dark">
            <a title="EON" class="navbar-brand" href="#"><img class="header__logo" src="images/logo_black.png" alt="EON logo" title="EON logo" /><span class="d-block header__title">EON</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <section class="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <section class=" home__intro cd-intro">
                    <h1 class="home__title pb-3">EON</h1>
                    <h4 class="home__headline cd-headline clip is-full-width">
                        <span>Thank you for sending your message to EON website. We will get back to your concern as soon as possible.</span>
					</h4>
					<a class="btn btn-lg btn-primary contact-form__btn" href="/"><i class="material-icons mdi mdi-message-outline"></i>Back to Home Page</a>
                </section>
            </div>
        </div>
	</section>
	<script src="js/jquery.js" type="text/javascript"></script>    
    <script>
      $(document).ready(function() {
      setTimeout(function() {
          $('.wrapper').addClass('loaded');
      }, 3000);
      });
    </script>
</body>

</html>