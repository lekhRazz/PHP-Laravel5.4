@extends('admin.layouts.main')
@section('content')
<div class="content">
<div class="btn_usr">
	<a class="btn btn-danger" href="{{route('admin.user.makeadmin')}}">Create Admin</a>
</div>
@foreach($usrs as $usr)
	<div class="tinycontent">
		<table class="auth_table">
			<tr>
				<th>Name</th>
				<th>:</th>
				<th>{{$usr->name}}</th>
			</tr>
			<tr>
				<th>Address</th>
				<th>:</th>
				<th>{{$usr->address}}</th>
			</tr>
			<tr>
				<th>phone</th>
				<th>:</th>
				<th>{{$usr->phone}}</th>
			</tr>
			<tr>
				<th>email</th>
				<th>:</th>
				<th>{{$usr->email}}</th>
			</tr>
			<tr>
				<table style="margin-left:0px;">
				<tr>
					
					<th><a class="btn btn-primary" href="{{route('admin.authentication.delete')}}?id={{$usr->id}}">Delete</a></th>
				</tr>
				</table>
				</tr>
			</table>
			</tr>
		</table>
	</div>
	@endforeach
</div>
@endsection