@extends('admin.layouts.main')
@section('content')
<div class="content">
		<div class="terms_condition">
			<h2>We assure that applicant agrees the terms and conditions of our organization while adopting a child.</h2>
		</div>
	<div class="parentsection">

		<div class="terms_title">
			<h2>Conditions for adopting a child:</h2>
		</div>

		<div class="terms">
			<p>
				1.The applicant should be the Nepali citizen.
			</p>
			<p>
				2.The applicant must have paid all the government texes.
			</p>
			<p>
				3.The applicant must be aged 21 or over if married.
			</p>
			<p>
				4.But aged 18 if one of applicants is the father or mother of the child, but the other partner must be 21.
			</p>
			<p>
				5.Applicant should admit the child to schools.
			</p>
			<p>
				6.Applicant will not let the child to involve in any type of laboury.
			</p>
			<p>
				7.Applicant should regulary visit our organization at the end of every month to report child's condition.
			</p>
			<p>
				8.Applicant should treat the child as a family member.
			</p>
			<p>
				9.Applicant should secure all the rights to adopted child.
			</p>
		</div>
		<form method="POST" enctype="multipart/form-data" id="uploadForm">
			{{ csrf_field() }}
			@foreach($childs as $chil)
			<div class="form-group">
				<input type="hidden" name="id" value="{{$chil->id}}">
			</div>
			<div class="btn_agree">
				<a class="btn btn-primary" href="{{route('admin.waitingchild.agree')}}?id={{$chil->id}}">I AGREE</a>
			</div>
				@endforeach
		</form>

		
	</div>

</div>
@endsection