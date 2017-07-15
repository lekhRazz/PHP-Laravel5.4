@extends('admin.layouts.main')
@section('content')
<div class="content ">

@foreach($prnt as $parnt)
<div class="child_info_holder">

	<div class="child_image_holder">
		<img src="{{ Storage::url($parnt->uimage)}}" alt="child's photo" width="200px;" height="200px;"/>
	</div>	
	<div class="child_detail_holder">
		<table id="child_tbl">

			<tr>
				<th>Name</th>
				<th>:</th>
				<th>{{$parnt->uname}}</th>
			</tr>
			<tr>
				<th>Email</th>
				<th>:</th>
				<th>{{$parnt->email}}</th>
			</tr>
			<tr>
				<th>Phone</th>
				<th>:</th>
				<th>{{$parnt->uphone}}</th>
			</tr>
			<tr>
				<th>Address</th>
				<th>:</th>
				<th>{{$parnt->uaddress}}</th>
			</tr>
			
			<tr>
					<th>Referenced  To</th>
					<th>:</th>
					<th>{{$parnt->child->cname}}</th>
				</tr>
			<tr>
				<table style="margin-left:-8px;">
					<tr>
					<th>
					<a  class="btn btn-primary">Message</a></th>
						
					</tr>
				</table>
			</tr>
		</table>
	</div>
</div>
@endforeach



</div>
@endsection