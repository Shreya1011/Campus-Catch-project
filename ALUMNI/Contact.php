<?php

include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Bnasthali Vidyapith</title>
    <link rel="shortcut icon" href="image/banasthali_logo.jpg" type="jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="css/contact.css">
		<link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-starter.css">
	<style>
		body{
			background-color: #f5f5dc;
		}
	</style>
</head>
<body>
    
       
	<div class="container">
									
        <div class="contact-form">
		      <div class="form">
			      <div class="title">
				      <p>Contact Us</p>
			     </div>
			
			<!-- Admission from -->
			<div class="cont_form">
				<form method="post" onsubmit="sendmail(); reset(); return false;">
					<div class="input-box">
						<label for="yourname">Your Name</label>
						<div class="input_item">
							<i class="fa fa-user" id="icon"></i>
							<input type="text" name="your name" class="input" id="yourname" placeholder="Enter the name" required>
						</div>
					</div>
					<div class="input-box">
						<label for="emailaddress">Email Address</label>
						<div class="input_item">
							<i class="fa fa-envelope" id="icon"></i>
							<input type="email" name="email address" class="input" id="emailaddress" placeholder="Enter the Email ID" required>
						</div>
					</div>

					<div class="input-box">
						<label for="phone">Phone</label>
						<div class="input_item">
							<i class="fa fa-commenting" id="icon"></i>
                     <textarea name="phone" class="message" id="phone" placeholder="Write your message..." size="500"></textarea>
						</div>
					</div>
	
					<input type="submit" class="button" value="Send Message">
					<div ></div>
					<input type="reset" class="clear_ad" value="Clear">

				</form>
			  </div>
        </div>
        </div>
			
   

		
</body>


<script src=" https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendmail(){
		Email.send({}).then(
	message => alert("Your Message Is Successful - Campus Catch")
);
		}
    </script>
<script>

</script>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>

<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

		$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<script src="assets/js/bootstrap.min.js"></script>
</html>