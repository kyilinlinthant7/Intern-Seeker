@extends('Frontend.frontend_template')
@section('content')

<div class="container">
<h4 class="font-weight-bold mt-5 mb-4">Machine Learning And Artificial Intelligence</h4>

<table class="table">
	<thead class="applist_header">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Subject</th>
			<th>Description</th>
			<th>CV Form</th>

		</tr>
	</thead>
	<tbody>
		@foreach($apply as $row)
		<tr>
			<td>{{$row->id}}</td>
			<td>{{$row->user->name}}</td>
			<td>{{$row->subject}}</td>
			<td>{{$row->description}}</td>
			<td>{{$row->cv_form}}</td>
		</tr>
		@endforeach

		<!-- <tr>
			<td>2</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr>

		<tr>
			<td>3</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr>

		<tr>
			<td>4</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr> -->


	</tbody>
</table>


<!-- <h4 class="font-weight-bold mt-5 mb-4">BE/BTech Internship(IT)</h4>

<table class="table">
	<thead class="applist_header">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Subject</th>
			<th>Description</th>
			<th>File</th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr>

		<tr>
			<td>2</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr>

		<tr>
			<td>3</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr>

		<tr>
			<td>4</td>
			<td>Aung Aung</td>
			<td>Applying for Machine Learning</td>
			<td>I would like to apply the position for machine learning...</td>
			<td>CV.doc</td>
		</tr>


	</tbody>
</table> -->
</div>
@endsection