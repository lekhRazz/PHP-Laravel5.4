@extends('admin.layouts.main')
@section('content')
<div class="content">
	
	<form method="POST" enctype="multipart/form-data" id="uploadForm">
	{{ csrf_field() }}
@foreach($members as $memb)
	<div class="parentsection">
		<div class="form-group">
			<div class="imgupload upload-area">
				<label>Member's Photo:</label><br>
					<img class="imagePreview" alt="Upload photo" src="{{ Storage::url($memb->membrimg)}}">
					<input type="file" class="inputBrowse" name="membrimg" id="img" accepts="image/*">
			</div>
		</div>

		<div class="form-group">
			<label for="membr_name">Name:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_name" name="membr_name" value="{{$memb->membr_name}}">
				</div>
		</div> 
		<div class="form-group">
			<label for="member_post">Post:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="member_post" name="member_post" value="{{$memb->member_post}}">
				</div>
		</div> 
		<div class="form-group">
			<label for="membr_email">Email:</label>
				<div class="input-group">
					<input type="email" class="form-control" id="membr_email" name="membr_email" value="{{$memb->membr_email}}">
				</div>
		</div>
		 <div class="form-group">
			<label for="membr_exprnc">Working:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_exprnc" name="membr_exprnc" value="{{$memb->membr_exprnc}}">
				</div>
		</div> 
		<div class="form-group">
			<label for="membr_qulifi">Qualification:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_qulifi" name="membr_qulifi" value="{{$memb->membr_qulifi}}">
				</div>
		</div> 
		<div class="form-group">
			<input type="hidden" name="id" value="{{$memb->id}}">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Post" onclick="return postWarn()">
		</div>



	</div>
	@endforeach
	</form>




</div>
@endsection