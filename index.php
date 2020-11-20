
<?php

if (isset($_POST['submit'])) {
	$to = "m.pariksit@gmail.com";
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['message'];
	$subject = "Query Regarding Pariksit Reseller";
	$sendMessage = "You have received a query as \n".$msg."\nFrom ".$name."\nWhose contact number is ".$phone." and Email is ".$mail.".";
	$header = "From: resellerquery@pariksit.com";
	if (mail($to, $subject, $sendMessage,$header)) {
		echo "<script>alert('Mail Sent Success');</script>";
		
	}else{
		echo "<script>alert('Mail Not Sent !!');</script>";

	}
}

?>

<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pariksit/Reseller</title>


 <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
<!-- Google Forms -->
<link rel="stylesheet" type="text/css" href="http://googleformrestyler.apixml.net/">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="CSS/mystyle.css">
<link rel="stylesheet" href="JS/javaanim.js">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<body>

	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!--Slides-->
	    <div class="carousel-inner" role="listbox">
	    	<div class="carousel-item active">
				<img class="d-block w-100 img-fluid" src="images/Frame 2.svg" alt="hero-boy">

							<svg>
								<defs>
									<clipPath id="clipPath">
										<circle class="one" cx="500" cy="20" r="300" />
									</clipPath>

									<clipPath id="clipPath1">
										<circle class="two" cx="400" cy="20" r="250" />
									</clipPath>
									
									<clipPath id="clipPath2">
										<circle class="three" cx="330" cy="20" r="250" />
									</clipPath>

									<clipPath id="clipPath3">
										<circle class="four" cx="300" cy="10" r="180" />
									</clipPath>

									<clipPath id="clipPath4">
										<circle class="five" cx="250" cy="10" r="150" />
									</clipPath>

									<clipPath id="clipPath5">
										<circle class="six" cx="200" cy="0" r="150" />
									</clipPath>

									<clipPath id="clipPath6">
										<circle class="seven" cx="150" cy="0" r="120" />
									</clipPath>
								</defs>
							</svg>
							
							<div class="menu-toggle" type="button" aria-label="toggle menu" id="hamburger">
								<i class="fas fa-bars"></i>
							</div>
							<div class="wrapper">
								<nav class="hamnav">
									<div>
										<ul>
											<li class="first-link">
												<a class="rounded waves-effect" href="https://pariksit.com/"> Home </a>
											</li>

											<li class="second-link">
												<a class="rounded waves-effect" href="#price"> Pricing </a> 
											</li>
											
											<li class="third-link">
												<a class="rounded waves-effect" href="#about"> About us </a>
											</li>
											
											<li class="fourth-link">
												<a class="rounded waves-effect" href="#reach"> Contact us </a>
											</li>
										</ul>
									</div>
								</nav>
							</div>

				<!-- navbar -->
				<div class="text-block">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2"></div>
						<div class="col-lg-2 col-md-2 col-sm-2"></div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<nav class="mb-1 navbar navbar-expand-lg">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="navbar-nav ml-auto">
									    <li class="nav-item">
											<a class="nav-link" href="https://pariksit.com/"> Home </a>
										</li>
										<span> | </span>
										<li class="nav-item">
											<a class="nav-link" href="#price"> Pricing </a> 
										</li>
										<span> | </span>
										<li class="nav-item">
											<a class="nav-link" href="#about"> About us </a>
										</li>
										<span> | </span>
										<li class="nav-item">
											<a class="nav-link" href="#reach"> Contact us </a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<!-- /navbar -->		
			</div>
	    </div>
	</div> 

	<section class="section-1" id="about" style="padding-top: 50px; margin-bottom: 15vh; height: auto; padding-bottom: 25vh;">
		<div class="mainbox">
			<div class="container-fliud" style="margin: 0% 14%;">
				<div class="row" style="width: 100%; align-items: center; justify-content: center; text-align: center;">
					<center><h1 id="punchline" style="font-size: 3.2vw; text-align: center;">Who are we ?</h1></center>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<img id="p-team" class="d-block w-100 img-fluid" style="vertical-align: middle; height: 100%; display: inline-block;" src="images/p-team.svg" alt="pariksit-team">
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12" style="font-family: 'Nunito', sans-serif; height: inherit;">
						<p id="para">We may be an agency but we function like a startup , we’re flexible , <br>
							agile and committed to your success . Think of us as an extension of<br> your team ,
							 using our experience to create results that every one is insanely proud of.<br><br>
						Basically Pariksit Incorporations is a Rourkela based organisation<br> managed by a small team of dedicated Alumni's of NIT Rourkela.<br><br>
						Our motto is, "If you have more than what you need, Simply share it<br> with  someone who needs it the most"</p>	 
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section-2" style="padding-top: 10%; margin-bottom: 5px; height: auto;">
		<div class="overlay"></div>
		<div class="features-box" id="featre">
			<div class="container-fluid content-row" style="max-width: 80vw;">
				<div class="row" style="width: 100%; align-items: center; justify-content: center; text-align: center;">
					<center><h1 id="ft-head" style="font-size: 3.2vw; text-align: center;">What features do we provide ?</h1></center>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/secure-lgn.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Secure distribution</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Share timed videos, pdf, other 
									docs / study materials securely 
									with your students.</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 fst">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/online_classes.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Online classes</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Two way interaction system,
									do classes as if the students are
									 sitting in the class physically
									despite being online.</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 bs">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/doubt_clarify.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Doubt clarification</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Students can chat with the 
									teachers , ask doubts ,
									get clarifications via 
									text/audio/video.</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 bs">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/unlim_session.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Unlimited sessions</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Ever thought of giving students 
									a headache of homework on
									 daily basis.....try that....
									you will enjoy.</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
				</div>

				<div class="row" style="padding-bottom: 30%;">
					<div class="col-lg-3 col-md-6 col-sm-12" style="padding-top: 13%;">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/rem_exams.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Remote exams</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">We got you covered even if 
									you are planning to conduct the 
									exams with student sitting 
									in any corner of the world</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12" style="padding-top: 13%;">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/own_app.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Build your own app</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Want to have your own 
									app with all the features ?
									You can have that just in a day.
									Contact us to know more</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12" style="padding-top: 13%;">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/parental_control.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Parental control</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Wanna use the device only 
									for educational purpose, with no 
									other distractions factors , 
									this parental control is for you.</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12" style="padding-top: 13%;">
						<!-- Card -->
						<div class="card h-100">

							<!-- Card image -->
							<img class="card-img-top" src="images/ques_bank.svg" alt="Card image cap">
  
							<!-- Card content -->
							<div class="card-body">
  
	  							<!-- Title -->
	  							<h4 class="card-title"><b>Question bank</b></h4>
	  							<!-- Text -->
	  							<p class="card-text">Wide variety of questions ranging 
									from easy to mediocore to tough , 
									the platform includes more than
									 3.5 lac questions and is increasing.</p>
  
							</div>
  						</div>
  						<!-- Card -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-3" style="padding-top: 10%; padding-bottom: 10%; margin-bottom: 5px; height: auto;">
		<div class="overlay"></div>
		<div class="container-fluid" style="max-width: 70vw;">
			<div class="row">
				<h1 id="s3-head">Here we have something for you</h1>
			</div>

			<div class="row" style="padding-top: 10vh;">
				<div class="col-lg-5 col-md-6 col-sm-12 vd">
					<iframe class="v-frame1" src="https://www.youtube.com/embed/evGzV8f8pPk" frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
					allowfullscreen></iframe>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12">
					<blockquote class="v-text" id="first">A full demonstration on how to use the Pariksit central app. Here you can experience the the two-way interaction with all our best faculties 
						through our live online classes , go through all exclusive study materials , and appear better featured and flaw-less online tests. So, hurry up!! , have 
						a look at our app and grab a complete study package now.</blockquote>
				</div>
			</div>

			<div class="row" style="padding-top: 10vh;">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<blockquote class="v-text" id="second">Here you can learn about the procedure for uploading examinations to the server. The pariksit Incorporations provides you plenty of 
						exclusive question banks of each and every subjects and a complete freedom of building your own customised question papers and conducting frequent examinations. 
					In case you face any querries with the procedure or anything else , please dont hesitate to contact with us... , our team will be right there with you to look after
				 your problems.</blockquote>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12 vd">
					<iframe class="v-frame2" src="https://www.youtube.com/embed/TDOJ92uNaO4" frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
					allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</section>

	<section class="section-4" id="price" style="padding-top: 10%; padding-bottom: 10%; margin-bottom: 5px; height: auto;">
		<div class="overlay"></div>
		<div class="container pr-sec">
			<h1 id="s4-head">Our Pricing</h1>
			<p id="f-line">One size doesn't fit all, so we have different options to fit your needs...</p>

			<div class="toggle-container">
				<span>Online</span>
				<span>
					<input type="checkbox" name="toggle" id="toggle" unchecked />
					<label for="toggle">
						<div class="ball"></div>
					</label>
				</span>
				<span>Offline</span>
			</div>

			<div id="flexy" class="flex">
				<div class="price-box" id="low-price">
					<h4>Basic</h4>
					<p>
						<span class="monthly">
							&#x20b9;49.99
						</span>
						<span class="annually">
							&#x20b9;49.99
						</span>
					</p>
					<ul class="monthly">
						<li>On per question paper basis</li>
						<li>Exclusive question banks</li>
						<li>Conduct exams with ease</li>
					</ul>

					<ul class="annually">
						<li>On per student, per month basis</li>
						<li>Maximum 12 hours exam</li>
						<li>Enjoy appearing our exams</li>
					</ul>
					<a href="#reach"><button type="button" class="l-more rounded waves-effect">Learn More</button></a>
				</div>

				<div id="special" class="price-box price-box-premium" style="z-index: 1;">
					<h4>Professional</h4>
					<p>
						<span class="monthly">
							&#x20b9;499.99
						</span>
						<span class="annually">
							&#x20b9;499.99
						</span>
					</p>
					<ul class="monthly">
						<li>On monthly basis</li>
						<li>Unlimited question papers</li>
						<li>Conduct exams with ease</li>
					</ul>

					<ul class="annually">
						<li>On per student, per month basis</li>
						<li>Unlimited exams</li>
						<li>Enjoy appearing our exams</li>
					</ul>
					<a href="#reach"><button type="button" class="l-more rounded waves-effect">Learn More</button></a>
				</div>

				<div class="price-box" id="high-price">
					<h4>Master</h4>
					<p>
						<span class="monthly">
							&#x20b9;1999.99
						</span>
						<span class="annually">
							&#x20b9;2999.99
						</span>
					</p>
					<ul class="monthly">
					    <li>On yearly basis</li>
						<li>Unlimited question papers</li>
						<li>Conduct exams with ease</li>
					</ul>

					<ul class="annually">
						<li>On per student, per year basis</li>
						<li>Free parental control services</li>
						<li>Whitelabelled app(min 100 registration)</li>
					</ul>
					<a href="#reach"><button type="button" class="l-more rounded waves-effect">Learn More</button></a>
				</div>
			</div>
		</div>

	</section> 

	<div class="contact-panel parallax" id="reach">
		<!--Section: Contact v.2-->
		<section class="mb-4" style="padding-top: 150px">
		  <div class="overlays">  
			<!--Section heading-->
			<h1 class="h1-responsive c-head font-weight-bold text-center my-4 text-white" style="font-size: 3.2vw;">Let's talk!</h1>
			<!--Section description-->
			<p class="text-center c-line w-responsive mx-auto mb-5 text-white" style="font-weight: 400; padding-bottom: 8vh; font-size: 1.2vw;"><b>Email us to purchase the above subscription plans.</b></p>
		  </div> 
		  <div class="container">
			<div class="row">
		
				<!--Grid column-->
				<div class="col-lg-2 col-md-2 col-sm-3"></div>
				<div class="col-lg-8 col-md-8 col-sm-6 text-center">
					<form id="contact-form" name="contact-form" action="index.php" method="POST">
					  
						<!--Grid row-->
						<div class="row" style="padding-bottom: 5vh;">
						   
							<!--Grid column-->
							<div class="col-md-6" id="myname">
								<input type="text" placeholder="Your name" autocomplete="off" name="name" style="color: white" id="name" required class="form-control">
							</div>
							<!--Grid column-->
		
							<!--Grid column-->
							<div class="col-md-6">
								<input type="email" placeholder="Your email" autocomplete="off" required name="email" style="color: white" id="email" required class="form-control">
							</div>
							<!--Grid column-->
		
						</div>
						<!--Grid row-->
		
						<!--Grid row-->
						<div class="row" style="padding-bottom: 5vh;">
							<div class="col-md-12">
								<input type="text" minlength="10" maxlength="10" placeholder="Phone number" autocomplete="off" required name="phone"  style="color: white" id="phone" class="form-control">
							</div>
						</div>
						<!--Grid row-->
		
						<!--Grid row-->
						<div class="row" style="padding-bottom: 7vh;">
		
							<!--Grid column-->
							<div class="col-md-12">
								<textarea type="text" autocomplete="off" required placeholder="Type your querry" name="message" style="color: white" id="message" rows="3" class="form-control md-textarea"></textarea>
							</div>
						</div>
						<!--Grid row-->
						<div class="row" style="padding-bottom: 15vh;">
							<div class="col-md-12">
									<!-- <input type="submit" id="submit" value="Send" style="display: none;"> -->
									<button type="submit" name="submit" class="submit text-center waves-effect ml-auto" style="margin-top: 40px; cursor: pointer; font-weight: 700;">Send 
									<i class="fas fa-arrow-right" style="display: inline-flex; left: 100%; float: right;"></i></button>
							</div>
						</div>
					</form>
		
				</div>
				<!--Grid column-->
		
				<!--Grid column-->
				<div class="col-lg-2 col-md-2 col-sm-3"></div>
				<!--Grid column-->
					  
			</div>
		  </div>  
		</section>
		<!--Section: Contact v.2-->
		</div>

		<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="margin-top: -30px;">

	<div style="background-color: #6351ce;">
	  <div class="container">
  
		<!-- Grid row-->
		<div class="row py-4 d-flex align-items-center">
  
		  <!-- Grid column -->
		  <div class="col-md-6 col-lg-5 main-link text-center text-md-left mb-4 mb-md-0">
			<a href="#" style="font-size: 25px; transition: 1s ease"><span><b>PARIKSIT-RESELLER</b>
			</span></a>
		  </div>
		  <!-- Grid column -->
  
		  <!-- Grid column -->
		  <div class="col-md-6 col-lg-7 text-center text-md-right">
  
			<!-- Facebook -->
			<a class="fb-ic">
			  <i class="fab fa-facebook-f white-text mr-4"> </i>
			</a>
			<!-- Twitter -->
			<a class="tw-ic">
			  <i class="fab fa-twitter white-text mr-4"> </i>
			</a>
			<!-- Google +-->
			<a class="gplus-ic">
			  <i class="fab fa-google-plus-g white-text mr-4"> </i>
			</a>
			<!--Linkedin -->
			<a class="li-ic">
			  <i class="fab fa-linkedin-in white-text mr-4"> </i>
			</a>
			<!--Instagram-->
			<a class="ins-ic">
			  <i class="fab fa-instagram white-text"> </i>
			</a>
  
		  </div>
		  <!-- Grid column -->
  
		</div>
		<!-- Grid row-->
  
	  </div>
	</div>
  
	<!-- Footer Links -->
	<div class="container sub-links text-center text-md-left mt-5">
  
	  <!-- Grid row -->
	  <div class="row mt-3">
  
		<!-- Grid column -->
		<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
		  <!-- Content -->
		  <h6 class="text-uppercase font-weight-bold">Pariksit-reseller</h6>
		  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		  <p>Use Pariksit-reseller's exclusive features to take your performance to the next level,
			  and improve yourself to compete with the world. Our team will be always there to guide you
			   and provide best services through-out your career.
		  </p>
  
		</div>
		<!-- Grid column -->
  
		<!-- Grid column -->
		<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  
		  <!-- Links -->
		  <h6 class="text-uppercase font-weight-bold">Products</h6>
		  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		  <p>
			<a href="#featre">Secure Distribution</a>
		  </p>
		  <p>
			<a href="#featre">Online Classes</a>
		  </p>
		  <p>
			<a href="#featre">Doubt Clarification</a>
		  </p>
		  <p>
			<a href="#featre">Unlimited Sessions</a>
		  </p>
		  <p>
			<a href="#featre">Remote Exams</a>	
		  </p>
		  <p>
			<a href="#featre">Build Your Own App</a> 
		  </p>
		  <p>
			<a href="#featre">Parental Control</a> 
		  </p>
		  <p>
			<a href="#featre">Question Bank</a> 
		  </p>
  
		</div>
		<!-- Grid column -->
  
		<!-- Grid column -->
		<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
		  <!-- Links -->
		  <h6 class="text-uppercase font-weight-bold">About</h6>
		  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		  <p>
			<a href="#!">Team</a>
		  </p>
		  <p>
			<a href="#!">Terms & Conditions</a>
		  </p>
		  <p>
			<a href="#!">Privacy Policy</a>
		  </p>
		  
		</div>
		<!-- Grid column -->
  
		<!-- Grid column -->
		<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
		  <!-- Links -->
		  <h6 class="text-uppercase font-weight-bold">Contact</h6>
		  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		  <p>
			<a href="https://goo.gl/maps/jW9YFeNbw3D9zkVe8" target="_blank"><i class="fas fa-home mr-3"></i> SD-25 Shaktinagar, infront of B-19 Koelnagar, Rourkela, Odisha</p></a>
		  <p>
			<a href="mailto:yogeshbndm@gmail.com"><i class="fas fa-envelope mr-3"></i> yogeshbndm@gmail.com</p></a>
		  <p>
			<a href="tel:+ 91 97760 68954"><i class="fas fa-phone mr-3"></i> + 91 97760 68954</p></a>
		  <p>
			<a href="tel:+91 70085 58336"><i class="fas fa-phone mr-3"></i> + 91 70085 58336</p></a>
  
		</div>
		<!-- Grid column -->
  
	  </div>
	  <!-- Grid row -->
  
	</div>
	<!-- Footer Links -->
  
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2020 Copyright:
	  <a href="https://pariksit.com/"> pariksit.com</a>
	</div>
	<!-- Copyright -->
  
  </footer>
  <!-- Footer -->
























	<!-- jQuery first then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>

