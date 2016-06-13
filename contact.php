<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['nume']))
{
	$nume=$_POST['nume'];
	$email=$_POST['email'];
	$mesaj=$_POST['mesaj'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>We &hearts; Cartography</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/my_style.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/college.css"> 
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body>
<div class="wrap-body">
	<header class="zerogrid">
		<div class="content-box backgr">
			<h1 class = "title_header" href="#">Cartografie si GIS</h1>
			<h2 class = "title_header_two" >Cursuri postuniversitare</h3>
		</div>
		<div id='cssmenu' class="align-center">
			<ul>
			   <li><a href='index.html'><span>Home</span></a></li>
			   <li class='has-sub'><a href='about.html'><span>Informatii</span></a>
				  <ul class="submenu_opacity">
					 <li><a href='formular_inscriere.html'><span>Formular de Inscriere</span></a></li>
					 <li><a href='#'><span>Activitati</span></a></li>
				  </ul>
			   </li>
			   <li class='has-sub'><a href='menu.html'><span>Pagina Studenti</span></a>
			   		<ul class="submenu_opacity">
					 <li><a href='#'><span>Orar</span></a></li>
					 <li><a href='#'><span>Note</span></a></li>
					 <li><a href='#'><span>Taxe</span></a></li>
				  </ul>
			   </li>

			  <li><a href='event.html'><span>Login</span></a></li>
			   <li class='last active'><a href='contact.html'><span>Contact</span></a></li>
			</ul>
		</div>
	</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content zerogrid ">
						<div class='embed-container maps'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.981411764103!2d23.57797511584455!3d46.765262853707455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xde67aaab3485354e!2sFaculty+of+Geography!5e0!3m2!1sen!2sro!4v1465729344669" width="100%" height="370px" frameborder="0" style="border: 0"></iframe>	
						</div>
						<article class="background-gray">
							<div class="prezentare">
								<h1>Intrebari? Contacteaza-ne acum!</h1>
							</div>
							<div class="art-content">
								<div class="row">
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="contact.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="nume" id="nume" placeholder="Nume" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<input type="text" name="titlu" id="titlu" placeholder="Titlu" required="required" />
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="mesaj" id="mesaj" class="form-control" rows="4" cols="25" required="required"
													placeholder="Mesaj"></textarea>
												</div>
											</label>
											<hr class="line">
											<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
										</form>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<hr class="line">
				<!--////////////////////////////////////Footer-->
		<footer>
			<div class="wrap-footer">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<p>Proiect Integrator II modified by <a href="http://www.bogdancadar.info" target="_blank" rel="nofollow">Bogdan Cadar</a></p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<ul class="social_icon">
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	<script src="js/lightbox-plus-jquery.min.js"></script>

	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
	
</div>
</body>
</html>