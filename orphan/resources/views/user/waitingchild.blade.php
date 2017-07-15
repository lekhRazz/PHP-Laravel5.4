@extends('user.layout.main')
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
		<td>
				<a class="btn btn-primary" id="btn_adpt" href="/home/waitingchild/agreement?id={{$chil->id}}"><b>ADOPT ME</b></a>
		</td>
	</tr>
	</table>
</div>
</div>
@endforeach
</div>

 

@endsection