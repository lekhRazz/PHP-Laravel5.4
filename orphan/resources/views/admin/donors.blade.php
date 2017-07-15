@extends('admin.layouts.main')
@section('content')
<div class="content">
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
					<th>Contact No.</th>
					<th>:</th>
					<th>{{$donation->donator->dphone}}</th>
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
			
				<tr>
					<th>Donation Date</th>
					<th>:</th>
					<th>{{$donation->d_date}}</th>
			    </tr>
				
				<tr>
					<table class="child_table">
						<tr>
							<th style="padding:5px;"><a class="btn btn-primary" href="#">Message</a></th>
							<th><a class="btn btn-primary" href="{{route('admin.donor.edit')}}?id={{$donation->id}}">Edit</a></th>
							<th><a class="btn btn-primary" href="{{route('admin.donor.delete')}}?id={{$donation->donator->id}}" onclick="return warning()">Delete</a></th>
						</tr>
					</table>
				</tr>

			</table>
		</div>
</div>


@endforeach

</div>
@endsection