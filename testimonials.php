<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Testimonials</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<!-- Favicons -->
	<link href="./img/logo.png" rel="icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aclonica|Mansalva|New+Rocker|Rock+Salt&display=swap"
		rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/venobox/venobox.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


	<!-- Main Stylesheet File -->
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/testimonials.css"> 
	
</head>
<body onload="startTime()">

<!--==========================
            Header
============================-->
<header id="header" style="background-color: rgb(6, 12, 34);">
	<div class="container">
		<div id="logo" class="pull-left">
			<!-- logo -->
			<h1 style="font-family: 'Rock Salt', cursive;">
				<a href="/index.html">HS<span>R</span></a>
			</h1>
		</div>

		<nav id="nav-menu-container">
			<ul class="nav-menu">
				<li><a href="./index.php">Home</a></li>
				<li><a href="./indian.html">Indian</a></li>
				<li><a href="./foreign.html">Foriegn</a></li>
				<li  class="menu-active"><a href="#">Testimonials</a></li>
				<li class="connect"><a href="./connect.php">Connect with Us</a></li>
			</ul>
		</nav>
		<!-- #nav-menu-container -->
	</div>
</header>
<!-- #header -->



<!--==========================
            testimonials
============================-->
<section id="test" class="wow slideInLeft">
<div class="cd-testimonials-wrapper cd-container" style="margin-top:30vh;">
	<ul class="cd-testimonials">
	  <?php
		$con = mysqli_connect('localhost','root','','userregistration');  
		$q = "select * from feedback";
		$result = mysqli_query($con,$q);

		$data = mysqli_num_rows($result);
		
		if($data!=0){
			while($mydata = mysqli_fetch_assoc($result)){
	  ?>
		<li>
			<p><?php echo $mydata['message']; ?></p>
			<div class="cd-author">
				<img src="./img/sample_face.gif" alt="reviewer image">
				<ul class="cd-author-info">
					<li><?php echo $mydata['name']; ?></li>
					<li><?php echo $mydata['profession']; ?>, <?php echo $mydata['location']; ?></li>
				</ul>
			</div>
		</li>
		<?php 
			}
		}
		?>		
	</ul>
	 <!-- cd-testimonials -->

	<a href="#0" class="cd-see-all">See all</a>
</div>
 <!-- cd-testimonials-wrapper -->

<div class="cd-testimonials-all">
	<div class="cd-testimonials-all-wrapper">
		<ul>
			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
				
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>MyName</li>
						<li>TaG, Description</li>
					</ul>
				</div> <!-- cd-author -->
			</li>
		</ul>
	</div>
	<!-- cd-testimonials-all-wrapper -->
	<a href="#0" class="close-btn" >Close</a>
</div>
</section>
<!---testimonials -->
	

<!--==========================
           share
============================-->
<section id="share" class="wow slideInRight section-with-bg" data-wow-duration="1s">
	<section class="share_wrapper">
		<h2 class="sentence">
			<i class="fa fa-comments-o"></i> Wanna share your&nbsp;
			<div class="slidingVertical">
				<span class="wisteria">thoughts?</span>
				<span class="belize">review?</span>
				<span class="pomegranate">opinion?</span>
				<span class="green">impression?</span>
				<span class="midnight">perspective?</span>
			</div>
			<div class="scroll">Scroll Ahead</div>
		</h2>
	</section>
</section>
<!---share -->


<!--==========================
           feedback
============================-->
<section id="feedback" class="wow rotateInDownLeft" data-wow-duration="2s">
	<div class="contact-form">
		<div class="contact-form__brand">
			<i class="fa fa-edit"></i>
		</div>
		<div class="contact-form__contact">
			<h3 class="contact-form__title">FeedBack!</h3>
			<form class="contact-form__form" action="feedback.php" method="POST">
				<div class="contact-form__form--line" id="form1">
					<div class="input">
						<label for="name">Name*</label>
						<input type="text" name="name" required/>
					</div>
					<label class="checkbox-container">I'm satisfied!
						<input type="checkbox" checked name="check"/>
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="contact-form__form--line">
					<div class="input">
						<label for="designation">Profession?*</label>
						<input type="text" name="designation" />
					</div>
					<div class="input">
						<label for="location">Where do you stay?*</label>
						<input type="text" name="location" required/>
					</div>
				</div>
				<div class="contact-form__form--line">
					<div class="input">
						<label for="mail">E-Mail</label>
						<input type="email" name="mail" />
					</div>
					<div class="input">
						<label for="phone">Phone Number</label>
						<input type="number" name="phone" />
					</div>
				</div>
				<div class="input--textarea">
					<label for="message">Message*</label>
					<textarea type="text" name="message"></textarea>
				</div>
				<div class="input--button">
					<button type="submit" name="feedback"><span>Submit &nbsp;</span></button>
				</div>
			</form>
		</div>
	</div>
</section>
<!---feedback -->


<!--==========================
      Footer
  ============================-->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-6 footer-info">
					<img src="./img/logo.png" alt="HSR">
					<p><i class="fa fa-copyright"></i> <strong>Healthy and Sumptuous Recipes</strong>
						<hr class="style">
						This website is solely for project purpose and includes modified code snippets from various
						resources.The
						recipes included in this website are directly taken from online resources.</p>
				</div>

				<div class="col-lg-6 col-md-6 wrapper">
					<script src='https://codepen.io/juliangarnier/pen/75efae7724dbc3c055e918057fc4aca5.js'></script>
				</div>

				<div class="col-lg-3 col-md-6 footer-contact">
					<h4>About Us</h4>
					<p>
						Students of Section I, <br>
						PES University,<br>
						Bangalore<br> <br>
					</p>

					<div class="social-links">
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="time">
		<!-- <i class="fa fa-clock-o fa-2x"></i> &nbsp; &nbsp; <span id="clock"></span> -->
		<i class="fa fa-laptop fa-2x"></i> &nbsp; &nbsp;<span id="screen_time"></span> &nbsp; seconds
	</div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="js/test_js/jquery-2.1.1.js"></script>
<script src="js/test_js/masonry.pkgd.min.js"></script>
<script src="js/test_js/jquery.flexslider-min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<!-- custom .js files -->
<script src="./js/test_js/main.js"></script>
<script src="./js/main.js"></script>
<script src="./js/testimonials.js"></script>

</body>

</html>