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
          <ol class="breadcrumb float-sm-right">             
              <li class="breadcrumb-item">
                 <a href="<?php echo base_url(); ?>marketingdata/excel_download" class="btn btn-sm btn-success"><i class="far fa-file-excel"></i>&nbsp;&nbsp;Download Sample</a>
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
                <div class="row">
                  <div class="col-md-10">                    
                    <form action="" method="post" enctype="multipart/form-data" id="formoid">
                    <div class="row">
                      <div class="col-md-2">
                        <label for="exampleInputFile">Import Csv File</label>
                      </div>
                      <div class="col-md-8">
                        <input type="file" name="uploadFile" id="uploadFile" class="form-control">
						<span class="text-danger" id="size_err_msg"></span>
                      </div>
                      <div class="col-md-2">
                        <input type="submit" class="input-group-text" name="import" id="importbtn" value="Upload" />
                      </div>
						
                    </div>
					
											  
                    </form>
                  </div> 
					<div class="col-md-2">  
						<?php if(isset($adminid) && $adminid == 1) { ?>													
							<button id="sendNotification" class="btn btn-danger" type="button"><i class="fas fa-user-times" title="Delete import request"></i>&nbsp;&nbsp;Delete Request</button>
						<?php }?>				
					
					</div>
                </div>
                <div class="row"> 
                    <div class="col-md-2 text-right">
                    
                    </div>
                </div>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php //echo $last_query;?>
                <table class="table table-hover table table-bordered text-nowrap">
                  <thead>
                    <tr> 
                    <?php if(isset($adminid) && $adminid == 1) { ?>
                    <th><input type="checkbox" id="select_all" /></th>
                    <?php }?>
                        <th>#</th>                        
                        <th><a class="heading"><?php echo strtoupper('FileNAme');?></a></th>
                        <th><a class="heading"><?php echo strtoupper('File');?></a></th>
                        <th><a class="heading"><?php echo strtoupper('Import status');?></a></th>
                        <th><a class="heading"><?php echo strtoupper('last updated');?></a></th>
                    </tr>
                  </thead>
                  <tbody id="ajaxabcd">
                      <?php if(!empty($tabledata)) { ?>
                    <?php $i=1; foreach($tabledata as $row) { ?>
                      <tr>
                      <?php if(isset($adminid) && $adminid == 1) { ?>
                      <td><?php //echo $i++;?><input type="checkbox" id="<?php echo 'id'.$row['id'];?>" class="checkbox" name="checkboxSelect[]" value="<?php echo $row["id"]?>"/></td> 
                      <?php }?>                    
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row["file_name"];?></td>
                        <td><a href="<?php echo base_url().$row["file_path"];?>" download rel="noopener noreferrer" target="_blank">Download File</a></td>
                        <td data-id="<?php echo $row["id"];?>" class="item"><span data-import_status="<?php echo $row["import_status"];?>" class="stchk badge badge-<?php if($row["import_status"]==0){echo "warning";}elseif($row["import_status"]==1){echo "success";};?>">
                        
                        <?php if($row["import_status"]==0){echo "Pending";}elseif($row["import_status"]==1){echo "Import Done";};?>
                        </span></td> 


                       
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
    SyonApp.setPage('csvimport');
    SyonApp.init();
</script>
<script type="text/javascript">
   
      function chkst()
      {        
        $("#overlay").css('display','none');
            $('.stchk').each(function() {                    
              var items = $(this).data('import_status');
              //alert(items);
             var html = '<div class="spinner-border text-primary spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>';
              if(items==0){
                $(this).html(html);              
                //$(this).text("loading..");              
              }
            // ids.push(items);      
            }); 

      }
          chkst();
          setInterval(function(){chkst(); }, 10000);


          setInterval(function(){
            $("#overlay").css('display','none');
            //alert("hello");
            $.ajax({
                type: "GET",
                cache: false,
                url: "<?php echo base_url('importcsv/ajaxloadviewtable');?>",                              
                success: function (response) {   
                  console.log(response);             
                  $('#ajaxabcd').html(response);             
                }
            });
           }, 20000);      
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
                        url: '<?php echo base_url('importcsv/delete');?>',
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


<script type="text/javascript">
    $(document).ready(function() { 
      $("#formoid").submit(function(event) {
         /* stop form from submitting normally */
        event.preventDefault();
        //alert("hello");
        var fd = new FormData();
      //  alert(fd);
        $.ajax({
              url:"<?php echo base_url(); ?>importcsv/fileuploadajax",
              type: "post",              
              processData: false, // important
              contentType: false, // important
              data: new FormData( this ),
              beforeSend: function(){
                    $("#spinner").show();
                  },
                  complete: function(){
                    $("#spinner").hide();
                  },
                success: function (response) { 
					//alert(response);
                    //console.log(response); 
                   location.reload();                 
                }
             
           });            
        }); 
    });
</script>
<script>

var MAX_FILE_SIZE = 50 * 1024 * 1024; // 5MB
 
$(document).ready(function() {
    $('#uploadFile').change(function() {
	//alert("hello");
        fileSize = this.files[0].size;
        if (fileSize > MAX_FILE_SIZE) {
			$('#size_err_msg').text('Max 50Mb size file is allowed to upload');
			$('#importbtn').attr('disabled', true);			
            this.setCustomValidity("File must not exceed 50 MB!");
            this.reportValidity();
        } else {
            this.setCustomValidity("");
			$('#size_err_msg').text('');
			$('#importbtn').attr('disabled', false);
        }
    });
});



</script>

</body>
</html>





