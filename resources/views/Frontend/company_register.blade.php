@extends('Frontend.frontend_template')
@section('content')

<div class="container mt-3 shadow p-3 mb-5 bg-white rounded">

		<div class="row justify-content-center">
			<h2 class="my-3 txt_color mb-5">Company Registration</h2>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-6 col-sm-12">

				@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
				@endif
				
				<form method="post" action="{{route('company.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="form-group">
								<label for="name">Company Name</label>

								<input type="text" name="name" 
								class="form-control" id="name">

							</div>
						</div>
						
					</div>



					<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label for="email">Email</label>

									<input type="email" name="email"
									class="form-control" id="email" aria-describedby="emailHelp">

									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label for="password">Password</label>

									<input type="password" name="password"
									class="form-control" id="password" aria-describedby="password">

								</div>
							</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="type">Company Type</label>
<!-- 								<select class="custom-select" name="type" id="type">
									<option selected>Hotel and Tourism</option>
									<option value="1">Computer IT</option>
									<option value="2">Health</option>
									<option value="3">Business and Management</option>
								</select> -->

								<select class="form-control" name="type" id="type">

								@foreach($types as $row)
							        <option value="{{$row->id}}">{{$row->name}}</option>
							    @endforeach
				    
								</select>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="number" name="phone" class="form-control" id="phone">
							</div>
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="ceo_name">CEO Name</label>
						<input type="text" name="ceo_name" class="form-control" id="ceo_name">
					</div>

					<div class="form-group">
						<label for="hr_manager">HR Manager</label>
						<input type="text" name="hr_manager" class="form-control" id="hr_manager">
					</div>

					<div class="form-group">
						<label for="address">Address</label>
						<textarea class="form-control" name="address" id="address"></textarea>
					</div>
					
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" id="description" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" name="website" class="form-control" id="website">
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="form-group">
								<label for="profile">Select profile picture</label>
								<br>
								<input type="file" class="form-control-file" name="profile" id="profile">

							</div>
						</div>
						
					</div>

					<div class="row justify-content-center">
						<input type="submit" href="#" class="btn btn-primary btn-lg my-3" value="Register">
					</div>

				</form>
			</div>
		</div>
		

	</div>
@endsection