<script src="JS/javaanim.js"></script>

<script>

	var tl = new TimelineMax({paused:true});

	document.getElementById('hamburger').addEventListener('click',() => {
		this.tl.play();
	})

	tl.from("nav.hamnav", 1, {
		x: 900,
		y: -900,
		display:'none',
		ease: Power2.easeOut,
		delay: 0
	});

</script>

<script>
	var tl2 = new TimelineMax();
	var tl3 = new TimelineMax();
	var tl4 = new TimelineMax();
	var tl5 = new TimelineMax();
	var tl6 = new TimelineMax();
	const controller = new ScrollMagic.Controller();

	tl2.from("#punchline", 1, {scale: -0.5 , y:250 , opacity: 0 , ease: Power2.easeOut}, "=-.2");
	tl2.from("#p-team", 1, {rotationY: -210 , x:400 , opacity:0 , ease:Power2.easeOut}, "=-1");
	tl2.from("#para", 1, {x:-400 , opacity:0 , ease:Power2.easeOut}, "=-1");
	tl3.from("#ft-head", 1, {scale: -0.5 , y:250 , opacity:0 , ease:Power2.easeOut}, "=-.2");
	tl3.from(".card-img-top", 1, {y:-110 , opacity:0 , ease:Power2.easeOut}, "=-0.6");
	tl3.from(".card-title", 1, {y:-80 , opacity: 0 , ease: Power2.easeOut}, "=-0.8");
	tl3.from(".card-text", 1, {y:110 , opacity:0 , ease:Power2.easeOut}, "=-1");
	tl4.from("#s3-head", 1, {scale: -0.5 , y:250 , opacity:0 , ease:Power2.easeOut}, "=-.2");
	tl4.from(".v-frame1", 1, {x:1200 , opacity:0 , ease:Power2.easeOut}, "=-0.6");
	tl4.from("#first", 1, {x:-400 , opacity:0 , ease:Power2.easeOut}, "=-0.6");
	tl4.from(".v-frame2", 1, {x:-1200 , opacity:0 , ease:Power2.easeOut}, "=-1");
	tl4.from("#second", 1, {x:400 , opacity:0 , ease:Power2.easeOut}, "=-1");
	tl5.from("#s4-head", 1, {scale: -0.5 , y:250 , opacity:0 , ease:Power2.easeOut}, "=-.2");
	tl5.from("#f-line", 1, {scale: -0.5 , y:200 , opacity:0 , ease:Power2.easeOut}, "=-0.9");
	tl5.from(".toggle-container", 1, {scale: -0.5 , y:200 , opacity:0 , ease:Power2.easeOut}, "=-0.9");
	tl5.from(".price-box-premium", 1, {scale: -0.5 , opacity:0 , ease:Power2.easeOut}, "=-0.8");
	tl5.from("#low-price", 1, {x:400 , opacity:0 , ease:Power2.easeOut});
	tl5.from("#high-price", 1, {x:-400 , opacity:0 , ease:Power2.easeOut}, "=-1");
	tl6.from(".overlays", 1, {scale: -0.5 , y:250 , opacity:0 , ease:Power2.easeOut}, "=-.2");
	tl6.from("#contact-form", 1, {scale: -0.2 , opacity:0 , ease:Power2.easeOut}, "=-0.8");




	const scene = new ScrollMagic.Scene({
		triggerElement: ".section-1"
	})
	  .setTween(tl2)
	  .addTo(controller);

	const scene2 = new ScrollMagic.Scene({
		triggerElement: ".features-box"
	})
	  .setTween(tl3)
	  .addTo(controller); 

	const scene3 = new ScrollMagic.Scene({
		triggerElement: ".section-3"
	})
	  .setTween(tl4)
	  .addTo(controller);  

	const scene4 = new ScrollMagic.Scene({
		triggerElement: ".section-4"
	})
	  .setTween(tl5)
	  .addTo(controller);  

	const scene5 = new ScrollMagic.Scene({
		triggerElement: ".contact-panel"
	})   
	  .setTween(tl6)
	  .addTo(controller);
</script>

</body>
</html>