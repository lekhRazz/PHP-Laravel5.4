@extends('user.layout.main')
@section('content')

	<form method="POST" enctype="multipart/form-data" id="uploadForm">
  {{ csrf_field() }}
<div class="content">
@foreach($usrs as $usr)
	<div class="parentsection">
			
			<div class="form-group">
				    <label for="name">Full Name:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="name" name="name" value=" {{$usr->name }}">
					</div>
			</div> 
			<div class="form-group">
				    <label for="address">Address:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="address" name="address" value=" {{$usr->address}}">
					</div>
			</div>
			 <div class="form-group">
				    <label for="phone">Phone:</label>
				    <div class="input-group">
					<input type="text" class="form-control" id="phone" name="phone" value=" {{ $usr->phone}}">
					</div>
			</div>
			 <div class="form-group">
				    <label for="email">Email:</label>
				    <div class="input-group">
					<input type="email" class="form-control" id="email" name="email" value=" {{$usr->email}}">
					</div>
			</div> 
			<div class="form-group">
				    <label for="password">Password:</label>
				    <div class="input-group">
					<input type="password" class="form-control" id="password" name="password">
					</div>
			</div> 
			<div class="form-group">
				    <label for="password1">Confirm Password:</label>
				    <div class="input-group">
					<input type="password" class="form-control" id="password1" name="password1">
					</div>
			</div>
			<div class="form-group">
				<input type="hidden" name="id" value="{{$usr->id}}">
			</div> 
			<div class="form-group">
				<input type="submit" name="submit" value="save" class="btn btn-primary">
			</div>
		</div>
@endforeach

</div>
</form>


@endsection