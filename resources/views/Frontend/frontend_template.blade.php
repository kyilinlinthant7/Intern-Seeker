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

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('Intern/fontawesome/css/all.min.css')}}">	

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('Intern/css/Frontend/style.css')}}">

	<!-- custom js -->
	<script  type="text/javascript" src="{{asset('Intern/js/Frontend/custom.js')}}"></script>

	
</head>
<body>

   <!-- Navigations -->

	<div>
		
		<!-- Nav 1 -->
		<!-- <div class="row" style="background-color: #D2C1EF">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<ul class="nav mt-3 justify-content-start">
					<li class="nav-item-logo">
						<img src="{{asset('Intern/img/logo.gif')}}" class="img-fluid" style="width:100px; height:75px"><br><br>
					</li>
					<li class="nav-item">
						<h5 class="mt-3 ml-2">Intern Seekers</h5>
					</li>
				</ul>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">
				<ul class="nav mt-3 justify-content-end">
					<li class="nav-item">
						<a class="nav-link active" style="color:black" href="#">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color:black" href="#">Login/Logout</a>
					</li>
				</ul>
			</div>
		</div>
		 -->
		

		<!-- Nav 2 -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			
			<a class="navbar-brand " href="#">
			    <img src="{{asset('Intern/img/intern3.png')}}" width="40" height="40" class="d-inline-block align-top ml-" alt="">
			    <p class="mt-1 d-inline-block align-top font-weight-bold" style="color:#1C7FC3">Intern Seekers</p>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse ">
				<ul class="navbar-nav ml-auto mr-5" style="color:white">
					<li class="nav-item" style="color:white">
						<a class="nav-link" href="{{route('Frontend.home')}}">Home</a>
					</li>
					<li class="nav-item">

						<a class="nav-link"  href="{{route('Intern_Post.index')}}">Notice board</a>

					</li>
					<li class="nav-item">

						<a class="nav-link" href="{{route('category.index')}}">Category</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('Frontend.contact')}}" >Contact</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{route('Frontend.about')}}">About us</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a>
					</li>


					<li class="nav-item dropdown no-arrow">
		              <a class="nav-link dropdown-toggle"  href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

		
		                </span>
		                <img class="img-profile rounded-circle" src="{{asset('Intern/img/user_logo.jpg')}}" width="30px" height="30px"
		                >
		              </a>

		              <!-- Dropdown - User Information -->
		              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

		              	@role('Company')
		              	<form method="get" action="{{route('Intern_Post.create')}}">
							@csrf
							<div class="row">
								<div class = "col-1">
									<i class=" fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								</div>
								<div class="col-10">
			                		<input type="submit" class="dropdown-item d-inline-block" href="{{route('Frontend.post')}}" value="Post for  internship">
			                	</div>
			                </div>
		                         
		                </form>

		               <!--  <a class="dropdown-item" href="{{route('Frontend.applicant_list')}}">
		                  <i class="fas fa-cogs fa-sm fa-fw text-gray-400"></i>
		                  <span class="pl-0">Applicant List</span>
		               
		                </a> -->
		                <a class="dropdown-item" href="{{route('apply.index')}}">
		                  <i class="fas fa-cogs fa-sm fa-fw text-gray-400"></i>
		                  Applicant List
		                </a>

		                	<div class="dropdown-divider"></div>


		                @endrole
		                
		                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
		                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
		                  Logout
		                </a>
		              </div>
		            </li>


				</ul>
				<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
			</div>
		</nav>

    <!-- Navigation end -->


   </div>
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
			<p class="mb-0 pb-2">copyright | @thecoder_micbc13</p>	

				

		
		</footer>
		
	</div>
	<!-- Footer end -->


	<!-- Modal -->
	<div class="modal fade" id="register" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">

			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Register as?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">

						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<img src="{{asset('Intern/img/companymodal.jpg')}}" class="card-img-top img-fluid" alt="...">
								<div class="card-body">
									<h5 class="card-title">Company</h5>
									<p class="card-text">Register as company if you intend to hire intern workers.</p>
									<div class="justify-content-center">

										<form method="get" action="{{route('company.create')}}">
											@csrf
											<input type="submit" href="{{route('Frontend.company_register')}}" class="btn btn-primary btn-block" value="Register">
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="card">
								<img src="{{asset('Intern/img/studentmodal.jpg')}}" class="card-img-top img-fluid" alt="...">
								<div class="card-body">
									<h5 class="card-title">Student</h5>
									<p class="card-text">Register as company if you are looking for an internship.</p>
									<div class="justify-content-center">

										<form method="get" action="{{route('student.create')}}">
											@csrf
											<input type="submit" href="{{route('Frontend.student_register')}}" class="btn btn-primary btn-block" value="Register">
										</form>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>

			</div>
		</div>
	</div>


</div>




</body>
</html>