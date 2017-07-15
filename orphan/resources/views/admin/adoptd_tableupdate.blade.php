@extends('admin.layouts.main')
@section('content')

<form method="POST" enctype="multipart/form-data" id="uploadForm">

  
<div class="content">

{{ csrf_field() }}
		<div class="parentsection">
			
	
			<div class="form-group">
				    <label for="ac_address">Current Address:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="ac_address" name="ac_address">
					</div>
			</div> 

			<div class="form-group">
				    <label for="ac_school">School Name:</label>
				    <div class="input-group">
						<input type="text" class="form-control" id="ac_school" name="ac_school">
					</div>
			</div> 

			<div class="form-group">
				    <label for="ac_perform">Class Performance:</label>
				    <div class="input-group">
						<input type="text" class="form-control" id="ac_perform" name="ac_perform">
					</div>
			</div> 

			<div class="form-group">
				    <label for="ac_height">Height:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="ac_height" name="ac_height">
					</div>
			</div> 

	
			<div class="form-group">
				    <label for="ac_weight">Weight:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="ac_weight" name="ac_weight">
					</div>
			</div> 
			
			<div class="form-group">
				    <label for="ac_hopital">Last Hospital Visit Date:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="ac_hopital" name="ac_hopital" placeholder="YYYY/MM/DD">
					</div>
			</div> 

			<div class="form-group">
				<label for="ac_meetingdate">Current Meeting Date:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="ac_meetingdate" name="ac_meetingdate" placeholder="YYYY/MM/DD">	
				</div>
			</div>
			<div class="form-group">
						<label for="ac_meetingplace">Current Meeting place:</label>
						<div class="input-group">
							<input type="text" class="form-control" id="ac_meetingplace" name="ac_meetingplace">	
						</div>
			</div>


		@foreach($childs as $chil)

			<div class="form-group">
				<input type="hidden" name="c_id" value="{{$chil->id}}" >
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="submit" name="submit" onclick="return postWarn()">
			</div>

		@endforeach
		</div>

</div>

	</form>

@endsection