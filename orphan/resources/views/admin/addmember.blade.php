@extends('admin.layouts.main')
@section('content')
<div class="content">

	<form method="POST" enctype="multipart/form-data" id="uploadForm">
	{{ csrf_field() }}
	<div class="parentsection">



		<div class="form-group{{ $errors->has('membrimg')?' has-error':'' }}">
			<div class="imgupload upload-area">
				<label>Member's Photo:</label><br>
					<img class="imagePreview" alt="Upload photo">
					<input type="file" class="inputBrowse" id="imgInp" name="membrimg" id="img" accepts="image/*" value="{{ old('membr_name') }}" required autofocus>

                @if ($errors->has('membrimg'))
                    <span class="help-block">
                        <strong>{{ $errors->first('membrimg') }}</strong>
                    </span>
                @endif
			</div>
		</div>



		<div class="form-group{{ $errors->has('membr_name')?' has-error':'' }}">
	      	<label for="membr_name">Name</label>
	        <div class="input-group">
	            <input id="membr_name" type="text" class="form-control" name="membr_name" value="{{ old('membr_name') }}" required autofocus>
	                @if ($errors->has('membr_name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('membr_name') }}</strong>
	                    </span>
	                @endif
	            </div>
	    </div> 


		<div class="form-group{{ $errors->has('member_post')?' has-error':'' }}">
			<label for="member_post">Post:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="member_post" name="member_post" value="{{ old('member_post') }}" required autofocus>
					@if ($errors->has('member_post'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('member_post') }}</strong>
	                    </span>
	                @endif
				</div>
		</div> 


		<div class="form-group{{ $errors->has('membr_email')?' has-error':'' }}">
			<label for="membr_email">Email:</label>
				<div class="input-group">
					<input type="email" class="form-control" id="membr_email" name="membr_email" value="{{ old('membr_email') }}" required autofocus>
					@if ($errors->has('membr_email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('membr_email') }}</strong>
	                    </span>
	                @endif
				</div>
		</div>


		<div class="form-group{{ $errors->has('membr_addr') ? ' has-error' : '' }}">
			<label for="membr_addr">Address:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_addr" name="membr_addr" value="{{ old('membr_addr') }}" required autofocus>
				</div>
				@if ($errors->has('membr_addr'))
                    <span class="help-block">
                        <strong>{{ $errors->first('membr_addr') }}</strong>
                    </span>
                @endif
		</div>


		<div class="form-group{{ $errors->has('membr_phone') ? ' has-error' : '' }}">
			<label for="membr_phone">Phone No:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_phone" name="membr_phone" value="{{ old('membr_phone') }}" required autofocus>
				</div>
				@if ($errors->has('membr_phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('membr_phone') }}</strong>
                    </span>
                @endif
		</div>



		<div class="form-group">
			<label >Sex:</label>
				<div class="input-group">
					<table class="member_detail_tbl">
						<tr>
							<td>
							<label for="male">Male</label>
							<input type="radio" name="sex" value="male" id="male" required>
							</td>
							<td>
							<label for="female">Female</label>
							<input type="radio" name="sex" value="female" id="female" required>
							</td>
						</tr>
					</table>
				</div>
		</div>

		 <div class="form-group{{ $errors->has('membr_exprnc') ? ' has-error' : '' }}">
			<label for="membr_exprnc">Working:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_exprnc" name="membr_exprnc" value="{{ old('membr_exprnc') }}" required autofocus>
					@if ($errors->has('membr_exprnc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('membr_exprnc') }}</strong>
                    </span>
                	@endif

				</div>
		</div> 


		<div class="form-group{{ $errors->has('membr_qulifi') ? ' has-error' : '' }}">
			<label for="membr_qulifi">Qualification:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_qulifi" name="membr_qulifi" value="{{ old('membr_qulifi') }}" required autofocus>
					@if ($errors->has('membr_qulifi'))
                    <span class="help-block">
                        <strong>{{ $errors->first('membr_qulifi') }}</strong>
                    </span>
                	@endif
				</div>
		</div> 


		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Post">
		</div>



	</div>
	</form>




</div>
@endsection