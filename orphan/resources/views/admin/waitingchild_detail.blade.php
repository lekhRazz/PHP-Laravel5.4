@extends('admin.layouts.main')
@section('content')
<div class="content">
@foreach($childs as $chil)
	<div class="child_info_holder">

				<div class="child_image_holder">
					<img src="{{ Storage::url($chil->cimage)}}" alt="members's photo" width="200px;" height="200px;">
				</div>	
			<div class="child_detail_holder">
				<table id="child_tbl">

					<tr>
				<th>Name</th>
				<th>:</th>
				<th>{{$chil->cname}}</th>
			</tr>
			<tr>
				<th>Age:</th>
				<th>:</th>
				<th>{{$chil->cage}}</th>
			</tr>
			<tr>
				<th>Sex</th>
				<th>:</th>
				<th>{{$chil->sex}}</th>
			</tr>
			<tr>
				<th>Education</th>
				<th>:</th>
				<th>{{$chil->education}}</th>
			</tr>
			<tr>
				<th>Health</th>
				<th>:</th>
				<th>{{$chil->health}}</th>
			</tr>
			<tr>
					<th>Referenced By</th>
					<th>:</th>
					<th><a href="{{route('admin.child.suggested')}}?id={{$chil->person->id}}">{{$chil->person->uname}}</a></th>
				</tr>
			<tr>
					

				</table>
			</div>
		</div>

		<div class="memberdetails">
		
			<table class="membertable">
				<tr>
					<th>S.N.</th>
					<th>School Name</th>
					<th>Class Performance</th>
					<th>Height</th>
					<th>Weight</th>
					<th>Blood Group</th>
					<th>Last Hospital Visit</th>
					<th>Remark</th>
				</tr>
				@foreach($cdtl as  $key => $cdtail)
				<tr>
				
					<th>{{$key+1}}</th>
					<th>{{$cdtail->wc_school}}</th>
					<th>{{$cdtail->wc_perform}}</th>
					<th>{{$cdtail->wc_height}}</th>
					<th>{{$cdtail->wc_weight}}</th>
					<th>{{$cdtail->wc_bgroup}}</th>
					<th>{{$cdtail->wc_hopital}} </th>
					<th>{{$cdtail->wc_remark}} </th>
				</tr>
				@endforeach
					
			</table>
			
		</div>
		<div class="btn_tble_update">
			<a href="{{route('child.waiting.detail.update')}}?id={{$chil->id}}" class="btn btn-primary">Update Table</a>
		</div>



@endforeach

</div>
@endsection