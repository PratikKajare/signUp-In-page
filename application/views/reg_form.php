<style>
	
	.container-fluid {
		background-color: #020812;
		padding-left: 55px;
		padding-right: 55px;
		
		height: auto;
	}
	body{
		background-color: #020812;
		height: 100%;
	}
	.headb {
		background-color: #e8d7d7;
		border-radius: 5px;
		padding: 3px;
		width: 65%;
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 30px;
	}

	.btn{
		padding: 7px;
	
		width: 90px;
		margin-left: 10px;
		margin-right: 10px;
	}
	.head3 {
		font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
		letter-spacing: 1px;
	}
	.chekbox{
		margin-left: 25px;
		margin-bottom: 5px;
	}

	.chekbb {
		color: red;
		margin-right: 15px;
	}

	.jumbotron {
		margin-top: 65px;
		margin-bottom: 65px;
		background-color: #ebf0f0;
	}

	label {
		margin-top: 8px;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 15px; 
		margin-left:8px;
	}
	@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
  .jumbotron {
		height: 60%;
		
	}

}
@media only screen and (min-width: 414px) {
	.jumbotron {
		height:40%;
		width: 100%;
	}
	.container-fluid {
		padding-left: 20px;
		padding-right: 20px;
		height: 65%;
	}
}
@media only screen and (max-width: 714px) {
	.jumbotron {
		height:40%;
		width: 100%;
	}
	.container-fluid {
		padding-left: 20px;
		padding-right: 20px;
		height: 65%;
	}
}

</style>
<body>
<div class="container-fluid">

	<div class="jumbotron text-center">
		<div class="backf">
			<div class="headb">
				<h3 class="head3">Sign Up Page</h3>
			</div>
			
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

					<form method="post" action="<?php if (isset($editInfo)) {
													echo base_url('Registration/edit/') . $editInfo->id;
												} else {
													echo base_url('Registration/add');
												} ?>" enctype="multipart/form-data">
						<?php
						if ($this->session->flashdata('myMsj')) {
							$message =  $this->session->flashdata('myMsj');
						?>
							<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?> </div>
						<?php } ?>
						<div class="form-group row">
							<div class="col-sm-1"> </div>
							<label class="col-sm-3" for="name"> Name </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="Enter Name" name="userName" id="userName" value="<?php if (isset($editInfo)) {
																																			echo $editInfo->name;
																																		} else {
																																			echo set_value('userName');
																																		} ?>">
							</div>
							<?php echo form_error('userName'); ?>
						</div>

						<div class="form-group row">
							<div class="col-sm-1"> </div>
							<label class="col-sm-3" for="Email"> Email </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" placeholder="Enter Email" name="emailId" id="emailId" value="<?php if (isset($editInfo)) {
																																			echo $editInfo->email;
																																		} else {
																																			echo set_value('emailId');
																																		} ?>">
							</div>
							<?php echo form_error('emailId'); ?>
						</div>

						<div class="form-group row">
							<div class="col-sm-1"> </div>
							<label class="col-sm-3" for="name"> Phone No </label>
							<div class="col-sm-4">
								<input type="number" class="form-control" placeholder="Enter Phone No" name="phoneNo" id="phoneNo" value="<?php if (isset($editInfo)) {
																																				echo $editInfo->phone_no;
																																			} else {
																																				echo set_value('phoneNo');
																																			} ?>">
							</div>
							<?php echo form_error('phoneNo'); ?>
						</div>

						<!-- <div class="form-group row">
					<div class="col-sm-1"> </div>
					<label class="col-sm-3" for="name"> Profile Pic </label>
					<div class="col-sm-4">
						<input type="file" class="form-control" name="profile_pic" id="profile_pic">
					</div>
				</div> -->

						<div class="form-group row">
							<div class="col-sm-1"> </div>
							<label class="col-sm-3" for="name"> Password </label>
							<div class="col-sm-4">
								<input type="password" id='fpassword' class="form-control" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" id="password" value="<?php if (isset($editInfo)) {
																																																																																	echo $editInfo->password;
																																																																																} else {
																																																																																	echo set_value('password');
																																																																																} ?>">
							</div>
							<?php echo form_error('password'); ?>
						</div>

						<div class="form-group row">
							<div class="col-sm-1"> </div>
							<label class="col-sm-3" for="name"> Confirm Password </label>
							<div class="col-sm-4">
								<input type="password" id='confirm_password' class="form-control" placeholder="Confirm  Password" name="confirm_password" value="<?php if (isset($editInfo)) {
																																										echo $editInfo->password;
																																									} else {
																																										echo set_value('confirm_password');
																																									} ?>">
							</div>
							<?php echo form_error('confirm_password'); ?>
						</div>
						<div class="col-sm-4"> </div>

						<label class="col-sm-3 chekbox" for="name"><input class="checkbb" type="checkbox" value="click" onclick="myFunction(), urFunction()"> Show Password</label>


						<br>
						<div class="col-sm-4"> </div>
						<br>
					
						
						<div class="btnflex" for="name">
							<button type="submit" class="btn btn-primary">Sign Up
								<!-- <?php echo $pageType; ?> -->
							</button>

							<button class="btn btn-danger"><a href="<?php echo base_url('Registration/table/'); ?>" class="textCls">Back</a> </button>
						</div>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script>
	function myFunction() {
		var x = document.getElementById("confirm_password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}

	function urFunction() {
		var x = document.getElementById("fpassword");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>