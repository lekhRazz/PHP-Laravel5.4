@extends('user.layout.main')
@section('content')
<div class="content">
	<div class="info">
		<p><marquee><b>Following members belong to this organizations</b></marquee></p>
	</div>


@foreach($members as $memb)
<div class="child_info_holder">

<div class="child_image_holder">
	<img src="{{ Storage::url($memb->membrimg)}}" alt="members's photo" width="200px;" height="200px;">
</div>	
<div class="child_detail_holder">
	<table>

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
@endforeach	
</div>

@endsection