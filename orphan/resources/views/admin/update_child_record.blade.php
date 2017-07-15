@extends('admin.layouts.main')
@section('content')

<form method="POST" enctype="multipart/form-data" id="uploadForm">
@foreach($childs as $chil)
		
		<fieldset>
		<legend><mark>Register Here</mark></legend>
  
<div class="content">

{{ csrf_field() }}

	<div class="parentsection">

			<div class="section_title">
				<b>Child Information</b>
			</div>
	
			<div class="form-group">
				    <label for="cname">Full Name:</label>
				    <div class="input-group">
				    
				    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" class="form-control" id="cname" name="cname" value="{{$chil->cname}}">
					</div>
			</div> 
			
			<div class="form-group">
				    <label for="cage">Age:</label>
				    <div class="input-group">
				    
				    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input type="text" class="form-control" id="cage" name="cage" value="{{$chil->cage}}">
					</div>
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
				<label for="study">Education:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
					<input type="text" class="form-control" id="study" name="education" value="{{$chil->education}}">	
				</div>
			</div>

			<div class="form-group">
					<label>Health:</label>
				<div class="input-group">
					<select name="health" value="{{$chil->health}}">
					
						<option value="good">good</option>
						<option value="handicapped">handicapped</option>
					</select>
				</div>
			</div>
			
			<div class="form-group upload-area">
				<label>Photo of Child:</label><br>
				<img class="imagePreview" alt="Upload photo" src="{{ Storage::url($chil->cimage)}}">
   				 <input type='file' class="inputBrowse" id="imgInp" value="image" name="cimage"/ >
			</div>

			<div class="form-group">
				    <label for="cphone">Police/VDC/Municipility Phone no.:</label>
				    <div class="input-group">
				    
				    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
					<input type="text" class="form-control" id="cphone" name="refphone" value="{{$chil->refphone}}">
					</div>
			</div> 


		<div class="form-group upload-area">
				<label>Photo of Orphan Certificate:</label><br>
				<img class="imagePreview" alt="Upload if available" src="{{ Storage::url($chil->refimage)}}">
   				<input type='file' class="inputBrowse" id="imgInp" value="image" name="refimage"/>
		</div>
		<div class="form-group">
			<input type="hidden" name="id" value="{{$chil->id}}">
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="submit" name="submit">
		</div>

	</div>

</div>

	
		</fieldset>
@endforeach
	</form>

@endsection