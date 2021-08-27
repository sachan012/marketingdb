<style> 
   .panel {padding: 10px; border: 1px solid #c0c2c4;} 
</style>
<?php $this->load->view('includes/header_script', $data); ?>
<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
   <!-- Navbar -->
   <?php $this->load->view('includes/header', $data); ?>
   <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <?php $this->load->view('includes/sidebar'); ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/index/all')?>">Admin Users</a></li>
              <li class="breadcrumb-item active">Create Account</li>
            </ol>
          </div>									
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>admin/index/all"  class="btn btn-block btn-primary btn-sm"> </i>&nbsp;Back</a>           
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">     
      <!-- Default box -->
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">New User Account Form</h3>          
         </div>
         <div class="card-body">
            <?php $this->load->view('includes/msg_alert'); ?>
            <?php echo validation_errors('<div class="error text-danger">', '</div>'); ?>
            <form action="<?php echo base_url('admin/add'); ?>" method="post" name="addstaff" id="addstaff" required>
               <div class="form-group">
                  <label>Name <span style="color: red;">*</span></label>
                  <input type="text" placeholder="Enter user name" name="name" value="<?php echo set_value('name'); ?>" class="form-control" required>
                  <?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?>
               </div>                        
               <div class="row">                              
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Email Id <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Enter user email id" name="email" value="<?php echo set_value('email'); ?>" class="form-control" required>
                        <?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Phone Number <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Enter user phone number." name="phone" value="<?php echo set_value('phone'); ?>" class="form-control" required>
                        <?php echo form_error('phone', '<div class="error text-danger">', '</div>'); ?>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Address <span style="color: red;">*</span></label>
                        <textarea name="address" class="form-control" rows="2" placeholder="Enter user address."><?php echo set_value('address'); ?></textarea>
                        <?php echo form_error('address', '<div class="error text-danger">', '</div>'); ?>

                     </div>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Username / Login Id<span style="color: red;">*</span></label>
                        <input type="text" placeholder="Enter username." name="username" value="<?php echo set_value('username'); ?>" class="form-control" autocompete="off" required>
                        <?php echo form_error('username', '<div class="error text-danger">', '</div>'); ?>

                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Password <span style="color: red;">*</span></label>
                        <input type="password" placeholder="Enter password." name="password" value="<?php echo set_value('password'); ?>" class="form-control" required>
                        <?php echo form_error('password', '<div class="error text-danger">', '</div>'); ?>

                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Role <span style="color: red;">*</span></label>
                        <select class="form-control" id="role" name="role" required>
                           <option value="">Select the user role</option> 
                           <?php foreach($roles as $row) { if($row->role_id != 1) { ?>
                           <option  value="<?php echo $row->role_id; ?>"><?php echo ucwords($row->roll_name); ?></option>
                           <?php } } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Status <span style="color: red;">*</span></label>
                        <select class="form-control" id="status" name="status" required>
                           <option value="">Select the user status</option>
                           <option value="active">Active</option>
                           <option value="inctive">Inactive</option>
                        </select>
                     </div>
                  </div>
               </div>
               <hr>
               <button id="submit" class="btn btn-md btn-primary" type="submit">Submit</button>&nbsp;
               <button class="btn btn-md btn-danger" type="reset">Reset</button>
            </form>
            <!-- /.content -->
         </div>        
        <!-- /.card-body -->
        <div class="card-footer"></div>       
      </div>
      <!-- /.card -->
    </section>
   <!-- Main content -->  
   </div>
   <!-- /.content-wrapper -->
   <?php $this->load->view('includes/footer'); ?>
   </div>
   <!-- ./wrapper -->
   <?php $this->load->view('includes/footer_scripts'); ?>
   <!-- jquery-validation -->
   <script src="<?php echo assets_url('plugins','jquery-validation/jquery.validate.min.js'); ?>"></script>
   <script src="<?php echo assets_url('plugins','jquery-validation/additional-methods.min.js'); ?>"></script>
   <script type="text/javascript">
      $(document).ready(function () {
        $('#addstaff').validate({
          rules: {
            name: {
              required: true,
              minlength: 5,
              /*lettersonly : true*/
            },
            email: {
              required: true,
              email: true
            },
           phone : {
                          required: true,
                          number : true,
                          minlength: 10,
                          maxlength: 12
                   },

           username: {
              required: true,
              minlength: 6,
            },
            password: {
              required: true,
               minlength: 6,
            },

           role: {
              required: true,
            },

            status: {
              required: true,
            },
          },
          
          messages: {
           
            name: {
              required: "Please provide user name",
            },
            email: {
              required: "Please provide user email id",
            },
            phone: {
              required: "Please provide user phone number",
            },
            username: {
              required: "Please provide user username",
            },
            password: {
              required: "Please provide user password",
            },
            role: {
              required: "Please selct user role",
            },
             status: {
              required: "Please select user status",
            },            
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
        });
      });

      $("input").on("keypress", function(e) {
          if (e.which === 32 && !this.value.length)
              e.preventDefault();
      });
   </script>
</body>
</html>