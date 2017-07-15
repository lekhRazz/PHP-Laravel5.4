@extends('admin.layouts.main')
@section('content')

<div class="content ">

<!-- <form method="POST" class="navbar-form navbar-right">
 -->   <!-- <div class="input-group">
       <input type="Search" placeholder="Search..." class="form-control" />
       <div class="input-group-btn">
           <button class="btn btn-info">
           <span class="glyphicon glyphicon-search"></span>
           </button>
       </div>
   </div> -->

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
						<th>Suggested By</th>
						<th>:</th>
						<th><a href="{{route('admin.child.suggested')}}?id={{$chil->person->id}}">{{$chil->person->uname}}</a></th>
					</tr>
					<tr>
						<th>Sponsor</th>
						<th>:</th>
						<th><a href="{{route('admin.child.parent')}}?id={{$chil->user->id}}">{{$chil->user->name}}</a></th>
					</tr>
					
					<tr>
						<table style="margin-left:-8px;">
							<tr>
								<th style="padding:5px;"><a class="btn btn-primary" href="{{route('child.adopted.detail')}}?id={{$chil->id}}">View Detail</a></th>
								<th><a class="btn btn-primary" href="#" onclick="return warning()">Delete</a></th>
							</tr>
						</table>
					</tr>
			</table>
		
		
	</div>
</div>
@endforeach
<!-- </form> -->

</div>


@endsection