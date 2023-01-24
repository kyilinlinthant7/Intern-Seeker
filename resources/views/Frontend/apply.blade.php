@extends('Frontend.frontend_template')
@section('content')


<div class="container">
		<h2 class="txt_color mt-5 mb-5">Apply Form</h2>
		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
		<form method="post" action="{{route('apply.store',$posts->id)}}" enctype="multipart/form-data" >

		@csrf
				<input type="hidden" name="post_id" value="{{$posts->id}}">

						<div class="form-group ">
							<label for="inputEmail4">Internship Position</label>
							<input type="text" name="title" class="form-control" id="inputEmail4" value="{{$posts->title}}">
						</div>

						<div class="form-group ">
							<label for="inputEmail4">Company</label>
							<input type="text" name="company" class="form-control" value="{{$posts->user->company->company_name}}" id="inputEmail4">
						</div>

						<div class="form-group ">
							<label for="inputEmail4">Subject</label>
							<input type="text" name="subject" class="form-control" id="inputEmail4">
						</div>

						
					
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Description</label>
							<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>


						<div class="form-group mb-5 mt-5 ">
							<label for="inputEmail4">Attach your CV Form</label><br>
							<input type="file" class="form-control-file" name="cv_form" id="cvform">						
						</div>

						


					<input type="submit" class="btn btn-primary" value="Apply">

				</form>
		
	</div>

@endsection