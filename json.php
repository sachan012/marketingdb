<?php

	include 'dbconnection.php';
	
	$sql = "SELECT * FROM csvexportlog";
	//echo $sql;die;
	$result = $db->query($sql);	
	if($result->num_rows >0) 
	{
		while($row = $result->fetch_assoc()){
			$rows[] = $row;
		}
		//echo "<pre>";print_r($rows);die;
		$n = count($rows);
		//echo count($rows);
		$i=0;		
		for($i=0;$i<$n;$i++){			
			$condition_arr[] = $rows[$i]['filter_col'];
		}
		
		echo "<pre>";print_r($condition_arr);die;
		
		
		
		
		
		
	}

?>