@extends('admin.layouts.main')
@section('content')
<div class="content">
@foreach($childs as $chil)
<div class="child_valid_cont">

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
					<th>Police/VDC phone</th>
					<th>:</th>
					<th>{{$chil->refphone}}</th>
				</tr>
				<tr>
					<th>Referenced By</th>
					<th>:</th>
					<th><a href="{{route('admin.child.suggested')}}?id={{$chil->person->id}}">{{$chil->person->uname}}</a></th>
				</tr>
				<tr>
					<th>Certificate</th>
					<th>:</th>
					<th>
						<div class="child_image_holder">
							<img src="{{ Storage::url($chil->refimage)}}" alt="child's photo" width="200px;" height="200px;"/>
							<!-- <button class="btn btn-primary btn-sm" data-target="#imageUpload" data-toggle="modal">View Image</button> -->
						</div>
					</th>
				</tr>
				
				<tr>
					<table style="margin-left:-8px;">
						<tr>
							<th style="padding:5px;"><a class="btn btn-primary" href="{{route('child.validate.val')}}?id={{$chil->id}}"">Validate</a></th>
							<th><a class="btn btn-primary" href="{{route('child.validate.delete', $chil->id )}}" onclick="return warning()">Delete</a></th>
						</tr>
					</table>
				</tr>
			
		</table>
		<!-- <div class="modal" id="imageUpload" tabindex="-1">
				<div class="modal-dialog popupImg">
					 <div class="modal-content">
					 	<div class="modal-header">
					 		<button class="close" data-dismiss="modal">&times;</button>
					 		<h4 class="modal-title">Certificate Image</h4>
					 	</div>
					 	<div class="modal-body">
					 		
					 		<img src="{{ Storage::url($chil->cimage)}}" alt="child's photo" width="550px;" height="550px;"/>
								
					 	</div>
					 	<div class="modal-footer">
	
					 		<button class="btn btn-primary" data-dismiss="modal">Close</button>
					 	</div>
					 </div>
				</div>
			</div> -->
	</div>
</div>
	@endforeach
</div>
@endsection