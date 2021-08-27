<table class="table table-striped text-nowrap" id="example2">
    <thead>
    <tr>
        <th style="width: 10px">#</th>
        <th>Year</th>                      
        <th style="width: 40px">Entries</th>
    </tr>
    </thead>
    <tbody>
        <?php //echo "<pre>";print_r($yearwisedatacount);
            $y=1;
            foreach($yearwisedatacount as $ywd){                  
        ?>
        <tr>
            <td><?php echo $y++;?></td>
            <td><?php echo $ywd['year'];?></td>                      
            <td><?php echo $ywd['total'];?></td>
        </tr>
        <?php }?> 
    </tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
		$("#example2").fancyTable({			
			pagination: true,
			perPage:10,
			globalSearch:false,
      searchable:false,
		});		
	});
</script>
    