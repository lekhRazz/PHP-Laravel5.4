
@extends('user.layout.main')
@section('content')


	<form method="POST" enctype="multipart/form-data" id="uploadForm">
		
		<fieldset>
		<legend><mark>Register Here</mark></legend>
  
<div class="content">

{{ csrf_field() }}
		<div class="parentsection">
			<div class="section_title">
				<b>Applicant Information</b>
			</div>
	
			<div class="form-group{{ $errors->has('uname')?' has-error':'' }}">
				    <label for="uname">Full Name:</label>
				    <div class="input-group">
				   <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
					<input type="text" class="form-control" id="uname" name="uname" value="{{ old('uname') }}">
					@if ($errors->has('uname'))
		                    <span class="help-block">
		                        <strong>Enter the valid name</strong>
		                    </span>
	                @endif
					</div>
			</div> 

			<div class="form-group{{ $errors->has('email')?' has-error':'' }}">
				    <label for="email">Email:</label>
				    <div class="input-group">
				    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span> -->
					<input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
					@if ($errors->has('email'))
		                    <span class="help-block">
		                        <strong>Enter the valid email</strong>
		                    </span>
	                @endif
					</div>
			</div> 

			<div class="form-group{{ $errors->has('uphone')?' has-error':'' }}">
				    <label for="phone">Contact No.:</label>
				    <div class="input-group">
				    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> -->
					<input type="text" class="form-control" id="phone" name="uphone" value="{{ old('uphone') }}">
					@if ($errors->has('uphone'))
		                    <span class="help-block">
		                        <strong>Enter the valid phone number</strong>
		                    </span>
	                @endif
					</div>
			</div> 

			<div class="form-group{{ $errors->has('uaddress')?' has-error':'' }}">
				    <label for="address">Address:</label>
				    <div class="input-group">
				   <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span> -->
					<input type="text" class="form-control" id="address" name="uaddress" value="{{ old('uaddress') }}">
					@if ($errors->has('uaddress'))
		                    <span class="help-block">
		                        <strong>Enter the valid address</strong>
		                    </span>
	                @endif
					</div>
			</div> 
			
			<div class="form-group{{ $errors->has('uimage')?' has-error':'' }}">
				<div class="imgupload upload-area">
				<label>Your photo:</label><br>
					<img class="imagePreview" alt="Upload photo"  src="{{ old('uimage')}}">
					<input type="file" class="inputBrowse" name="uimage" id="img" accepts="image/*">
				</div>
				@if ($errors->has('uimage'))
		                    <span class="help-block">
		                        <strong>Check the valid Image</strong>
		                    </span>
	            @endif
			</div>
		</div>




		<div class="parentsection">
		
			<div class="section_title">
				<b>Child Information</b>
			</div>
	
			<div class="form-group{{ $errors->has('cname')?' has-error':'' }}">
				    <label for="cname">Full Name:</label>
				    <div class="input-group">
				    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
					<input type="text" class="form-control" id="cname" name="cname" value="{{ old('cname') }}">
					@if ($errors->has('cname'))
		                    <span class="help-block">
		                        <strong>Enter the valid name</strong>
		                    </span>
	                @endif
					</div>
			</div> 
			
			<div class="form-group{{ $errors->has('cage')?' has-error':'' }}">
				    <label for="cage">Age:</label>
				    <div class="input-group">
				    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> -->
					<input type="text" class="form-control" id="cage" name="cage" value="{{ old('cage') }}">
					@if ($errors->has('cage'))
		                    <span class="help-block">
		                        <strong>Enter the age below 16</strong>
		                    </span>
	                @endif
					</div>
			</div> 
			
			<div class="form-group{{ $errors->has('sex')?' has-error':'' }}">
				<table >
				 	<tr >
					    <label>Sex:</label>
					</tr>
					<tr>
						<td>
							<label for="male">Male</label>
							<input type="radio"  value="male" name="sex" id="male" value="{{ old('sex') }}">
							<label for="female">Female</label>
							<input type="radio"  value="female" name="sex" id="female" value="{{ old('sex') }}">
						</td>
					</tr>
				</table>
				@if ($errors->has('sex'))
		                    <span class="help-block">
		                        <strong>Check the sex field</strong>
		                    </span>
	            @endif
			</div> 

			<div class="form-group{{ $errors->has('education')?' has-error':'' }}">
				<label for="study">Education:</label>
				<div class="input-group">
					<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span> -->
					<input type="text" class="form-control" id="study" name="education" value="{{ old('education') }}">
					@if ($errors->has('education'))
		                    <span class="help-block">
		                        <strong>Enter the valid Educatioin</strong>
		                    </span>
	                @endif	
				</div>
			</div>

			<div class="form-group{{ $errors->has('health')?' has-error':'' }}">
			<label>Health:</label>
			<div class="input-group">
				<select name="health">
					<option value="good">good</option>
					<option value="handicapped">handicapped</option>
				</select>
				@if ($errors->has('health'))
		                    <span class="help-block">
		                        <strong>Check the  Health Field</strong>
		                    </span>
	            @endif
				</div>
			</div>
			
			<div class="form-group{{ $errors->has('cimage')?' has-error':'' }} upload-area">
			<label>Photo of Child:</label><br>
				<img class="imagePreview" alt="Upload photo">
   				 <input type='file' class="inputBrowse" id="imgInp" value="image" name="cimage"/>
   				 @if ($errors->has('cimage'))
		                    <span class="help-block">
		                        <strong>Check the valid Image</strong>
		                    </span>
	                @endif
			</div>

			<div class="form-group{{ $errors->has('refphone')?' has-error':'' }}">
				    <label for="cphone">Police/VDC/Municipility Phone no.:</label>
				    <div class="input-group">
				    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span> -->
					<input type="text" class="form-control" id="cphone" name="refphone" value="{{ old('refphone') }}">
					@if ($errors->has('refphone'))
		                    <span class="help-block">
		                        <strong>Enter the valid phone number</strong>
		                    </span>
	                @endif
					</div>
			</div> 


			<div class="form-group upload-area{{ $errors->has('refimage')?' has-error':'' }}">
			<label>Photo of Orphan Certificate:</label><br>
				<img class="imagePreview" alt="Upload if available">
   				 <input type='file' class="inputBrowse" id="imgInp" value="image" name="refimage"/>
   				 @if ($errors->has('refimage'))
		                    <span class="help-block">
		                        <strong>Check the valid Image</strong>
		                    </span>
	            @endif
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="submit" name="submit">
			</div>

		</div>

</div>

	
		</fieldset>
	</form>
	<!-- <script type="text/javascript">
	function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});


	</script> -->
@endsection