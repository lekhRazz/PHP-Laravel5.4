@extends('admin.layouts.main')
@section('content')
<div class="content">
	<form method="POST" enctype="multipart/form-data" id="uploadForm">
	{{ csrf_field() }}
	@foreach($membrdt as $membrdtl)

	<div class="form-group">
			<label for="year">Year:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="year" name="year" value="{{$membrdtl->year}}">
				</div>
		</div>

		<div class="form-group">
			<label for="month">Month:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="month" name="month" value="{{$membrdtl->month}}">
				</div>
		</div>
		<div class="form-group">
			<label for="present_day">Total Present Day:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="present_day" name="present_day" value="{{$membrdtl->present_day}}">
				</div>
		</div>
		
		<div class="form-group">
			<label for="membr_salary">Salary:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_salary" name="membr_salary" value="{{$membrdtl->membr_salary}}">
				</div>
		</div>
		<div class="form-group">
					<label >Salary Received:</label>
						<div class="input-group">
							<table class="member_detail_tbl">
								<tr>
									<td>
										<input type="radio" name="salary" value="recieved" id="reciev">
										<label for="reciev">Received</label>
									</td>
									<td>
										<input type="radio" name="salary" value="not recieved" id="notreciev">
										<label for="notreciev">Not Received</label>
									</td>
								</tr>
							</table>
						</div>
		</div>
		
		<div class="form-group">
			<label for="membr_sal_date">Salary Recieved Date:</label>
				<div class="input-group">
					<input type="text" class="form-control" id="membr_sal_date" name="membr_sal_date" value="{{$membrdtl->membr_sal_date}}">
				</div>
		</div>

		<div class="form-group">
			<input type="hidden" name="id" value="{{$membrdtl->id}}">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="submit" onclick="return postWarn()">
		</div>
		@endforeach
	</form>
</div>
@endsection