@extends('admin.layouts.main')
@section('content')
<div class="content">
	<div class="gallery_add">
		<a class="btn btn-danger" href="{{route('admin.gallery.newad')}}">Add New Gallery</a>
	</div>
	<div class="titleholder">
		<h3>These are the precious moment at Orphan Child Care and Adoption Center.</h3>
	</div>

	@foreach($galle as $gal)
<div class="gallerypocket">

		<div class="single_image">
			<img src="{{ Storage::url($gal->gimage)}}" alt="gallery image" width="700px;" height="350px;">
		</div>
	<div class="gallery_detail">
				<span id ="g_photo_title">{{$gal->img_title}}</span>
			<table id="g_photo_detail">
			<!-- <tr >
				<td colspan="2">Our organization's founder Mr.Lekh Raj Rokaya</td>
				</tr> -->
					<tr>
						<th>Event</th>
						<th>:</th>
						<th>{{$gal->event}}</th>
					</tr>
					<tr>
						<th>Place</th>
						<th>:</th>
						<th>{{$gal->evnt_place}}</th>
					</tr>
					<tr>
						<th>Date</th>
						<th>:</th>
						<th>{{$gal->evnt_date}}</th>
					</tr>
					<tr>
						<table style="margin-left: 95px;">
						<tr>
							<th style="padding:5px;"><a class="btn btn-primary" href="{{route('admin.gallery.edit')}}?id={{$gal->id}}">Edit</a></th>
							<th><a class="btn btn-primary" href="{{route('admin.gallery.delete')}}?id={{$gal->id}}" onclick="return warning()">Delete</a></th>
						</tr>
						</table>
					</tr>
			</table>
	</div>

	
</div>
@endforeach
</div>
@endsection