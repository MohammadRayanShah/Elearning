		<!-- Start Navigation -->
<?php
include('./headerIndex.php');
?>
		<!-- End Navigation -->
		
		<!-- Start video banner  -->
		<div class="container-fluid remove-vid-marg">
			<div class="vid-parent">
				<video playsinline autoplay muted loop>
					<source src="videos/banvid.mp4" >
				</video>
				<div 	class="vid-overlay"> </div>
			</div>
			<div class="vid-content">
				<h1 class="my-content">Welcome to ELearning</h1>
				<small class="my-content">The way forward!</small><br/>
				<a  href="#" class ="btn btn-danger"data-bs-toggle="modal" data-bs-target="#StuRegModal">Get Started</a>
			</div>
		</div>
		<!-- End video banner  -->
		
		<!-- Start text banner  -->
		
		<div class="container-fluid bg-danger txt-banner">
			<div class="row bottom-banner">
				<div class="col-sm">
					<h5><i class="fas fa-book"></i> 100+ Online Courses</h5>
				</div>
				<div class="col-sm">
					<h5><i class="fas fa-users"></i> Expert Instructors</h5>
				</div>
				<div class="col-sm">
					<h5><i class="fas fa-keyboard"></i> Lifetime Access</h5>
				</div>
				<div class="col-sm">
					<h5><i class="fas fa-dollar-sign"></i> Money back guarantee</h5>
				</div>
			</div>
		</div>
		<!-- End text banner  -->
		<!-- Start Most Popular Courses-->
		<?php
		include('./popularCoursesIndex.php');
		?>
		<!-- End Most Popular Courses-->
		<!-- Start Contact us-->
		<?php
		include('./contactUs.php');
		?>
		<!-- End Contact us-->
		<!-- Start Testimonial -->
		<?php
		include('./testimonials.php');
		?>
		<!-- End Testimonial -->
		<!-- Start Social Media links -->
		<div class="container-links">
			<a href="#" class="links link-one">
			<i class="fab fa-facebook"></i> Facebook</a>
			<a href="#" class="links link-two">
			<i class="fab fa-twitter"></i> Twitter</a>
			<a href="#" class="links link-three">
			<i class="fab fa-whatsapp"></i> Whatsapp</a>
			<a href="#" class="links link-four">
			<i class="fab fa-instagram"></i> Instagram</a>
			
		</div>
		<!-- End Social Media links -->
		<!-- Start About Section  -->
		<div class="container-about">
			<div class="about about-us">
				<h5>About us</h5>
				<p class="About-us-txt">Understanding eLearning is simple. eLearning is learning utilizing electronic technologies to access educational curriculum outside of a traditional classroom.</p>
			</div>
			<div class="about about-category">
				<h5>Category</h5>
				<a class="about-links" href="#">Web development</a><br>
				<a class="about-links" href="#">Web Designing</a><br>
				<a class="about-links" href="#">Android app dev</a><br>
				<a class="about-links" href="#">IOS development</a><br>
				<a class="about-links" href="#">Data Analysis</a><br>
			</div>
			<div class="about contact-us">
				<h5>Contact Us</h5>
				<p class="contact-us-txt">Elearning World<br>
					Near Police Station Lalbazar<br>
					Srinagar Kashmir -190023 <br />
					Phone : 954430023 <br />
					www.elearning.com
				</p>
			</div>
		</div>
		<!-- End About Section  -->
		<!-- Start Footer  -->
		<?php
include('./footerIndex.php');

		?>
		<!-- End Footer  -->
		