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

   <!-- Navigations -->

	<div >
		
		<!-- Banner -->
	<div id="banner">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-default">
			<!-- <div class="container container-fluid"> -->
				<a class="navbar-brand ml-3" href="index.html">
					<img src="{{asset('Intern/img/logo.png')}}" class="img-fluid" style="width: 150px; height: 80px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link pl-3" href="index.html">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-3" href="#">Notice Board</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-3" href="#">Intern Field</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-3" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-3" href="#">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-3" href="#" data-toggle="modal" data-target="#signinup">Sign In|Up</a>
						</li>
					</ul>
				</div>
			<!-- </div> -->
		</nav>

		<!-- <div class="container" style="padding-top: 150px;">
			<div class="row justify-content-center">
				<div class="col-lg-10 mt-5 pt-5">
					<h1 class="text-white display-2 navtitle">Your Career of A Model</h1>
					<hr class="my-5 divider">
				</div>
				<div class="col-lg-8 text-center">
					<p class="text-white text-center">
						We are Professional Model Agency based in London.
					</p>
					<div class="d-lg-block d-md-none d-sm-none">
						<a href="contact.html" class="btn text-white contactbtn">Contact Us</a>
					</div>
				</div>
			</div>
		</div> -->

		</div>
	</div>

		
		

		<!-- Nav 2 -->
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-11%, 5%, 0%, 75%">
			<a class="navbar-brand" href="#">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Newfeed</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Intern Fields
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Computer IT</a>
							<a class="dropdown-item" href="#">Business Management</a>
							<a class="dropdown-item" href="#">Hotel and Tourism</a>
							<a class="dropdown-item" href="#">Hotel and Tourism</a>
							<a class="dropdown-item" href="#">Health</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
 -->
    <!-- Navigation end -->

    @yield('content')

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

</div>




</body>
</html>