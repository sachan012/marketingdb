<table class="table table-striped text-nowrap" id="example1">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Circle</th>                      
            <th style="width: 40px">Total Entries</th>
        </tr>
    </thead>
    <tbody>
    <?php //echo "<pre>";print_r($circleCount);
        $x=1;foreach($circleCount as $crc){
    ?>
    <tr>
        <td><?php echo $x;?></td>
        <td><?php echo $crc['circle'];?></td>                      
        <td><?php echo $crc['total'];?></td>
    </tr>
    <?php $x++;}?> 
    </tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$("#example1").fancyTable({			
			pagination: true,
			perPage:10,
			globalSearch:false,
      searchable:false,
		});		
	});
</script>