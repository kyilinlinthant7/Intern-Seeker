@extends('Frontend.frontend_template')
@section('content')
<div class="container">
		<div class="shadow-lg p-3 bg-white rounded my-5">
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6">

					<h2 style="padding-bottom: 5%;" class="ml-2">Contact Us</h2>
					<div class="alert alert-success">
						<i class="fas fa-phone"></i> <label> +9509786773462</label><br>
						<i class="far fa-envelope-open"></i>
						<label> Internseeker@gmail.com</label><br>
						<i class="fas fa-map-marker-alt"></i>
						<label>  7th Street,Hlaing,Yangon</label>
					</div>
				</div>
				<div class="col-lg-6 col-md-6  col-sm-12">
					
					<h2 style="padding-bottom: 5%;" class="ml-2">Feedback</h2>
					<div class="card">

						<form>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label for="inputEmail4">Name</label>
											<input type="email" class="form-control" id="inputEmail4">
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label for="inputPassword4">Email</label>
											<input type="password" class="form-control" id="inputPassword4">
										</div>
									</div>

								</div>
								<div class="form-group">
									<label for="inputAddress">Address</label>
									<input type="text" class="form-control" id="inputAddress">
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Subject</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
								<div class=" row justify-content-center">
									<button type="button" class="btn btn-primary btn-lg" >Send Message</button>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.005356243425!2d96.19036954980227!3d16.776409124498205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecfe641ee9e5%3A0x4bf3d2d9b31d1f2d!2zTm8uICg3KSBTdCwg4YCb4YCU4YC64YCA4YCv4YCU4YC6!5e0!3m2!1smy!2smm!4v1579626328256!5m2!1smy!2smm" frameborder="0" style="border:0; height=400;" allowfullscreen=""></iframe>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 ">
				Intern Seeker official Facebook page is available for our customers and its one of the most important purposes is to solve query and complaints. Please send private message to us now and you can dial 0911111 for your requirements.
				<br>
				Call center for Intern Seek’s Partners
				Intern Seek's Partners can dial 555 or 777 from our Partner SIM numbers for any further assistance. Operating hours of our Call Center is from 06 am to 11 pm.
			</div>

		</div>
	</div>

@endsection