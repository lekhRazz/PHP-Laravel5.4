@extends('user.layout.main')
@section('content')
<div class="content">
@foreach($usrs as $usr)
<div class="user_container">
<form method="POST" enctype="multipart/form-data" id="uploadForm">
	{{ csrf_field() }}

	<div class="img_section">
		  
		<ul class="Profile_holder">

			<li>
			<div class="user_img_holder">
			@foreach($imgs as $img)
				<img src="{{Storage::url($img->usr_img)}}" id="usrimg" alt="user image">
			@endforeach
			</div>
			</li>
			<li>
			<a data-target="#imageUpload" data-toggle="modal" class="btn btn-primary">Upload Image</a>
			</li>
		</ul>
	</div>

			<div class="modal" id="imageUpload" tabindex="-1">
				<div class="modal-dialog">
					 <div class="modal-content">
					 	<div class="modal-header">
					 		<button class="close" data-dismiss="modal">&times;</button>
					 		<h4 class="modal-title">Uplaod Image</h4>
					 	</div>
					 	<div class="modal-body">
					 		<!-- <form method="POST" enctype="multipart/form-data" id="uploadForm">
								{{ csrf_field() }} -->
								<div class="form-group">
									<div class="imgupload upload-area">
									<label>Your photo:</label><br>
										<img class="imagePreview" alt="Upload photo">
										<input type="file" class="inputBrowse" name="uimage" id="img" accepts="image/*">
									</div>
								</div>
							<!-- </form> -->
					 	</div>
					 	<div class="modal-footer">
					 		<input class="btn btn-primary" type="submit" name="submit4" value="upload">
					 		<button class="btn btn-primary" data-dismiss="modal">Close</button>
					 	</div>
					 </div>
				</div>
			</div>

			<div class="modal" id="changeName" tabindex="-1">
				<div class="modal-dialog">
					 <div class="modal-content">
					 	<div class="modal-header">
					 		<button class="close" data-dismiss="modal">&times;</button>
					 		<h4 class="modal-title">Change Name</h4>
					 	</div>
					 	<div class="modal-body">
					 	<!-- <form method="POST" enctype="multipart/form-data" id="uploadForm">
							{{ csrf_field() }} -->
							<div class="form-group">
								<label for="name">Full Name:</label>
								<div class="input-group">
									<input type="text" class="form-control" id="name" name="name" value=" {{$usr->name }}">
								</div>
							</div> 
							<div class="form-group">
								<input type="hidden" name="u_id" value="{{$usr->id}}">
							</div>	
						<!-- </form> -->		
					 	</div>
					 	<div class="modal-footer">
					 		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
					 		<button class="btn btn-primary" data-dismiss="modal">Close</button>
					 	</div>
					 </div>
				</div>
			</div>

			<div class="modal" id="changeEmail" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 	<button class="close" data-dismiss="modal">&times;</button>
							 	<h4 class="modal-title">Change Email</h4>
						</div>
						<div class="modal-body">
						<!-- <form method="POST" enctype="multipart/form-data" id="uploadForm">
							{{ csrf_field() }} -->
							<div class="form-group">
								<label for="email">Email:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="email" name="email" value=" {{$usr->email }}">
									</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="u_id" value="{{$usr->id}}">
							</div>	 
					<!-- 	</form> -->
						</div>
						<div class="modal-footer">
							<input class="btn btn-primary" type="submit" name="submit1" value="Submit">
							 	<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal" id="changePhone" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 	<button class="close" data-dismiss="modal">&times;</button>
							 	<h4 class="modal-title">Change Phone</h4>
						</div>
						<div class="modal-body">
						<!-- <form method="POST" enctype="multipart/form-data" id="uploadForm">
							{{ csrf_field() }} -->
							<div class="form-group">
								<label for="phone">Phone number:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="phone" name="phone" value=" {{$usr->phone }}">
									</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="u_id" value="{{$usr->id}}">
							</div>	 
						<!-- </form> -->
						</div>
						<div class="modal-footer">
							<input class="btn btn-primary" type="submit" name="submit2" value="Submit">
							 	<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal" id="changePassword" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										 	<button class="close" data-dismiss="modal">&times;</button>
										 	<h4 class="modal-title">Change Password</h4>
									</div>
									<div class="modal-body">
									<!-- <form method="POST" enctype="multipart/form-data" id="uploadForm">
										{{ csrf_field() }} -->
										<div class="form-group">
											<label for="password">Enter the password:</label>
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
											<input type="hidden" name="u_id" value="{{$usr->id}}">
										</div>	 
									<!-- </form> -->
									</div>
									<div class="modal-footer">
										<input class="btn btn-primary" type="submit" name="submit3" value="Submit">
										 	<button class="btn btn-primary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
				
	<div class="description_holder">
		<div class="user_detail">
			<ul class="list_description">	

				<li>
					<span>{{$usr->email}}</span>
				</li>
				<li>
					<h4 id="usr_name">{{$usr->name}}</h4>
				</li>
			</ul>
		</div>

		<div class="user_edit">
			<ul id="edit_list">
				<li>
					<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Edit Profile
						  	<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a data-target="#changeName" data-toggle="modal">Change Name</a></li>
						    <li><a data-target="#changeEmail" data-toggle="modal">Change Email</a></li>
						    <li><a data-target="#changePhone" data-toggle="modal">Change Phone</a></li>
						    <li><a data-target="#changePassword" data-toggle="modal" >Change Password</a></li>
						  </ul>
					</div>
				</li>
				<li>
					<a class="btn btn-primary" href="/home/userprofile/photos?id={{$usr->id}}">My Photos</a>
				</li>
			</ul>	
		</div>
	</div>
	

</form>
</div>
@endforeach

</div>
@endsection