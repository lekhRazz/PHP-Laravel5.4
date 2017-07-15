@extends('admin.layouts.main')
@section('content')

<form method="POST" enctype="multipart/form-data" id="uploadForm">

  
<div class="content">

{{ csrf_field() }}
		<div class="parentsection">
			
	
			<div class="form-group">
				    <label for="wc_school">School Name:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="wc_school" name="wc_school">
					</div>
			</div> 

			<div class="form-group">
				    <label for="wc_perform">Class Performance:</label>
				    <div class="input-group">
						<input type="text" class="form-control" id="wc_perform" name="wc_perform">
					</div>
			</div> 

			<div class="form-group">
				    <label for="wc_height">Height:</label>
				    <div class="input-group">
						<input type="text" class="form-control" id="wc_height" name="wc_height">
					</div>
			</div> 

			<div class="form-group">
				    <label for="wc_weight">Weight:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="wc_weight" name="wc_weight">
					</div>
			</div> 

	
			<div class="form-group">
				    <label for="wc_bgroup">Blood Group:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="wc_bgroup" name="wc_bgroup">
					</div>
			</div> 
			
			<div class="form-group">
				    <label for="wc_hopital">Hospital Visit Date:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="wc_hopital" name="wc_hopital" placeholder="YYYY/MM/DD">
					</div>
			</div> 

			<div class="form-group">
				<label for="wc_remark">Remark:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="wc_remark" name="wc_remark">	
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