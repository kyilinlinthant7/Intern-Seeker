@extends('Frontend.frontend_template')
@section('content')

<div>
	<!-- Carousel -->

	<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="{{asset('Intern/img/banner5.jpg')}}" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="{{asset('Intern/img/banner3.jpg')}}" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="{{asset('Intern/img/banner1.jpg')}}" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div> -->

	<!-- Carousel end -->

	<!-- banner -->
	<div class="img_div">
		<img src="{{asset('Intern/img/home_banner3.jpg')}}" class="img-fluid" style=" width: 100%;" alt="banner image">
		<div class="right">
			<h1 style="color:#F17339;" class="font-weight-bold mb-5">Start your career <br>with us!</h1>

			<h4 style="color:#1C7FC3;" class="txt_color">Sign up now to find your dream <br>internship  or job</h4>
			<a href="#" class="btn btn-primary mt-4 pt-2 pb-2 pl-4 pr-4 " style="border-radius:100px" data-toggle="modal" data-target="#register">Get Started </a>

		</div>

	</div>
	<!-- banner end -->

	<!-- 3card -->
	<div class="mt-5 pl-5 pr-5">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center p-3 txt_color" style="color:#2f378c">
			<img class="img-fluid" src="{{asset('Intern/img/coffee.webp')}}" alt="coffee image">
			<h3 class="font-weight-bold mt-3">Let's get personal</h3>
			<p>Tell us about yourself! We'll use this to find you the best jobs for you.</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center p-3 txt_color" >
			<img class="img-fluid" src="{{asset('Intern/img/phone.png')}}" alt="coffee image">
			<h3 class="font-weight-bold mt-3">Apply yourself</h3>
			<p>Is there such a thing as too many cool job opportunities? Nope!</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center p-3 txt_color" style="color:#2f378c">
			<img class="img-fluid" src="{{asset('Intern/img/succulent.png')}}" alt="coffee image">
			<h3 class="font-weight-bold mt-3">Blink, and you're hired!</h3>
			<p>Time to start picking out what to put on your new desk.</p>
		</div>
	</div>

	</div>
	<!-- 3card end -->

	<!-- paragraph -->
	<div class="mt-5 pt-3 pb-3" style="padding-left:5%; padding-right: 5%">
		<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 pb-sm-4">
			<img class="img-fluid" src="{{asset('Intern/img/about.jpg')}}">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 pl-3 pr-3">
			<p>
				InternSeeker assists students by providing student recruitment technology and career services to universities and career centers.
				We will help you find motivated prospective interns who are hunting down an internship that they're ready to throw themselves into.<br>

				Interns are a valuable hiring resource for any company and are often overlooked as being too much trouble to hire and train. When your team is large enough, a steady flow of interns will help your senior team members delegate so they can focus on more complex tasks.
				This student job board can help you find internships as well as entry level jobs and careers. It's focused on college students and recent college grads.
				Great site for both student job and internship searches<br>

				We promotes jobs and internship opportunities throughout the UK in a variety of industries, including advertise roles in a variety of industry sectors including engineering, sales and management.
			</p>
		</div>
	</div>

	</div>
	<!-- paragraph end -->

	<!-- Featured -->
	<div class="pl-5 pr-5 pl-5">
		<h4 class="mt-5 txt_color mr-2">Featured Internships</h4>

		<div class="row" >

			@foreach($posts as $row)
			<div class="col-lg-3 col-md-6 col-sm-12 col-12 p-4">
				<div class="card p-2" >

					<div class="row ">
						<div class="col-4 pl-4">
							<img class="card-img-top img-fluid" src="{{$row->user->company->profile}}" alt="Card image cap">
						</div>

						<div class="col-8 p-2">
							<h6 class="font-weight-bold txt_color">{{$row->user->company->company_name}}</h6>

						</div>
					</div>

					<div class="card-body">
						<p class="card-title">Position : {{$row->title}}</p>
						<a href="{{route('Intern_Post.show',$row->id)}}" class="btn btn-primary float-right" >View Detail</a>

					</div>
				</div>
			</div>
			@endforeach

			<!-- <div class="col-lg-3 col-md-6 col-sm-12 col-12 p-4">
				<div class="card p-2">

					<div class="row ">
						<div class="col-4 pl-4">
							<img class="card-img-top img-fluid" src="{{asset('Intern/img/com_logo/v2m.jpg')}}" alt="Card image cap">
						</div>

						<div class="col-8 p-2">
							<h6 class="font-weight-bold txt_color">Vision to Motion Myanmar Co., Ltd.</h6>

						</div>
					</div>

					<div class="card-body">
						<p class="card-title">Position :Android app development</p>
						<a href="{{route('Frontend.post_detail')}}" class="btn btn-primary float-right" >View Detail</a>

					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-12 col-12 p-4">
				<div class="card p-2"  >

					<div class="row ">
						<div class="col-4 pl-4">
							<img class="card-img-top img-fluid" src="{{asset('Intern/img/com_logo/arise.jpg')}}" alt="Card image cap">
						</div>

						<div class="col-8 p-2">
							<h6 class="font-weight-bold txt_color">Arise Myanmar Co., Ltd.</h6>

						</div>
					</div>

					<div class="card-body">
						<p class="card-title">Position : Web Development Internship</p>
						<a href="{{route('Frontend.post_detail')}}" class="btn btn-primary float-right" >View Detail</a>

					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-12 col-12 p-4">
				<div class="card p-2" >

					<div class="row">
						<div class="col-4 pl-4">
							<img class="card-img-top img-fluid" src="{{asset('Intern/img/com_logo/isgm.jpg')}}" alt="Card image cap">
						</div>

						<div class="col-8 p-2">
							<h6 class="font-weight-bold txt_color">ISGM Company - ICT Star Group Myanmar</h6>

						</div>
					</div>

					<div class="card-body">
						<p class="card-title">Position : BE/BTech Internship(IT)</p>
						<a href="{{route('Frontend.post_detail')}}" class="btn btn-primary float-right" >View Detail</a>

					</div>
				</div>
			</div> -->

			

		</div>
		<a class="float-right p-4" href="{{route('Intern_Post.index')}}">View all Internship</a>

	</div>
    <!-- Featured end -->

</div>

@endsection