<?php $this->load->view('includes/header_script', $data); ?>
<style type="text/css">    
    .pagination > .active > a,
    .pagination > .active > span,
    .pagination > .active > a:hover,
    .pagination > .active > span:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span:focus {
      z-index: 2;
      color: #fff;
      cursor: default;
      background-color: #337ab7;
      border-color: #337ab7;
    }

    .pagination > li > a {
      border-color: #dee5e7;
    }

    .pagination-sm > li > a,
    .pagination-sm > li > span {
      padding: 5px 10px;
      font-size: 12px;
    }

    .pagination > li > a,
    .pagination > li > span {
      position: relative;
      float: left;
      padding: 6px 12px;
      margin-left: -1px;
      line-height: 1.42857143;
      color: #337ab7;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd;
    }

    .pagination-sm > li > a,
    .pagination-sm > li > span {
      padding: 5px 10px;
      font-size: 12px;
    }

    .pagination > li > a,
    .pagination > li > span {
      position: relative;
      float: left;
      padding: 6px 12px;
      margin-left: -1px;
      line-height: 1.42857143;
      color: #337ab7;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #ddd;
    } 

  </style>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <?php $this->load->view('includes/header', $data); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('includes/sidebar'); ?>
  
  <div id="spinner" style="display:none;"></div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="<?php echo base_url('marketingdata/csvimport')?>">Home</a></li>
                <li class="breadcrumb-item active">CSV File Lists</li>
              </ol>
          </div>  
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right" style="display:none;">             
              <li class="breadcrumb-item">
                 <a href="<?php echo base_url(); ?>marketingdata/excel_download" class="btn btn-sm btn-success"><i class="far fa-file-excel"></i>&nbsp;&nbsp;Download as Excel</a>
              </a></li>              
            </ol>         
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">  
                <div class="col-md-12">
                  <form id="exportrequestform" name="exportrequestform"  class="form-horizontal">
                    <div class="row"> 
                    
                                                                                     
                        <div class="col-md-2 ic">                           
                          <div class="form-group">                           
                            <select class="form-control" name="circle">
                              <option value="">---Select Circle---</option>                              
                              <?php foreach($circleList as $cl){;?>
                              <option value="<?php echo $cl['circle'];?>"><?php echo $cl['circle'];?></option>
                              <?php }?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2 ic">                         
                          <select class="form-control" name="year">
                              <option value="">---Select Year---</option>                              
                              <?php foreach($yearList as $yl){;?>
                              <option value="<?php echo $yl['year'];?>"><?php echo $yl['year'];?></option>
                              <?php }?>
                            </select>
                        </div>
						
						<div class="col-md-2 ic">                         
                          <select class="form-control" name="state">
                              <option value="">---Select State---</option>                              
                              <?php foreach($statelist as $sl){;?>
                              <option value="<?php echo $sl['state'];?>"><?php echo $sl['state'];?></option>
                              <?php }?>
                            </select>
                        </div>
						
						<div class="col-md-2 ic">                         
                          <select class="form-control" name="city">
                              <option value="">---Select City---</option>                              
                              <?php foreach($citylist as $ctl){;?>
                              <option value="<?php echo $ctl['city'];?>"><?php echo $ctl['city'];?></option>
                              <?php }?>
                            </select>
                        </div>
						
						<div class="col-md-3 ic"> 
                          <!-- <input type="text" placeholder="Search By Campaign Name" class="form-control like"  maxlength="255"  value="<?php if(isset($FormData['like']['campaign_name'])){echo $FormData['like']['campaign_name'];} ?>" name="FormData[like][campaign_name]"> -->
                          <select class="form-control" name="campaign_name">
                              <option value="">-- Select Campaign --</option>                              
                              <?php foreach($campaignList as $cml){;?>
                              <option value="<?php echo $cml['campaign_name'];?>"><?php echo $cml['campaign_name'];?></option>
                              <?php }?>
                            </select>
                        </div>

                        <div class="col-md-3 ic">                         
                          <select class="form-control" name="frenchyse_brand">
                              <option value="">---Select Frenchyse Brand---</option>                              
                              <?php foreach($frenchyseBrandList as $fbl){
								   if(!empty($fbl['franchise_brand']) && $fbl['franchise_brand']==''){						  
							  
							  ?>
                              <option value="<?php echo $fbl['franchise_brand'];?>"><?php echo $fbl['franchise_brand'];?></option>
                              <?php }}?>
                            </select>
                        </div>

                        <div class="col-md-3 ic">                         
                          <select class="form-control" name="acting_brand">
                              <option value="">---Select Acting Brand---</option>                              
                              <?php foreach($actingBrandList as $abl){;
							  if(!empty($abl['acting_brand']) && $abl['acting_brand']==''){							  
							  ?>
                              <option value="<?php echo $abl['acting_brand'];?>" ><?php echo $abl['acting_brand'];?></option>
                              <?php }}?>
                            </select>
                        </div>

                        

                        

                        
						
                        <div class="col-md-3"> 
                          <button type="submit" class="btn btn-success" id="filter"><i class="fa fa-search"></i> Send Export Request</button>
                        </div>
						
						<div class="col-md-2">
						  <button id="sendNotification" class="btn btn-danger" type="button"><i class="fas fa-user-times" title="Delete Record"></i>&nbsp;&nbsp;Delete Entries</button>                     
						</div>
					
                      </div> 
                      
                      





                      
                      </form>
                    </div>              
                        
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php //echo $last_query;?>
                <table class="table table-hover table table-bordered text-nowrap">
                  <thead>
                    <tr>   
                  
                    <th><input type="checkbox" id="select_all" /></th>                         
                        <th>#</th>                        
                        <th><a class="heading"><?php echo strtoupper('Fiter Colums');?></a></th>                     
                        <th><a class="heading"><?php echo strtoupper('export status');?></a></th>
                        <th><a class="heading"><?php echo strtoupper('File');?></a></th>  
                        <th><a class="heading"><?php echo strtoupper('Created');?></a></th>
                        <th><a class="heading"><?php echo strtoupper('last updated');?></a></th>
                    </tr>
                  </thead>
                  <tbody id='ajaxabcd'>
                      <?php if(!empty($tabledata)) { ?>
                    <?php $x=1; foreach($tabledata as $row) { ?>
                      <tr>
                      <td><?php //echo $i++;?><input type="checkbox" id="<?php echo 'id'.$row['id'];?>" class="checkbox" name="checkboxSelect[]" value="<?php echo $row["id"]?>"/></td> 
                        <td><?php echo $x++;?></td>
                        <td>
                          <?php 
                            $arr = json_decode($row["filter_col"],true);
                            if(empty($arr)){
                              echo "ALL Columns";
                            }else{

                            
                            foreach($arr as $key=>$value)
                            {
                              echo ucfirst($key) . ":" . $value . "<br>";
                            } 
                          }                       
                          ?>
                        </td>                       
                        <td data-id="<?php echo $row["id"];?>" class="item"><span data-export_status="<?php echo $row["export_status"];?>" class="stchk badge badge-<?php if($row["export_status"]==0){echo "warning";}elseif('$row["export_status"]==1'){echo "success";};?>">
                        
                        <?php if($row["export_status"]==0){echo "Pending";}elseif('$row["export_status"]==1'){echo "Export Done";};?>
                        </span></td> 
                        <td>
							<div class="row">                          
							<?php                          
							  $data = $this->db->select()->where('fileid',$row['id'])->get('csv_export_meta')->result_array();  
							  foreach($data as $dt){
								$id = $dt['fileid']; 
								$files[] = $dt['filepath'];
								$fileName[] = $dt['filepath'];
							  }
							  if(!empty($id)){
								$i=1;foreach($files as $file){
							   // echo $file;                            
							?>                       
							  <div class="col-md-2">
								<a href="<?php echo base_url($file);?>" download rel="noopener noreferrer" target="_blank">File<?php echo $i;?></a>
								&nbsp;&nbsp;
								</div>
							<?php $i++;}}else{?>
							<?php echo "No file Available";}?>
							</div>
						</td>     
                      
                      




                        <td><?php echo date("Y-m-d H:i:s", strtotime($row["created_datetime"]));?></td>
                        <td><?php echo date("Y-m-d H:i:s", strtotime($row["last_updated"]));?></td>
                      </tr>
                    <?php } }else{ ?>
                      <tr>
                          <td colspan="9" class="text-center">No Record Found</td>                        
                        </tr> 
                      <?php }?>                 
                  </tbody>     
                </table>
              </div>
              <div class="card-footer">                       
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
             
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('includes/footer'); ?>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<?php $this->load->view('includes/footer_scripts'); ?>
<script type="text/javascript">
    $(document).ready(function () {
      $('#exportrequestform').submit(function (e) {
          e.preventDefault();          
            var formData = $('#exportrequestform').serialize();            
            $.ajax({
                type: "POST",
                cache: false,
                url: "<?php echo base_url('exportcsv/ajax_export');?>",
                data: formData,
                beforeSend: function(){
                    $("#spinner").show();
                  },
                  complete: function(){
                    $("#spinner").hide();
                  },
                success: function (response) {                
                    //console.log(response); 
                    location.reload();                 
                }
            });          
        });
      });
</script>

<script type="text/javascript">
   
      function chkst()
      {
        $("#overlay").css('display','none');
            $('.stchk').each(function() { 
              // console.log(index);
              // console.log(tr);      
              var items = $(this).data('export_status');
              var html = '<div class="spinner-border text-primary spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>';
              if(items==0){
                $(this).html(html);              
              }
            // ids.push(items);      
            }); 

      }
          chkst();
          setInterval(function(){chkst(); }, 5000);



          setInterval(function(){
            $("#overlay").css('display','none');
            
            $.ajax({
                type: "GET",
                cache: false,
                url: "<?php echo base_url('exportcsv/ajaxloadviewtable');?>",                              
                success: function (response) {                
                  $('#ajaxabcd').html(response);             
                }
            });
           }, 15000);

          



      
      
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
                alert("Select Checkbox/s to delete");
            }else{
                var val = [];
                $('.checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                }); 
                var confirmation = confirm("are you sure you want to remove the Entry?"); 
                if(confirmation) 
                {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('exportcsv/delete');?>',
                        data: 'id=' + val,
                        success: function(data) 
                        {                      
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





