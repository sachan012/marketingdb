<?php //echo "<pre>";print_r();die;
    $roletype = $this->session->userdata['role_type'];
?>

<?php if(!empty($tabledata)) { ?>
    <?php $i=1; foreach($tabledata as $row) { ?>
        <tr>
        <?php if($roletype==1){?>
        <th><input type="checkbox" id="select_all" /></th>
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