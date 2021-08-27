<?php
$this->db->select("*")->from("settings");
$this->db->where("id", 1);
$query = $this->db->get();
$settingResult = $query->row_array();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icon -->
  <link rel="shortcut icon" href="<?php echo base_url()."assets/uploads/default/default-logo.png"?>" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url()."assets/uploads/default/default-logo.png";?>" type="image/x-icon">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo assets_url('plugins','icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo assets_url('dist','css/adminlte.min.css'); ?>">
 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo assets_url('plugins','overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">  



  <title>Admin Panel | <?php echo ucwords(trim(($title)));?></title>
  
    <script>
        var BASE_URL = "<?php echo base_url(); ?>";
    </script>
	<style>
	  /*------------For Loader--------------*/
		#spinner {
		  position: fixed;
		  z-index: 1;
		  left: 0;
		  right: 0;
		  top: 0;
		  bottom: 0;
		  background: url(<?php echo base_url('assets/uploads/spinner/loader.gif');?>) no-repeat center;		  
		  }
	
	</style>
	
</head>
<!-- <body class="hold-transition sidebar-mini layout-fixed"> -->

