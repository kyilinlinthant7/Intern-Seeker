@extends('Frontend.frontend_template')
@section('content')

<div class="container shadow-lg p-5 bg-white rounded my-5">

<form method="post" enctype="multipart/form-data">

	@csrf

	<div class="row">
		<h3 class="txt_color my-4 ml-4">{{$posts->title}}</h3>
	</div>

	<div class="row mt-3">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<span class="ml-2">Company</span>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<span>{{$posts->user->company->company_name}}</span>
		</div>	
	</div>

	<div class="row mt-3">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<span class="ml-2">No of Position</span>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<span>{{$posts->no_of_position}}</span>
		</div>	
	</div>

	<div class="row mt-3">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<span class="ml-2">Skill Required</span>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<span>{{$posts->skill_required}}</span>
		</div>	
	</div>

	<div class="row mt-3">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<span class="ml-2">Application Deadline</span>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<input type="hidden" id="deadline" value="{{$posts->deadline}}">
			<span >{{$posts->deadline}}</span>
		</div>	
	</div>

	<div class="row mt-3">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<span class="ml-2">Duration</span>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<span>{{$posts->duration}}</span>
		</div>	
	</div>

	<div class="row mt-3">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<span class="ml-2">Description</span>
		</div>
		<div class="col-lg-8 col-md-6 col-sm-12">
			<span>{{$posts->detail}}</span>	
		</div>	
	</div>

	
	<div class="form-group row">
			<input type="submit" id="applyBtn" href="{{route('apply.show',$posts->id)}}" class="btn btn-primary mt-5 mb-3 ml-5" style="width: 150px;" value="Apply">
	</div>
</form>

</div>

<script type="text/javascript">

	$(document).ready(function(){

		var deadline =$("#deadline").val();

		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //As January is 0.
		var yyyy = today.getFullYear();

		var current = yyyy+"."+mm+"."+dd;
		
		
		if(current>deadline){
			$("#applyBtn").attr("disabled", true);			
		
		}
	});

	
</script>

@endsection