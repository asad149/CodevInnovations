<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

if(isset($_POST['submit']))
{

$mailto = "asad.arshad.94849@gmail.com";
    $username=$_POST['name'];
    $user_email = $_POST['email'];
    $mailSub = $_POST['issues'];

    $name = "rayyan";
    $age = "12 years";
    $mailMsg = "Name -> $username"."<br>"."Issue -> $mailSub"."<br>"."Email -> $user_email";
   require 'mail/PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587 or 465
   $mail ->IsHTML(true);
   $mail ->Username = "asad.arshad.94849@gmail.com";
   $mail ->Password = "";
   $mail ->SetFrom("asad.arshad.94849@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())	
   {
       //echo "Mail Not Sent";
   }
   else
   {
      // echo "Mail Sent";
   }



}


?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('include.headfile')

<!--// head -->
<body>

<!-- header -->
@include('include.header')

<!-- //header -->

<!-- inner-banner -->
<section class="inner-banner" id="home">
	<div class="inner-layer">
		<div class="container">
		</div>
	</div>
</section>
<!-- //inner-banner -->

<!-- breadcrumb -->
<div class="breadcrumb-w3pvt bg-light">
	<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item" aria-current="page">Contact</li>
		</ol>
	</nav>
	</div>
</div>
<!-- //breadcrumb -->
	
<!-- contact -->
<section class="contact py-5">
	<div class="container py-sm-5">
		<h2 class="heading mb-sm-5 mb-4">Get in <strong> touch with us </strong></h2>
		<div class="row">
			<div class="col-lg-4 col-md-6 contact-address">
				<h4 class="mb-sm-4 mb-3 w3f_title">Contact Address</h4>
				<ul class="list-w3">
					<li class="d-flex"><span class="fa mt-1 mr-1 fa-map-marker"></span>2130 Fulton Street, San Diego, <br>CA 94117-1080 USA</li>
					<li class="my-3"><span class="fa mr-1 fa-phone"></span>1-600-1234-567</li>
					<li class="my-3"><span class="fa mr-1 fa-phone"></span>1-600-1234-567</li>
					<li class=""><span class="fa mr-1 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
				<h4 class="mt-md-5 mt-4 mb-3 w3f_title">Follow Us</h4>
				<p>Sed mattis hendrerit dolor sed rhoncus. Praesent arcu quam, sodales ac varius.</p>
				<ul class="list-social">
					<li><a href="#" class="facebook"><span class="fa mr-1 fa-facebook"></span></a></li>
					<li class="my-3"><a href="#" class="twitter"><span class="fa mr-1 fa-twitter"></span></a></li>
					<li class="my-3"><a href="#" class="google"><span class="fa mr-1 fa-google-plus"></span></a></li>
					<li class=""><a href="#" class="linkedin"><span class="fa mr-1 fa-linkedin"></span></a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 contact-form mt-md-0 mt-4">
				<h4 class="mb-sm-4 mb-3 w3f_title">Contact Form</h4>
				<form name="contactform" id="contactform" method="post" action="#" onsubmit="return(validate());" novalidate="novalidate">
						<div class="form-group">
						  <label>Name</label>
						  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
						</div>
						<div class="form-group">
						  <label>Email</label>
						  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
						</div>
						<div class="form-group">
						  <label>How can we help?</label>
						  <textarea name="issues" class="form-control" id="iq" placeholder="Enter Your Message Here"></textarea>
						</div>				
						
						<input type="submit" value="Submit" class="btn btn-default" name="submit">
					</form>
			</div>
			<div class="col-lg-4 mt-lg-0 mt-5 contact-map">
				<h4 class="mb-4 w3f_title">Contact Map</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<!-- footer -->
@include('include.footer')

<!-- // footer -->
</body>
</html>