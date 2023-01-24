@extends('Frontend.frontend_template')
@section('content')

<!-- About Top Contents -->
	<div class="container mt-5">
		<div class="row">

			<div class="col-lg-7 col-md-12 col-sm-12">
				<img src="{{asset('Intern/img/about1.jpg')}}" class="img-fluid">
			</div>

			<div class="col-lg-5 col-md-12 col-sm-12">
				<h1 class="mt-3">Hello We are Intern Seekers!</h1>
				<hr>
				<p>Join our team to make your dreams come true.</p>
			</div>

		</div>
	</div>

	<!-- About Mid Contents -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<p>Tom is in charge of partnerships with companies. With a joyful and dynamic personality, he is the best to negotiate the best internship offers for you. He's always hanging on the phone organizing your interviews and arranging your internship as soon as possible.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<p>Wihtout any doubt Virginie is the most discreet of our team. It is always with a friendly smile that she takes good care of our student's projects. She is selecting carefully the internship offers, she has incredible skills to review CVs and she is the best to answer all the questions of our students.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<p>Faustine is mainly in charge of marketing, she writes blog articles to give you the best advice, posts our latest internship offers on social networks and keeps you informed of the activities we organize for you.</p>
			</div>
		</div>
	</div>

	<!-- About Bottom Contents -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1 class="mb-3 text-center">Current Internship Programs</h1>
				<hr style="max-width: 50%;" class="mb-3">
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h3 class="my-3 text-center">Our Partnership Companies</h3>
				<!-- Card 1 -->
				<div class="card">
					<img src="{{asset('Intern/img/companymodal.jpg')}}" class="cpystu card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">At Internship Makers we do all we can to ensure you the most successful internship experience abroad. We have recruited the best agents to better understand your needs and provide you with a tailored service. Recruitment, business relation, international relation, education professionals etc. Each of our agents speaks at least 3 different languages. We have very good team cohesion and always come to work with a smile on our face. We are happy and proud to help and support hundreds of young people to realize their dream of starting an internship in a foreign country every year!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h3 class="my-3 text-center">Intern Students</h3>
				<!-- Card 2 -->
				<div class="card">
					<img src="{{asset('Intern/img/studentmodal.jpg')}}" class="cpystu card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">Business Development Executive, Grace is originally from Sudan, but grew up in London. Always looking out for our students, she coaches them in English and gives great advice for interviews. Better not get on her bad side, this princess is a feisty one, but cares for her co-workers in her own special way. Partnership executive, Thibault is French, he is the charming ladies guy. Well connected and ambitious, he has great people skills. He is the king of the partnerships, to make sure our students can enjoy a unique stay abroad.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection