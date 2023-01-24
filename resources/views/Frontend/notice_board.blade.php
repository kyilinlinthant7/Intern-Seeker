@extends('Frontend.frontend_template')
@section('content')

<div class="container">

	<h2 class="text-center font-weight-bold txt_color mt-5 mb-5">Choose the best internship for you</h2>
<!-- 	<div class="row" >
 -->		<!-- <div class="col-lg-4  col-md-4 col-sm-12 ml-sm-auto ">
			<div class="form-group">
			    <label for="type_select" class=" txt_color">Search by type</label>
			    <select class="form-control" id="type_select">
			      <option>IT/Computing</option>
			      <option>Engineering</option>
			      <option>Marketing</option>
			      <option>Business</option>
			      <option>Human Resource</option>
			      <option>Hotel and Tourism</option>

			    </select>
			 </div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 ml-lg-5">
			<div class="form-group">
				<label for="search txt_color" class=" txt_color">Search by keyword</label>
			    <form class="form-inline my-2 my-lg-0 ">
					<input class="form-control mr-sm-2" type="search" id="search" placeholder="company name, etc..." aria-label="Search"
					style="width: 50%">
					<button class="btn btn-primary my-2 my-sm-0 ml-5" type="submit">Search</button>
				</form>
			 </div>
		</div> -->

		
<!-- 	</div>
 -->	
	<div class="container">

		<div class="input-group mb-5">
		  <input type="text" class="form-control" placeholder="Search by interest field, location etc..." aria-label="Recipient's username" aria-describedby="basic-addon2">

		  <div class="input-group-append">
		    <button class="btn btn-primary" type="button"><i class="fas fa-search mr-2"></i>Search</button>
		  </div>
		</div>


		@foreach($posts as $row)
		<div class="card p-3 mb-3">

			<div class="row">
				<div class="col-2">
					<img src="{{$row->user->company->profile}}" class="img-fluid" style="width: 75px; height: 75px"> 
					
				</div>


				<div class="col-9">
					<h5 class="font-weight-bold">{{$row->title}}</h5>
					<a href="#">{{$row->user->company->company_name}}</a>


					<p class="mt-3 mb-1">Number of position : {{$row->no_of_position}}</p>
					<p>
						{{$row->detail}}
					</p>

					<i class="far fa-thumbs-up" style="margin-right: 10px"></i>
					<span style="margin-right: 40px">20</span>
					<i class="far fa-comment-alt" style="margin-right: 10px"></i>
					<span>24</span>

				</div>


				<br>
				
			</div>

			<div class="row justify-content-end mt-0">
			

				<a href="{{route('Intern_Post.show',$row->id)}}" class="btn btn-primary p-1 pr-2 pl-2 mr-5">View Detail</a>

			</div>
		</div>
		@endforeach

		

	</div>
</div>
@endsection