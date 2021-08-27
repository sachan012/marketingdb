<?php $this->load->view('includes/header_script', $data); ?>
<style>
  .table td, .table th {   
    border-top: 0px solid #dee2e6;
}
</style>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/index/all')?>">users list</a></li>
              <li class="breadcrumb-item active">View</li>
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
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">User Details</h3>         
        </div>
        <div class="card-body">
         <table class="table table-bordered table-striped">
            <tbody>
              <?php if(isset($adminusers)){ ?>
                <?php if(!empty($adminusers["name"])) {  ?>  
                  <tr><th style="width:50%">Name:</th><td><?php echo ucwords(trim($adminusers["name"]));  ?></td></tr>
                <?php } ?>
                <?php if(!empty($adminusers["email"])) {  ?> 
                  <tr><th>EMAIL ID</th><td><?php echo ucwords(trim($adminusers["email"]));  ?></td></tr>
                <?php } ?>
                <?php if(!empty($adminusers["phone"])) {  ?> 
                  <tr><th>PHONE</th><td><?php echo ucwords(trim($adminusers["phone"]));  ?></td></tr>
              <?php } ?>
              <?php if(!empty($adminusers["address"])) {  ?> 
                  <tr><th>ADDRESS</th><td><?php echo ucwords(trim($adminusers["address"]));  ?></td></tr>
              <?php } ?>
              <?php if(!empty($adminusers["username"])) {  ?>  
                <tr><th>USERNAME</th><td><?php echo ucwords(trim($adminusers["username"]));  ?></td></tr>
              <?php } ?>
              <?php if(!empty($adminusers["roll_name"])) {  ?> 
                <tr><th>ROLE</th><td><?php echo ucwords(trim($adminusers["roll_name"]));  ?></td></tr>
              <?php } ?>
              <?php if(!empty($adminusers["created_at"])) {  ?>
                <tr><th>ADDED ON</th><td><?php echo ucwords(trim($adminusers["created_at"]));  ?></td></tr>
              <?php } ?>
              <?php if(!empty($adminusers["last_login"])) {  ?>  
                <tr><th>LAST LOGIN</th><td><?php echo ucwords(trim($adminusers["last_login"]));  ?></td></tr>
              <?php } ?>
              <?php if(!empty($adminusers["ip_address"])) {  ?>
                <tr><th>LAST LOGIN IP ADDRESS</th><td><?php echo ucwords(trim($adminusers["ip_address"]));  ?></td></tr>
              <?php } ?>  
              <?php if(!empty($adminusers["status"])) {  ?> 
                <tr><th>ACCOUNT STATUS</th><td><?php if($adminusers["status"] == "active") { ?><span class="badge badge-success">Active</span><?php } elseif($adminusers["status"] == "inactive") { ?><span class="badge badge-warning"><?php echo "inactive";?></span><?php }?></td></tr>   
              <?php }  ?>              
              <?php }  ?>                
            </tbody>
          </table>                  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('includes/footer'); ?>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<?php $this->load->view('includes/footer_scripts'); ?>
</body>
</html>