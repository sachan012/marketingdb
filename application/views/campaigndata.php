<table class="table table-striped text-nowrap" id="example3">
    <thead>
    <tr>
        <th style="width: 10px">#</th>
        <th>Campaign Name</th>                      
        <th style="width: 40px">Total Entries</th>
    </tr>
    </thead>
    <tbody>
    <?php //echo "<pre>";print_r($camapignCount);
        $z=1;
        foreach($camapignCount as $cc){                  
    ?>
    <tr>
        <td><?php echo $z++;?></td>
        <td><?php echo $cc['campaign_name'];?></td>                      
        <td><?php echo $cc['total'];?></td>
    </tr>
    <?php }?>  
    </tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$("#example3").fancyTable({			
			pagination: true,
			perPage:10,
			globalSearch:false,
      searchable:false,
		});		
	});
</script>