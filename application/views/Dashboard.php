<?php $this->load->view('includes/header_script', $data);
$role_type = trim(getSessionUserData("role_type"));
$rolename = getAdminRoleInfo($role_type, $table = "roles");  // geting the user role
?>

<style type="text/css">  
.small-box .icon {
    color: rgba(0,0,0,.15);
    z-index: 0;
    float: right;
    margin-top: -100px!important;
    margin-right: 10px!important;
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="totalusers"></h3>
                <div id="spinner1" class="spinner-border" role="status" style="display:none;">
                  <span class="sr-only">Loading...</span>
                </div>
                <p>Total Entries</p>
              </div>
              <div class="icon">
                  <i class="ion ion-person-stalker"></i>
              </div>
              <?php if(!empty($rolename["role_id"]) && $rolename["role_id"] == 1) { ?>     
              <a href="<?php echo base_url("marketingdata/index/all");?>" class="small-box-footer" style="display:none;">More info <i class="fas fa-arrow-circle-right"></i></a>
              <?php }?>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="totalcampaigns"></h3>
                <div id="spinner2" class="spinner-border" role="status" style="display:none;">
                  <span class="sr-only">Loading...</span>
                </div>
                  <p>Total Campaign</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <?php if(!empty($rolename["role_id"]) && $rolename["role_id"] == 1) { ?>     
              <a href="<?php echo base_url("marketingdata/index/all");?>" class="small-box-footer" style="display:none;">More info <i class="fas fa-arrow-circle-right"></i></a>
              <?php }?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="totalcircle"></h3>
                <div id="spinner3" class="spinner-border" role="status" style="display:none;">
                  <span class="sr-only">Loading...</span>
                </div>
                  <p>Circles</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <?php if(!empty($rolename["role_id"]) && $rolename["role_id"] == 1) { ?>     
              <a href="<?php echo base_url("marketingdata/index/all");?>" class="small-box-footer" style="display:none;">More info <i class="fas fa-arrow-circle-right"></i></a>
              <?php }?>
            </div>
          </div>
          
          <div class="col-lg-3 col-6" style="display:none;">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer" style="display:none;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->    
        
        <div class="row"> 
          
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Circle wise data count </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" id="circle_data">                                      

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          


          



          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Campaign wise data count</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" id="campaign_data">
               
                                      
                 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
		  
		  
           <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Year wise data count</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" id="year_data">             
                                       
                 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          






        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php $this->load->view('includes/footer'); ?>

</div>
<!-- ./wrapper -->

<?php $this->load->view('includes/footer_scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>
<script>
 $(document).ready(function() {
  $.ajax({
      type: "GET",
      cache: false,
      url: "<?php echo base_url('dashboard/ajax_totalentriescount');?>",   
      beforeSend: function() {
        $('#spinner1').show();
      },
      complete: function(){
        $('#spinner1').hide();
      },                           
      success: function (response) {   
               
        $('#totalusers').text(response);             
      }
  });  
} );
</script>
<script>
 $(document).ready(function() {
  $.ajax({
                type: "GET",
                cache: false,
                url: "<?php echo base_url('dashboard/ajax_totalcampaignscount');?>", 
                beforeSend: function() {
                  $('#spinner2').show();
                },
                complete: function(){
                  $('#spinner2').hide();
                },                             
                success: function (response) {   
                         
                  $('#totalcampaigns').html(response);             
                }
            });

} );
</script>

<script>


            

            $.ajax({
                type: "GET",
                cache: false,
                url: "<?php echo base_url('dashboard/ajax_totalcirclecount');?>",          
                beforeSend: function() {
                  $('#spinner3').show();
                },
                complete: function(){
                  $('#spinner3').hide();
                },                    
                success: function (response) {   
                         
                  $('#totalcircle').html(response);             
                }
            });
</script>

<script> 
    $.ajax({
        type: "GET",
        url: "<?php echo base_url('dashboard/get_circlewisedata');?>",
        
        success: function(response){
            $('#circle_data').html(response);
        }
    });
</script>

<script> 
    $.ajax({
        type: "GET",
        url: "<?php echo base_url('dashboard/get_yearwisedata');?>",
        
        success: function(response){
            $('#year_data').html(response);
        }
    });
</script>
<script> 
    $.ajax({
        type: "GET",
        url: "<?php echo base_url('dashboard/get_campaignwisedata');?>",
        
        success: function(response){
            $('#campaign_data').html(response);
        }
    });
</script>





</body>
</html>
