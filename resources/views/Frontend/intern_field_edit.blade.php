@extends('Frontend.frontend_template')
@section('content')

<div class="container-fluid p-5">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-12 col-12 pl-0 pr-0">
			<h3 class="text-center txt_color mb-5">Category List</h3>

			<ul class="list-group">
				@foreach($types as $row)
			    	<a href="#" class="list-group-item list-group-item-action">{{$row->name}}
			    	</a>
			    @endforeach
			</ul>
		</div>


		<div class="col-lg-10 col-md-10 col-sm-12 col-12 pl-5 ">
				<h3 class="text-center txt_color">Offerring Internships</h3>
				<hr style="max-width: 50%;">
				<div class="row mt-3">

					@foreach($posts as $row)
						
		 			<div class="col-lg-3 col-md-6 col-sm-12 col-12 p-2">
						<div class="card p-2" >

							<div class="row ">
								<div class="col-4 pl-4">
									<img class="card-img-top img-fluid" src="{{$row->user->company->profile}}" alt="Card image cap">
								</div>

								<div class="col-8 p-2">
									<h6 class="font-weight-bold txt_color">{{$row->title}}</h6>

								</div>
							</div>

							<div class="card-body">
								<p class="card-title">{{$row->user->company->company_name}}</p>
								<a href="{{route('Intern_Post.show',$row->id)}}"  class="btn btn-primary float-right" >View Detail</a>

							</div>
						</div>
					</div>
		 			@endforeach
					
				</div>
				<div class="row justify-content-end">
					<a href="{{route('Intern_Post.index')}}" class="view_all"><span class="mr-3 mt-5"><br>View All Internship</span></a>
				</div>

			<!-- Company List -->
			
				<h3 class="mt-5 text-center txt_color ">Company List</h3>
				<hr style="max-width: 50%;">

				<div class="row">

					@foreach($company as $row)
					<div class="col-lg-3 col-md-3 text-center col-sm-6 col-6">
						<img class="img-fluid" src="{{$row->profile}}" alt="Card image cap" width="100px" height="100px">
						<h6 class="txt_color">{{$row->company_name}}</h6>
					</div>
					@endforeach	
				</div>
		</div>

	</div>
</div>

@endsection