@extends('user.layout.main')
@section('content')
<form method="POST" enctype="multipart/form-data" id="uploadForm">

	<div class="content">

	{{ csrf_field() }}

			<div class="form-group">
				<div class="imgupload upload-area">
				<label>Your photo:</label><br>
					<img class="imagePreview" alt="Upload photo">
					<input type="file" class="inputBrowse" name="usr_img" id="img" accepts="image/*">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="save" class="btn btn-primary">
			</div>	

	</div>
</form>
@endsection