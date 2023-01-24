@extends('Frontend.frontend_template')
@section('content')

	<div class="container">
			<h3 class="txt_color mb-5 mt-5">Post for an Internship</h3>

			<form method="post" action="{{route('Intern_Post.store')}}">
					@csrf
				<div class="form-group">
						<label for="title">Internship Title</label>
						<input type="text" name="title" class="form-control" id="title">
				</div>
				
				<div class="form-group">
						<label for="position">No of Position</label>
						<input type="text" name="no_of_position" class="form-control" id="position">
				</div>

				<div class="form-group">	
					<label for="intern_field">Internship Field</label>
						<select class="form-control" name="intern_field" id="intern_field">

							@foreach($types as $row)
							    <option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
				    
						</select>
				</div>

				<div class="form-group">
						<label for="skill">Skill Required</label>
						<textarea class="form-control" name="skill_required" id="exampleFormControlTextarea1" rows="3">
							
						</textarea>				
				</div>


				

				<div class="form-group">
					<label for="deadline">Application Deadline</label>
					<input type="date" name="deadline" class="form-control" id="deadline">

				</div>

				<div class="form-group">
					<label for="deadline">Duration</label>
					<input type="text" name="duration" class="form-control" id="duration">

				</div>

				<div class="form-group">
						<label for="detail">Detail</label>
						<textarea class="form-control" name="detail" id="detail" rows="3">
							
						</textarea>				
				</div>
				
				<input type="submit" class="btn btn-primary mt-4" style="width: 150px;" value="Post">
			</form>
		
	</div>

@endsection