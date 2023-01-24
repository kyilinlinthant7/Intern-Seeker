<!DOCTYPE html>
<html>
<head>
	<title>Internship Seek</title>


	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{asset('Intern/bootstrap/css/bootstrap.min.css')}}">

	<!-- JQuery -->
	<script  type="text/javascript" src="{{asset('Intern/bootstrap/js/jquery.min.js')}}"></script>

	<!-- Bootstrap js -->
	<script type="text/javascript" src="{{asset('Intern/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('Intern/css/Frontend/style.css')}}">

	
</head>
<body>

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">

	    <div class="container">

	       <a class="navbar-brand js-scroll-trigger" href="#page-top">Internship Seek</a>

	        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarResponsive">
	        <ul class="navbar-nav ml-auto my-2 my-lg-0">
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="#about">Home</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="#services">Company</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="#portfolio">About us</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="#contact">Register</a>
	          </li>
	           <li class="nav-item">
	            <a class="nav-link js-scroll-trigger" href="#contact">Login</a>
	          </li>
	        </ul>
	      </div>
	    </div>
    </nav>

    <!-- Navigation end -->

    <!-- Footer -->
	<div class="container-fluid" id="contact" style="color:white">
		<div class="row" style="padding:100px; padding-top: 50px; padding-bottom: 50px">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<form>
					<h4 class="text-center mb-3">Contact us</h4>
					<div class="pt-0 text-center ">
						<input type="text" name="name" class="form-control textbox ml-5 mb-3" placeholder="Name" >
						<input type="text" name="email" class="form-control textbox ml-5 mb-3" placeholder="Email" >
						<input type="text" name="subject" class="form-control textbox ml-5 mb-3" placeholder="Subject" >
						<textarea class="form-control textbox ml-5 mb-3" placeholder="Your Message"></textarea>
						<button type="button" class="btn btn-info" style="width:150px; border-radius:20px">Send</button>
					</div>

				</form>
			</div>
			<div  class="col-lg-6 col-md-6 col-sm-6">
				<div class="mb-5">
					<h5>Address</h5>
					<p>Pha Yar Street, Hlaing Township, Yangon</p>
				</div>

				<div class="mb-5">
					<h5>Phone</h5>
					<p>+95 953474690, +95 688548681</p>
				</div>

				<div >
					<h5>Email</h5>
					<p>atta15598@gmail.com</p>
				</div>
			</div>
	
		</div>

		<footer class="text-center">
			<span >
				<a style="color:white" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
				<a style="color:white" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
				<a style="color:white" href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
			</span>
			<p class="mb-0 pb-2">copyright | @thecoder</p>	

				

		
		</footer>
		
	</div>
	<!-- Footer end -->



</body>
</html>