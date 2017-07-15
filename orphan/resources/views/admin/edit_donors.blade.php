@extends('admin.layouts.main')
@section('content')
<div class="content">
<form method="POST" enctype="multipart/form-data" id="uploadForm">
@foreach($donations as $donation)
				
	{{ csrf_field() }}

	<div class="donation_field">
			<div style="border-bottom:1px solid black;margin-bottom: 10px;">
					<b>Donation field</b>
			</div>

			<div class="form-group">
				<div class="imgupload upload-area">
					<label>Your photo:</label><br>
					<img class="imagePreview" alt="Upload photo" src="{{ Storage::url($donation->donator->dimage)}}">
						<input type="file" class="inputBrowse" name="dimage" id="img" accepts="image/*">
				</div>
			</div>

			<div class="form-group">
				<label for="dname">Full Name:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" class="form-control" id="dname" name="dname" value="{{$donation->donator->dname}}">
			    </div>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="text" class="form-control" id="email" name="demail" value="{{$donation->donator->demail}}">
				</div>
			</div> 

			<div class="form-group">
				<label for="phone">Contact No.:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				<input type="text" class="form-control" id="phone" name="dphone" value="{{$donation->donator->dphone}}">
				</div>
			</div> 

			<div class="form-group">
				<label for="dadd">Address:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
				<input type="text" class="form-control" id="dadd" name="daddress" value="{{$donation->donator->daddress}}">
				</div>
			</div> 
			<div class="form-group">
				<label for="docc">Occupation:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
				<input type="text" class="form-control" id="docc" name="doccupation" value="{{$donation->donator->doccupation}}">
				</div>
			</div>
			<div class="form-group">
				<label for="dbnk">Bank/Hand Cash:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
				<input type="text" class="form-control" id="dbnk" name="dbank" placeholder="if donated through bank specify the bank name/or hand cash" value="{{$donation->bank_name}}">
				</div>
			</div>
			 <div class="form-group">
				<label for="d_date">Donation Date:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				<input type="text" class="form-control" id="d_date" name="d_date" placeholder="YYYY/MM/DD--------DD/MM/YYYY" value="{{$donation->d_date}}">
				</div>
			</div> 

			<div class="form-group">
				<label for="damnt">Amount:</label>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
				<input type="text" class="form-control" id="damnt" name="damount" value="{{$donation->damount}}">
				</div>
			</div> 

			<div class="form-group">
				<div class="imgupload upload-area">
					<label>Voucher photo:</label><br>
					<img class="imagePreview" alt="Upload photo" src="{{ Storage::url($donation->voucher)}}">
					<input type="file" class="inputBrowse" name="voucher" id="img" accepts="image/*">
				</div>
			</div>
			<div class="form-group">
				<input type="hidden" name="d_id" value="{{$donation->donator->id}}">
			</div>
			<div class="form-group">
				<input type="hidden" name="id" value="{{$donation->id}}">
			</div>
		    <div class="form-group">
			     <input class="btn btn-primary" type="submit" value="submit" name="submit" onclick="return postWarn()">
		    </div>
	</div>
	@endforeach
</form>




	
</div>
@endsection