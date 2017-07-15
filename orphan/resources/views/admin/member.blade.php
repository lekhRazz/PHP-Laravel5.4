@extends('admin.layouts.main')
@section('content')
<div class="content">
	<div class="member_nav">
		<div class="addmember">
			<a href="{{route('admin.member.addmember')}}" class="btn btn-danger">Add member</a>
		</div>
		<!-- <div class="input-group search" style="margin-left: 269px;padding: 6px;">
	       <input id='myInput' type="Search" onkeyup='searchTable()' placeholder="Search..." class="form-control" />
	       <div class="input-group-btn">
	           <button class="btn btn-info">
	           <span class="glyphicon glyphicon-search"></span>
	           </button>
	       </div>
	   	</div> -->
	</div>


@foreach($members as $memb)
<div class="member_info_container">

	<div class="child_image_holder">
		<img src="{{ Storage::url($memb->membrimg)}}" alt="members's photo" width="200px;" height="200px;">
	</div>	
	<div class="child_detail_holder">
		<table id="child_tbl">

			<tr>
				<th>Name</th>
				<th>:</th>
				<th>{{$memb->membr_name}}</th>
			</tr>
			<tr>
				<th>Post</th>
				<th>:</th>
				<th>{{$memb->member_post}}</th>
			</tr>
			<tr>
				<th>Email</th>
				<th>:</th>
				<th>{{$memb->membr_email}}</th>
			</tr>
			<tr>
				<th>Address</th>
				<th>:</th>
				<th>{{$memb->membr_addr}}</th>
			</tr>
			<tr>
				<th>Phone No.</th>
				<th>:</th>
				<th>{{$memb->membr_phone}}</th>
			</tr>
			<tr>
				<th>Sex</th>
				<th>:</th>
				<th>{{$memb->sex}}</th>
			</tr>
			<tr>
				<th>Working</th>
				<th>:</th>
				<th>{{$memb->membr_exprnc}}</th>
			</tr>
		<tr>
				<th>Qualification</th>
				<th>:</th>
				<th>{{$memb->membr_qulifi}}</th>
		</tr>
		
		<tr>
				<table style="margin-left:-8px;">
					<tr>
					<th>
					<a class="btn btn-primary" href="{{route('admin.member.memberdetail')}}?id={{$memb->id}}">View Detail</a>
					</th>
						<th style="padding:5px;">
						<a class="btn btn-primary" href="{{route('admin.member.edit')}}?id={{$memb->id}}">Edit</a>
						</th>
						<th>
						<a class="btn btn-primary" href="{{route('admin.member.delete')}}?id={{$memb->id}}" onclick="return warning()">Delete</a>
						</th>
					</tr>
				</table>
		</tr>
		



		</table>
	</div>
</div>


@endforeach

<!-- <script>
function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("child_tbl");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("th");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script> -->






</div>
@endsection