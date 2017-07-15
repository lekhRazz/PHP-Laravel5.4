@extends('user.layout.main')
@section('content')
<div class="content">
	<form method="POST" enctype="multipart/form-data" id="uploadForm">
		{{ csrf_field() }}

		<div class="parentsection">
			<div style="color:#CB4335;font-size:20px;border-bottom:1px solid black"><b>Applicant Information</b></div>
	
			<!-- <div class="form-group">
				    <label for="uname">Full Name:</label>
				    <div class="input-group">
				    
				    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="uname" name="uname">
					</div>
			</div>  -->
			<!-- <div class="form-group">
				    <label for="email">Email:</label>
				    <div class="input-group">
				    
				    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="text" class="form-control" id="email" name="email">
					</div>
			</div> --> 
			<!-- <div class="form-group">
				    <label for="phone">Contact No.:</label>
				    <div class="input-group">
				    
					    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
						<input type="text" class="form-control" id="phone" name="uphone">
					</div>
			</div>  -->
			<!-- <div class="form-group">
				    <label for="address">Address:</label>
				    <div class="input-group">
				    
					    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
						<input type="text" class="form-control" id="address" name="uaddress">
					</div>
			</div>  -->
			<div class="form-group">
				<div class="imgupload upload-area">
					<label>Your photo:</label><br>
					<img class="imagePreview" alt="Upload photo">
					<input type="file" class="inputBrowse" name="parent_img" id="img" accepts="image/*">
				</div>
			</div>
			<div class="form-group">
				    <label for="Parent_occ">Occupation:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
					<input type="text" class="form-control" id="Parent_occ" name="Parent_occ">
				</div>
			</div>
			<div class="form-group">
				    <label for="parent_saving">Monthly Saving:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicons glyphicons-money"></i></span>
					<input type="text" class="form-control" id="parent_saving" name="parent_saving">
				</div>
			</div>
			<div class="form-group">
				    <label for="parent_family">Total Family Member:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicons glyphicons-family"></i></span>
					<input type="text" class="form-control" id="parent_family" name="parent_family">
				</div>
			</div> 

			<div class="form-group">
				<table >
				 	<tr >
					    <label>I am:</label>
					</tr>
					<tr>
						<td>
							<label for="single">Single</label>
							<input type="radio"  value="single" name="status" id="single">
							<label for="married">Married</label>
							<input type="radio"  value="married" name="status" id="married">
						</td>
					</tr>
				</table>
			</div> 
			<div class="form-group">
				<table >
				 	<tr >
					    <label>Sex:</label>
					</tr>
					<tr>
						<td>
							<label for="male">Male</label>
							<input type="radio"  value="male" name="sex" id="male">
							<label for="female">Female</label>
							<input type="radio"  value="female" name="sex" id="female">
						</td>
					</tr>
				</table>
			</div> 

			<div class="form-group">
				<div class="imgupload upload-area">
					<label>Citizenship photo:</label><br>
					<img class="imagePreview" alt="Upload photo">
					<input type="file" class="inputBrowse" name="ctznshp_img" id="img" accepts="image/*">
				</div>
			</div>
			@foreach($child as $chil)
			<div class="form-group">
				<input type="hidden" name="child_id" value="{{$chil->id}}">
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="submit" name="submit">
			</div>

			@endforeach
			
		</div>

		
	</form>
</div>
@endsection