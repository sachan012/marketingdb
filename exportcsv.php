 <?php
	
	include 'dbconnection.php';	
	// Set timezone
	date_default_timezone_set('Asia/Kolkata');
	ini_set("memory_limit","2560000M");	
	

	function outputCSV($exportfile,$data){	
		//echo gettype($data);die;		
		$fp = fopen($exportfile, "w");			
		//Inserting the table headers
		$header_data = array("SR. No.",
							strtoupper("consumer number"),
							strtoupper("circle check"),
							strtoupper("flag"),
							strtoupper("status"),
							strtoupper("consumer name"),
							strtoupper("age"),
							strtoupper("gender"),
							strtoupper("occupation"),
							strtoupper("marital status"),
							strtoupper("circle"),
							strtoupper("franchise brand"),
							strtoupper("acting brand"),
							strtoupper("moub"),
							strtoupper("previous moub"),
							strtoupper("purchase pattern"),
							strtoupper("intensity"),
							strtoupper("regular shop"),
							strtoupper("date"),
							strtoupper("year"),
							strtoupper("quarter"),
							strtoupper("month"),
							strtoupper("day of the week"),
							strtoupper("time"),
							strtoupper("duration"),
							strtoupper("gratification"),
							strtoupper("big gratification"),
							strtoupper("campaign name"),
							strtoupper("productive"),
							strtoupper("productive type"),
							strtoupper("trail type"),
							strtoupper("product feedback"),
							strtoupper("state"),
							strtoupper("city"),
							strtoupper("source"),
							strtoupper("campaign type"),
							strtoupper("retailer number"),
							strtoupper("SE Mobile Number"),
							strtoupper("TL Mobile Number"),
							strtoupper("retailer code"),
							strtoupper("wd"),
							strtoupper("Coupon Code Enetered"),
							strtoupper("Pin Code Entered"),
							strtoupper("geolocationlat"),
							strtoupper("geolocationlong"),
							strtoupper("created date")
						);			
			fputcsv($fp, $header_data);	
			//echo "<pre>";print_r($condition_arr);die;
			// output data of each row
			$i = 1; 
			foreach($data as $vals) 
			{ 
				$i++;					
				//echo "<pre>";print_r($row);die;
				fputcsv($fp, $vals);
									
			}
			fclose($fp);
			echo "\n Result:".$i;
	}
	
	$sql = "SELECT * FROM csv_export where export_status=0 limit 1";	
	$result = $db->query($sql);	
	if($result->num_rows >0) 
	{

		$startdatetime = date('Y:m:d H:i:s');	
		//echo $startdatetime;die;
		$directory = dirname(__FILE__)."/uploads/exports/".date("YmdHis");
		$directory_file = "uploads/exports/".date("YmdHis");
		if(!is_dir($directory)){
			//Create our directory.
			//mkdir("/uploads/exports/" . $d , 0700);
			mkdir($directory, 755, true);
		}
		$target_dir = $directory;		
		//echo $exportfile;die;
		$rows = $result->fetch_array();
		//echo "<pre>";print_r($rows);die;				
		$tablecolmid = $rows['id'];
		$condition_arr = $rows['filter_col'];	
		$condition_arr = json_decode($condition_arr,true);				
		if(empty($condition_arr)){
			$abcq = "select * from gpi_data";
		}else{
			foreach($condition_arr as $key=>$value)
			{
				$where[] = $key . "='" . $value . "' AND"; 
			}
			$str = implode(" ",$where);
			$sd = preg_replace('~\\s+\\S+$~', '', $str);							
			$abcq = "select * from gpi_data where ".$sd.";";					
		}		
		//echo $abcq;die;
		$result1 = $db->query($abcq);	
		$totalrows = $result1->num_rows;
		//echo $totalrows;die;
		$start = 0;
		$count = 500000;			
		$rounds = ceil($totalrows/$count);
		for($pgno=1;$pgno<=$rounds;$pgno++)
		{
			// echo "\n start value = ".$start;
			$offset = $start*$count;
			//echo "\n offset value = ".$offset;
			$filename = 'file'.$pgno.'.csv';
			$downLink =  $directory_file."/".$filename;
			$exportfile = $target_dir.'/'.$filename;
			//print_r($exportfile);die;
			if(empty($condition_arr)){
				$abcq1 = "select * from gpi_data LIMIT $offset,$count;";
			}else{
				foreach($condition_arr as $key=>$value)
				{
					$where[] = $key . "='" . $value . "' AND"; 
				}
				$str1 = implode(" ",$where);
				$sd1 = preg_replace('~\\s+\\S+$~', '', $str1);							
				$abcq1 = "select * from gpi_data where ".$sd1." LIMIT $offset,$count;";					
			}
			//echo "\n query=".$abcq1;
			$result2 = $db->query($abcq1);
			//print_r($result2);die;
			if($result2->num_rows >0) 
			{
				while($row2 = $result2->fetch_assoc()) 
				{ 
					$csvrows[] = $row2;				
				} 
				outputCSV($exportfile,$csvrows);
				unset($csvrows);
				$filelinkquery = 'INSERT INTO csv_export_meta (fileid, filepath) VALUES ("'.$tablecolmid.'","'.$downLink.'")';
					//echo $logquery;die;
				if ($db->query($filelinkquery) === FALSE) 
				{
					echo $db->error;die;
				}
			}

		$start++;							
		}

		//sleep();		
		$updtsql = "UPDATE `csv_export` SET `export_status` = 1 where id= '$tablecolmid';";
		if ($db->query($updtsql) === FALSE) {
			echo "Error updating record: " . $db->error;die;			
		}

		$enddatetime = date('Y:m:d H:i:s');
		$diff = strtotime($enddatetime) - strtotime($startdatetime);
			
		$logquery = 'INSERT INTO schedular_log (schedular_name, start_time, end_time,filename,totalentries,timedifference)
			VALUES ("Export csv","'.$startdatetime.'","'.$enddatetime.'","'.$filename.'","'.$totalrows.'","'.$diff.'")';
			//echo $logquery;die;
		if ($db->query($logquery) === FALSE) 
		{
			echo $db->error;die;
		}			
	}else{
		echo "No Request Found for Data Export.";
	}
?>