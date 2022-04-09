 <style>
 	.container-fluid {
 		background-color: #020812;
 		height: 650px;
 	}

 	.marup {
 		margin-top: 25px;
 		margin-bottom: 25px;
 		margin-left: 45px;
 	}

 	.headb {
 		background-color: #e8d7d7;
 		border-radius: 5px;
 		padding: 2px;
 		width: 68%;
 		margin-right: auto;
 		margin-left: auto;
 		margin-bottom: 30px;
 	}

 	.jumbotron {
 		margin-top: 65px;
 		margin-bottom: 65px;
 		background-color: #ebf0f0;
 	}
	 .tdcen{
		 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		 font-size: 15px;
		 font-weight: bold;
		 letter-spacing: 0.3px;
	 }
 </style>
 <div class="container-fluid">
 	<div class="jumbotron text-center">
 		<div class="headb">
 			<h3 class="head3">Information Page</h3>
 		</div>

		 <?php
						if ($this->session->flashdata('myMsj')) {
							$message =  $this->session->flashdata('myMsj');
						?>
 						<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?> </div>
 					<?php } ?>
 		<div class="row">
 			<div class="col-md-2"></div>
 			<div class="col-md-8">

 				<div class="row">
 					<div class="col-md-12 p-8"></div>
 				</div>
 				<div class="row">
 					<div class="col-md-12 p-8"></div>
 				</div>
 				<div class="table-responsive">

 					<table class="table table-bordered  table-hover">
 						<thead class="table-primary p-1">
 							<tr class="bg-primary">
 								<th>Name</th>
 								<th>Email</th>
 								<th>Phone</th>
 								<!-- <th>Profile Pic</th> -->
 								<th>Action</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach ($userList as $row) { ?>
 								<tr class="bg-success">
 									<td class="tdcen"><?php echo $row->name; ?></td>
 									<td class="tdcen"><?php echo $row->email; ?></td>
 									<td class="tdcen"><?php echo $row->phone_no; ?></td>
 									<!-- <td>
							<?php if ($row->profile_pic) { ?>
								<img src="<?php echo base_url('public/images/') . $row->profile_pic; ?>" style="width:50px;height:80px">
							<?php } ?>

						 </td>   -->
 									<td>
 										<button class="btn btn-primary"><a href="<?php echo base_url('Registration/edit/') . $row->id; ?>" class="textCls">Edit</a> </button>
 										<button class="btn btn-danger"><a href="<?php echo base_url('Registration/delete/') . $row->id; ?>" class="textCls">Delete</a> </button>
 									</td>
 								</tr>
 							<?php } ?>
 						</tbody>
 					</table>
 					<?php if (isset($links)) { ?>
 						<?php echo $links ?>
 					<?php } ?>
 				</div>
 			</div>
 			<div class="row marup">
 				<div class="col-md-4">
 					<button class="btn btn-primary mx-1"><a href="<?php echo base_url('Registration/add/'); ?>" class="textCls">Add</a> </button>
 					
 				</div>
 				<div class="col-md-8"></div>
 			</div>
 		</div>
 	</div>