<?php 
		include '../layout/headerSignup.php';
	
			
 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-5 offset-md-8">
				<h3 class="display-4 page-header">SignUp Form</h3>
				<form action="" method="POST" class="border" name="sform" id="signup-form" enctype="multipart/form-data" autocomplete="off">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" data-error="Please enter first name" name="fname" class="form-control" value="">
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="lname" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Email ID</label>
								<input type="email" class="form-control" name="email" id="email">
								<span id="user-availability-status" style="font-size:12px;"></span> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Phone</label>
								<input type="phone" class="form-control" name="phone">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="uname">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
								<input type="password"  class="form-control" id="pass" name="password">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" id="pass2" name="cpassword">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-default" name="register">SignUp</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include '../layout/footerSignup.php'; ?>