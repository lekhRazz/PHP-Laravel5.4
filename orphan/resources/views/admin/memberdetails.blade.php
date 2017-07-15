@extends('admin.layouts.main')
@section('content')
<div class="content">

@foreach($members as $memb)
		<div class="child_info_holder">

				<div class="child_image_holder">
					<img src="{{ Storage::url($memb->membrimg)}}" alt="members's photo" width="200px;" height="200px;">
				</div>	
			<div class="child_detail_holder">
				<table id="child_tbl">

					<tr>
						<th>Name</th>
						<th>:</th>
						<th>{{$memb->membr_name}}</th>
					</tr>
					<tr>
						<th>Post</th>
						<th>:</th>
						<th>{{$memb->member_post}}</th>
					</tr>
					<tr>
						<th>Email</th>
						<th>:</th>
						<th>{{$memb->membr_email}}</th>
					</tr>
					<tr>
						<th>Address</th>
						<th>:</th>
						<th>{{$memb->membr_addr}}</th>
					</tr>
					<tr>
						<th>Phone No.</th>
						<th>:</th>
						<th>{{$memb->membr_phone}}</th>
					</tr>
					<tr>
						<th>Sex</th>
						<th>:</th>
						<th>{{$memb->sex}}</th>
					</tr>
			
					<tr>
						<th>Working</th>
						<th>:</th>
						<th>{{$memb->membr_exprnc}}</th>
					</tr>
					<tr>
						<th>Qualification</th>
						<th>:</th>
						<th>{{$memb->membr_qulifi}}</th>
					</tr>

				</table>
			</div>
		</div>

		<div class="memberdetails">
			<table class="membertable">
				<tr>
					<th>S.N.</th>
					<th>Year</th>
					<th>Month</th>
					<th>Total Present day</th>
					<th>Salary</th>
					<th>Salary Received</th>
					<th>Salary Recieved date</th>
					<th>Action</th>
				</tr>
				@foreach($membrdt as $key=> $membrdtl)
				<tr>
					<th>{{$key+1}}</th>
					<th>{{$membrdtl->year}}</th>
					<th>{{$membrdtl->month}}</th>
					<th>{{$membrdtl->present_day}}</th>
					<th>{{$membrdtl->membr_salary}}</th>
					<th>{{$membrdtl->salary}}</th>
					<th>{{$membrdtl->membr_sal_date}}</th>
					<th>
					<a href="{{route('admin.member.detailtable.edit')}}?id={{$membrdtl->id}}">Edit</a>|
					<a href="{{route('admin.member.detailtable.delete')}}?id={{$membrdtl->id}}">Delete</a>
					</th>
				</tr>
				@endforeach
			</table>
		</div>
		<div class="btn_tble_update">
			<a href="{{route('admin.member.memberdetail.update')}}?id={{$memb->id}}" class="btn btn-primary">Add Record</a>
		</div>

@endforeach

</div>
@endsection	
