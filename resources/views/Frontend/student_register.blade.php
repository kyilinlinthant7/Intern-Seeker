@extends('Frontend.frontend_template')
@section('content')

<div class="container mt-3 shadow p-3 mb-5 bg-white rounded">

		<div class="row justify-content-center">
			<h2 class="my-3 txt_color mb-5">Student Registration</h2>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-6 col-sm-12">
				<form method="post" action="{{route('student.store')}}" enctype="multipart/formdata">
				@csrf

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="name">Student Name</label>
								<input type="text" name="name" class="form-control" id="name">
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="dob">Date of Birth</label>
								<input type="date" name="dob" class="form-control" id="dob">
							</div>
						</div>
					</div>

					<div class="row">


						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" id="email" aria-describedby="email">

								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" aria-describedby="password">
							</div>
						</div>



					</div>

				
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" name="phone" class="form-control" id="phone">
					</div>

					<!-- <div class="form-check">
						<label for="gender">Gender</label>

						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="gender">Male
						</label>
					
						<label class="form-check-label ml-5">
							<input type="radio" class="form-check-input" name="gender">Female
						</label>
					</div> -->

					<label class="mr-5">Gender</label>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" name="gender" type="radio" id="male" value="male">
					  <label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" name="gender" type="radio" id="female" value="female">
					  <label class="form-check-label" for="female">Female</label>
					</div>

					<div class="form-group mt-3">
						<label for="address">Address</label>
						<textarea name="address" id="address" class="form-control"></textarea>
					</div>
					
					<div class="form-group">
						<label for="education">Education</label>
						<textarea name="education" id="education" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="university">College/University</label>
						<input type="text" name="university" class="form-control" id="university">
					</div>


					<div class="row justify-content-center">
						<input type="submit" href="#" class="btn btn-primary btn-lg my-3" value="Register">
					</div>

				</form>
			</div>
		</div>
		

	</div>


@endsection