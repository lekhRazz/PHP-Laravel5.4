@extends('admin.layouts.main')
@section('content')
<div class="content">
		<form method="POST" enctype="multipart/form-data" id="uploadForm">
	{{ csrf_field() }}
	@foreach($orgs as $org)
		<div class="parentsection">
		
			<div class="form-group">
					    <label for="org_name">Organization Name:</label>
					 <div class="input-group">
						<input type="text" class="form-control" id="org_name" name="org_name" value="{{$org->org_name}}">
					</div>
			</div> 
			<div class="form-group">
					    <label for="org_address">Address:</label>
					 <div class="input-group">
						<input type="text" class="form-control" id="org_address" name="org_address" value="{{$org->org_address}}">
					</div>
			</div> 
			<div class="form-group">
					    <label for="org_phone">Telephone No.:</label>
					 <div class="input-group">
						<input type="text" class="form-control" id="org_phone" name="org_phone" value="{{$org->org_phone}}">
					</div>
			</div> 
			<div class="form-group">
					    <label for="org_email">Email:</label>
					 <div class="input-group">
						<input type="text" class="form-control" id="org_email" name="org_email" value="{{$org->org_email}}">
					</div>
			</div> 
			<div class="form-group">
				<input type="hidden" name="id" value="{{$org->id}}">
			</div>
			<div class="form-group">
				
			<input type="submit" name="submit" value="submit" class="btn btn-primary" onclick="return postWarn()">
			</div>
			
		</div>
		@endforeach
	</form>
</div>
@endsection