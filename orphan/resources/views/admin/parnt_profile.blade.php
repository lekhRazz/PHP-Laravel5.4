@extends('admin.layouts.main')
@section('content')

<div class="content ">

<div class="titleholder">
	<h3>These childrens are waitnig for you.Your help can make some child's future bright.</h3>
</div>

@foreach($usrs as $usr)
	<div class="child_info_holder">

			<div class="child_image_holder">
				<img src="{{ Storage::url($usr->person_dtl->parent_img)}}" alt="parent's photo" width="200px;" height="200px;"/>
			</div>	
		<div class="child_detail_holder">
			<table id="child_tbl">

				<tr>
					<th>Name</th>
					<th>:</th>
					<th>{{$usr->name}}</th>
				</tr>
				<tr>
					<th>Address:</th>
					<th>:</th>
					<th>{{$usr->address}}</th>
				</tr>
				<tr>
					<th>Phone</th>
					<th>:</th>
					<th>{{$usr->phone}}</th>
				</tr>
				<tr>
					<th>Email</th>
					<th>:</th>
					<th>{{$usr->email}}</th>
				</tr>
			    <tr>
					<th>Occupation</th>
					<th>:</th>
					<th>{{$usr->person_dtl->Parent_occ}}</th>
				</tr>
				<tr>
					<th>Monthly Saving</th>
					<th>:</th>
					<th>{{$usr->person_dtl->parent_saving}}</th>
				</tr>
				<tr>
					<th>Family Member</th>
					<th>:</th>
					<th>{{$usr->person_dtl->parent_family}}</th>
				</tr>
				<tr>
					<th>Merital status</th>
					<th>:</th>
					<th>{{$usr->person_dtl->status}}</th>
				</tr>
				<tr>
					<th>sex</th>
					<th>:</th>
					<th>{{$usr->person_dtl->sex}}</th>
				</tr>
				
				<tr>
					<table style="margin-left:-8px;">
						<tr>
							<th style="padding:5px;"><a class="btn btn-primary" href="#">Message</a></th>
							
						</tr>
					</table>
				</tr>
			</table>
			
		</div>
	</div>
@endforeach

</div>




@endsection