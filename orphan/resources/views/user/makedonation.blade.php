@extends('user.layout.main')
@section('content')
<div class="content">
<form method="POST" enctype="multipart/form-data" id="uploadForm">
<div class="titleholder">
	<h3>Let the children smile forever.Your help can make some child's future bright.</h3>
</div>

{{ csrf_field() }}
<div class="donation_field">
<div style="border-bottom:1px solid black;margin-bottom: 10px;"><b>Donation field</b></div>

	<div class="form-group">
			<div class="imgupload upload-area">
			<label>Your photo:</label><br>
				<img class="imagePreview" alt="Upload photo">
				<input type="file" class="inputBrowse" name="dimage" id="img" accepts="image/*">
			</div>
	</div>

	<div class="form-group">
		<label for="dname">Full Name:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" class="form-control" id="dname" name="dname">
	    </div>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input type="text" class="form-control" id="email" name="demail">
		</div>
	</div> 

	<div class="form-group">
		<label for="phone">Contact No.:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		<input type="text" class="form-control" id="phone" name="dphone">
		</div>
	</div> 

	<div class="form-group">
		<label for="dadd">Address:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		<input type="text" class="form-control" id="dadd" name="daddress">
		</div>
	</div> 
	<div class="form-group">
		<label for="docc">Occupation:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
		<input type="text" class="form-control" id="docc" name="doccupation">
		</div>
	</div>
	 <div class="form-group">
		<label for="dbnk">Bank Name:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
		<input type="text" class="form-control" id="dbnk" name="dbank" placeholder="bank name with location">
		</div>
	</div> 

	<div class="form-group">
		<label for="damnt">Amount:</label>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
		<input type="text" class="form-control" id="damnt" name="damount">
		</div>
	</div> 

	<div class="form-group">
			<div class="imgupload upload-area">
			<label>Voucher photo:</label><br>
			<img class="imagePreview" alt="Upload photo">
			<input type="file" class="inputBrowse" name="voucher" id="img" accepts="image/*">
			</div>
	</div>
    <div class="form-group">
	     <input class="btn btn-primary" type="submit" value="submit" name="submit">
    </div>
</div>
</form>
</div>
@endsection