@extends('admin.layouts.main')
@section('content')
<div class="content">
	
	<form method="POST" enctype="multipart/form-data" id="uploadForm">
	{{csrf_field()}}

		<div class="parentsection">
			<div class="form-group">
				<div class="imgupload upload-area">
					<label>Photo:</label><br>
						<img class="imagePreview" alt="Upload photo">
						<input type="file" class="inputBrowse" name="gimage" id="img" accepts="image/*">
				</div>
			</div>

			<div class="form-group">
				<label for="img_title">Image Title:</label>
					<div class="input-group">
						<input type="text" class="form-control" id="img_title" name="img_title">
					</div>
			</div> 
			<div class="form-group">
				<label for="event">Event:</label>
					<div class="input-group">
						<input type="text" class="form-control" id="event" name="event">
					</div>
			</div> 
			<div class="form-group">
				<label for="evnt_place">place:</label>
					<div class="input-group">
						<input type="text" class="form-control" id="evnt_place" name="evnt_place">
					</div>
			</div>
			 <div class="form-group">
				<label for="evnt_date">Date:</label>
					<div class="input-group">
						<input type="text" class="form-control" id="evnt_date" name="evnt_date">
					</div>
			</div> 
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit" value="Post" onclick="return postWarn()">
			</div>

		</div>


	</form>

</div>

@endsection