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