@extends('admin.layouts.main')
@section('content')


<div class="content ">

	<div class="titleholder">
		<h3>These childrens are waitnig for you.Your help can make some child's future bright.</h3>
	</div>

@foreach($childs as $chil)
<div class="child_info_holder">

	<div class="child_image_holder">
		<img src="{{ Storage::url($chil->cimage)}}" alt="child's photo" width="200px;" height="200px;"/>
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
				<table style="margin-left:-8px;">
					<tr>
					<th><a href="{{route('admin.waitingchild.adopt')}}?id={{$chil->id}}" class="btn btn-primary">ADOPT</a>
						<a href="{{route('admin.waitingchild.detail')}}?id={{$chil->id}}" class="btn btn-primary"> View Detail</a></th>
						<th style="padding:5px;"><a class="btn btn-primary" href="{{route('admin.waitingchild.update')}}?id={{$chil->id}}">Update</a></th>
						<th><a class="btn btn-primary" href="{{route('child.validate.delete', $chil->id )}}" onclick="return warning()">Delete</a></th>
					</tr>
				</table>
			</tr>
		</table>
	</div>
</div>
@endforeach
</div>




@endsection