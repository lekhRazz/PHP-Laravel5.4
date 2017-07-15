@extends('user.layout.main')
@section('content')
<div class="content">
<div class="titleholder">
	<h3>This organization is hearthly thankful to these people for helping us.</h3>
</div>
<div class="donation_info">
<!-- <nav style="padding:5px;">
	<a class="btn btn-danger" href="/home/donation/makedonation"><b>Make Donation</b></a>
</nav> -->
<div class="bank_detail">
	<span style="color:#641E16;"><b>For your donation check our bank account detail:</b></span>
	<table>
		<tr>
			<th>Investment Bank Ltd.</th>
			<th>A/C no. 12345678958878</th>
		</tr>
		<tr>
			<th>Siddhartha Bank Ltd.</th>
			<th>A/C no. 234567890123</th>
		</tr>
		<tr>
			<th>Global IME Bank Ltd.</th>
			<th>A/C no. 3456789012345</th>
		</tr>
	</table>
</div>
</div>

@foreach($donations as $donation)

<div class="child_info_holder">

<div class="child_image_holder">

	<img src="{{ Storage::url($donation->donator->dimage)}}" alt="sponser's photo" width="200px;" height="200px;">
</div>	
<div class="child_detail_holder">
	<table id ="donation_tbl">

		<tr>
			<th>Name</th>
			<th>:</th>
			<th>{{$donation->donator->dname}}</th>
		</tr>

		<tr>
			<th>Email</th>
			<th>:</th>
			<th>{{$donation->donator->demail}}</th>
		</tr>
		
		<tr>
			<th>Address</th>
			<th>:</th>
			<th>{{$donation->donator->daddress}}</th>
		</tr>
	    <tr>
			<th>Occupation</th>
			<th>:</th>
			<th>{{$donation->donator->doccupation}}</th>
		</tr>

	    <tr>
			<th>Amount</th>
			<th>:</th>
			<th>{{$donation->damount}}</th>
	    </tr>
	

	</table>
</div>
</div>
@endforeach

</div>
@endsection