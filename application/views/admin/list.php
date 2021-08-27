<?php $this->load->view('includes/header_script', $data); ?>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<!-- Navbar -->
			<?php $this->load->view('includes/header', $data); ?>
				<!-- /.navbar -->
				<!-- Main Sidebar Container -->
				<?php $this->load->view('includes/sidebar'); ?>
					<!-- Content Wrapper. Contains page content -->
						<div id="spinner" style="display:none;"></div>
					<div class="content-wrapper">
						<!-- Content Header (Page header) -->
						<section class="content-header">
							<div class="container-fluid">
								<div class="row mb-2">
									<div class="col-sm-6">
							            <ol class="breadcrumb float-sm-left">
							              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
							              <li class="breadcrumb-item active">Admin Users</li>
							            </ol>
							        </div>									
									<div class="col-sm-6">
										<?php if(isset($adminid) && $adminid == 1) { ?>
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('admin/add');?>" class="btn btn-block btn-primary btn-sm spinner_loader"></i>&nbsp;Create New Account&nbsp;</a>
											</li>
										</ol>
										<?php }?>
									</div>
								</div>
							</div>
						</section>
						<!-- Main content -->
						<section class="content">
							<div class="container-fluid">
								<div class="row">
									<!-- <div class="col-lg-2"></div> -->
									<div class="col-lg-12">
										<?php $this->load->view('includes/msg_alert'); ?>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<form method="post" id="filter_form" name="filter_form" action="<?php if(isset($getData['page']) && $getData['page']!='0' && $getData['page']!='all'){echo base_url('admin/index/'.$getData['page']);}else{ echo base_url('admin/index'); } ?>" class="form-horizontal">
											<div class="card">
												<div class="card-header">
													<div class="row">
														<div class="col-md-10"><h3>Admin users List</h3></div>
														<div class="col-md-2"><button id="sendNotification" class="btn btn-danger btn-sm" type="button"><i class="fas fa-user-times" title="Delete admin"></i>&nbsp;&nbsp;Delete Accounts</button></div>
													</div>
												</div>
												<div class="card-body" style="padding-bottom: 0rem !important;padding-top: 1rem !important;">													
													<div class="row">
														<div class="table-responsive">
														<?php if(!empty($dbdata)) { ?>
															<table id="example1" class="table table-bordered table-striped text-nowrap">
																<thead>
																	<tr>
																		<th><input type="checkbox" id="select_all" /></th>
																		<th><a class="heading" id="name">NAME</a></th>
																		<th><a class="heading" id="email">EMAIL</a></th>
																		<th><a class="heading" id="username">USERNAME</a></th>
																		<th><a class="heading" id="role">ROLE</a></th>
																		<th>STATUS</th>
																		<th>AUCTION</th>
																	</tr>
																</thead>
																<tbody>
																	<?php $i=1; foreach($dbdata as $row){ ?>
																	<form name="frmgrouplist" id="frmitf">
																		<tr>
																			<td><input type="checkbox" id="<?php echo 'id'.$row['id'];?>" class="checkbox" name="checkboxSelect[]" value="<?php echo $row["id"]?>"/></td>
																			<td><?php echo ucwords(trim($row["name"]));?></td>
																			<td><?php echo (trim($row["email"]));?></td>
																			<td><?php echo ucwords(trim($row["username"]));?></td>
																			<td><?php if($row["role_type"] == "1") {echo "Admin"; } elseif($row["role_type"] == "2") { echo "Vendor"; }?>
																			</td>
																			<td><?php if($row["status"] == "active") { ?>
																				<span class="badge badge-success">Active</span>
																				<?php } elseif($row["status"] == "inactive") { ?>
																				<span class="badge badge-warning"><?php echo "inactive";?></span>
																				<?php }?>
																			</td>
																			<td style="text-align: left;">
																				<?php if(isset($adminid) && $adminid == 1) { ?> 
																					<a href="<?php echo base_url();?>admin/view/<?php echo ($row["id"]);?>" class="btn btn-rounded btn-sm btn-icon btn-info"><i class="fas fa-eye" title="View Details"></i>View</a>&nbsp;&nbsp;
																				    <a href="<?php echo base_url();?>admin/edit/<?php echo ($row["id"]);?>" class="btn btn-rounded btn-sm btn-icon btn-dark"><i class="fas fa-user-edit" title="Edit admin"></i>Edit</a>&nbsp;&nbsp;
																				<?php } ?>
																			</td>
																		</tr>
																		</form>
																		<?php  } ?>
																</tbody>
															</table>
															<?php } else{ ?>
																<h5 style="color: red;">No admin Is Found</h5>
																<?php } ?>
														</div>
													</div>
												</div>
												<!-- /.card-body -->
											</div>
										</form>
									</div>
								</div>								
								<!-- /.row -->
							</div>
							<!-- /.container-fluid -->
						</section>
						<!-- /.content -->
					</div>
					<!-- /.content-wrapper -->
				<?php $this->load->view('includes/footer'); ?>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Details</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="control-label">Id:</label>
									<input type="text" name="id" id="id" />
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->


			</div>
			<!-- ./wrapper -->
			<!-- jQuery -->
			<?php $this->load->view('includes/footer_scripts'); ?>
			<script type="text/javascript">
				SyonApp.setPage('adminList');
				SyonApp.init();
			</script>			
		
          <script type="text/javascript">
            $(document).ready(function(){
                $('#select_all').on('click',function(){
                    if(this.checked){                   
                        $('.checkbox').each(function(){
                            this.checked = true;                                          
                        });
                    }else{
                         $('.checkbox').each(function(){
                            this.checked = false;                                         
                        });
                    }
                });

                   
            });
        </script>
        
        <script>
    $(document).ready(function() {
        $("#sendNotification").click(function() {
          var isChecked = $(".checkbox").is(":checked");
          if(isChecked==false){
             alert("Select a Checkbox to delete record");
          }else{
            var val = [];
            $('.checkbox:checked').each(function(i){
              val[i] = $(this).val();
            }); 
            var confirmation = confirm("are you sure you want to remove the data?"); 
            if(confirmation) 
            {
               $.ajax({
                      type: 'POST',
                      url: '<?php echo base_url('admin/delete');?>',
                      data: 'id=' + val,
                      success: function(data) {                      
                       window.location.reload();
                      }

                  });
            }
          }  
      });
    });
</script>




	</body>
</html>