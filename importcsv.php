<?php
	include 'dbconnection.php';
	ini_set('memory_limit', '2560000M');	
	$startdatetime = date('Y:m:d H:i:s');		
	$sql = "SELECT file_name FROM csv_import where import_status=0 limit 1";
	$result = $db->query($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			$file_name = $row['file_name'];
			$file = dirname(__FILE__).'/uploads/imports/'.$file_name;			
			//echo $file;die;
			if(!file_exists($file)) 
			{    
				echo "File not found. Make sure you specified the correct path.\n";     
				exit; 
			}
			$row = 0;
			$cells = 0;
			if(($handle     =   fopen($file, "r")) !== FALSE)
			{
				while(($data =   fgetcsv($handle)) !== FALSE)
				{
				   //echo "<pre>";print_r($data[0]);die;
					//$num = count($data);
					$cells += count($data);
					$row++;
					if($row == 1) continue;
					$campaign_name = $data[0];
					$circle = $data[1];
					$campaign_type = $data[2];
					$moub = $data[3];
					$circle_of_smoker = $data[4];
					$date = $data[5];
					$time = $data[6];
					$circle_check = $data[7];
					$age = $data[8];										
					$retailer_code = $data[9];
					$retailer_number = $data[10];
					$se_monile_no = $data[11];
					$tl_mobile_no = $data[12];
					$acting_brand = $data[13];
					$state = $data[14];
					$city = $data[15];
					$pincode_entered = $data[16];
					$coupon_entered = $data[17];					
					$consumer_number = $data[18];					
					$consumer_name = $data[19];
					$gender = $data[20];
					$occupation = $data[21];
					$marital_status = $data[22];						
					$flag = $data[23];
					$status = $data[24];
					$franchise_brand = $data[25];
					$previous_moub = $data[26];					
					$purchase_pattern = $data[27];
					$intensity = $data[28];
					$regular_shop = $data[29];				
					$year = $data[30];
					$quarter = $data[31];
					$month = $data[32];
					$day_of_the_week = $data[33];					
					$duration = $data[34];
					$gratification = $data[35];
					$big_gratification = $data[36];					
					$productive = $data[37];
					$productive_type = $data[38];
					$trail_type = $data[39];
					$product_feedback = $data[40];					
					$source = $data[41];
					$wd = $data[42];
					$geolocationlat = $data[43];
					$geolocationlong = $data[44];					

					$sql1 = 'INSERT INTO `gpi_data`(`consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`,`age`,`gender`,`occupation`,`marital_status`,`circle`,`franchise_brand`,`acting_brand`, `moub`,`previous_moub`,`purchase_pattern`,`intensity`,`regular_shop`,`date`,`year`,`quarter`,`month`, `day_of_the_week`,`time`,`duration`,`gratification`,`big_gratification`,`campaign_name`, `productive`, `productive_type`,`trail_type`,`product_feedback`,`state`,`city`,`source`,`campaign_type`, `retailer_number`,`retailer_code`,`wd`,`geolocationlat`,`geolocationlong`,`tl_mobileno`,`se_mobileno`,`coupon_code_entered`,`pincode_enetered`) VALUES("'.$consumer_number.'","'.$circle_check.'","'.$flag.'","'.$status.'","'.$consumer_name.'","'.$age.'","'.$gender.'","'.$occupation.'","'.$marital_status.'","'.$circle.'","'.$franchise_brand.'","'.$acting_brand.'","'.$moub.'","'.$previous_moub.'","'.$purchase_pattern.'","'.$intensity.'","'.$regular_shop.'","'.$date.'","'.$year.'","'.$quarter.'","'.$month.'","'.$day_of_the_week.'","'.$time.'","'.$duration.'","'.$gratification.'","'.$big_gratification.'","'.$campaign_name.'","'.$productive.'","'.$productive_type.'","'.$trail_type.'","'.$product_feedback.'","'.$state.'","'.$city.'","'.$source.'","'.$campaign_type.'","'.$retailer_number.'","'.$retailer_code.'","'.$wd.'","'.$geolocationlat.'","'.$geolocationlong.'","'.$se_monile_no.'","'.$tl_mobile_no.'","'.$coupon_entered.'","'.$pincode_entered.'")';

					//echo $sql1;die;
					if($db->query($sql1) === FALSE) 
					{
						echo "Error:".$sql1."<br>".$db->error;
					} 	

					
				
				}
				fclose($handle);
				$enddatetime = date('Y:m:d H:i:s');
					$diff = strtotime($enddatetime) - strtotime($startdatetime);
				
					$logquery = 'INSERT INTO schedular_log (schedular_name, start_time, end_time,filename,totalentries,timedifference)
				VALUES ("Import csv","'.$startdatetime.'","'.$enddatetime.'","'.$file_name.'","'.$row.'","'.$diff.'")';
				//echo $logquery;die;
				if ($db->query($logquery) === FALSE) {
				  echo $db->error;
				}
				echo "Total rows = $row, total cells = $cells";
			}
			$updatesql = "UPDATE `csv_import` SET `import_status` = 1 WHERE `file_name` = '$file_name';";
			if($db->query($updatesql) === TRUE){
				  echo "Record updated successfully";				 
			}else{
				  echo "Error updating record: " . $db->error;
				 
			}
		}  
	}else {
		echo "0 results";		
	}
?>