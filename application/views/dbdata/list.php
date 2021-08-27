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
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div id="spinner" style="display:none;"></div>
  
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="<?php echo base_url('marketingdata/index/all')?>">Home</a></li>
                <li class="breadcrumb-item active">Data Lists</li>
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
                <div class="row">                  
                    <div class="col-md-12">
						<H3>Search Record</H3>   
						<?php //echo "<pre>";print_r($FormData);

						$campaignval='';
						$circleval='';
						$yearval='';
						$frenchysebrand = '';
						$actingbrand = '';
						$city = '';
						$state = '';

						if(isset($FormData['like']['campaign_name'])){
							$campaignval =  $FormData['like']['campaign_name'];
						}

						if(isset($FormData['like']['circle'])){
							$circleval =  $FormData['like']['circle'];
						}

						if(isset($FormData['like']['year'])){
							$yearval =  $FormData['like']['year'];
						}

						if(isset($FormData['like']['franchise_brand'])){
							$frenchysebrand =  $FormData['like']['franchise_brand'];
						}

						if(isset($FormData['like']['acting_brand'])){
							$actingbrand =  $FormData['like']['acting_brand'];
						}

						if(isset($FormData['like']['state'])){
							$state =  $FormData['like']['state'];
						}

						if(isset($FormData['like']['city'])){
							$city =  $FormData['like']['city'];
						}
						
						//echo $yearval;die;
                      
                      
                      
                      ?>                                    
                    </div>
                    <div class="col-md-12">
                      <form id="filter_form" name="filter_form" action="<?php if(isset($getData['page']) && $getData['page']!='0' && $getData['page']!='all'){echo base_url('marketingdata/index/'.$getData['page']);}else{ echo base_url('marketingdata/index'); } ?>" class="form-horizontal">
                      <div class="row">
                        <div class="col-md-2">                         
                          <input type="text" placeholder="Search by Consumer No." class="form-control like"  maxlength="255"  value="<?php if(isset($FormData['like']['consumer_number'])){echo $FormData['like']['consumer_number'];} ?>" name="FormData[like][consumer_number]" id="consumernumber">
                        </div>                       
                        <div class="col-md-2"> 
                          <!-- <input type="text" placeholder="Search by Circle" class="form-control like"  maxlength="255"  value="<?php if(isset($FormData['like']['circle'])){echo $FormData['like']['circle'];} ?>" name="FormData[like][circle]"> -->
                          <div class="form-group">                           
                            <select class="form-control like" name="FormData[like][circle]" id="circle_select">
                              <option value="">-Select Circle-</option>                              
                              <?php foreach($circleList as $cl){?>
                              <option value="<?php echo $cl['circle'];?>" <?php if($cl['circle'] ==$circleval && $cl['circle']!=''){echo "selected";}?>><?php echo $cl['circle'];?></option>
                              <?php }?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2">                         
                          <select class="form-control like" name="FormData[like][year]" id="year_select">
                              <option value="">-Select Year-</option>                              
                              <?php foreach($yearList as $yl){;?>
                              <option value="<?php echo $yl['year'];?>" <?php if($yl['year']==$yearval && $yl['year']!=''){echo "selected";}?>><?php echo $yl['year'];?></option>
                              <?php }?>
                            </select>
                        </div>                        

                        <div class="col-md-3">                         
                          <select class="form-control like" name="FormData[like][state]" id="state_select">
                              <option value="">-Select State-</option>                              
                              <?php foreach($statelist as $sl){?>
                              <option value="<?php echo $sl['state'];?>" <?php if($sl['state']==$state && $state!=''){echo "selected";}?>><?php echo $sl['state'];?></option>
                              <?php }?>
                            </select>
                        </div>

                        <div class="col-md-3">                         
                          <select class="form-control like" name="FormData[like][city]" id="city_select">
                              <option value="">-Select City-</option>                              
                              <?php foreach($citylist as $ctl){?>
                              <option value="<?php echo $ctl['city'];?>" <?php if($ctl['city'] ==$yearval && $ctl['city']!=''){echo "selected";}?>><?php echo $ctl['city'];?></option>
                              <?php }?>
                            </select>
                        </div>

                        <div class="col-md-3">                         
                          <select class="form-control like" name="FormData[like][franchise_brand]" id="franchise_brand_select">
                              <option value="">-Select Frenchyse Brand-</option>                              
                              <?php foreach($frenchyseBrandList as $fbl){?>
                              <option value="<?php echo $fbl['franchise_brand'];?>" <?php if($fbl['franchise_brand']==$frenchysebrand && $fbl['franchise_brand']!=''){echo "selected";}?>><?php echo $fbl['franchise_brand'];?></option>
								  <?php }?>
                            </select>
                        </div>

                        <div class="col-md-3">                         
                          <select class="form-control like" name="FormData[like][acting_brand]" id="acting_brand_select">
                              <option value="">-Select Acting Brand-</option>                              
                              <?php foreach($actingBrandList as $abl){?>
                              <option value="<?php echo $abl['acting_brand'];?>" <?php if($abl['acting_brand']==$actingbrand && $abl['acting_brand']!=''){echo "selected";}?>><?php echo $abl['acting_brand'];?></option>
                              <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3">                          
                          <select class="form-control like" name="FormData[like][campaign_name]" id="campaign_name_select">
                              <option value="">-Select Campaign-</option>                              
                              <?php foreach($campaignList as $cml){?>
                              <option value="<?php echo $cml['campaign_name'];?>" <?php if($cml['campaign_name']==$campaignval && $cml['campaign_name']!=''){echo "selected";}?>><?php echo $cml['campaign_name'];?></option>
                              <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3"> 
                          <div class="form-group row">
                            <button type="button" class="btn btn-success" id="filter"><i class="fa fa-search"></i> Search</button>&nbsp;&nbsp;
                            <a href="<?php echo base_url(); ?>marketingdata/index/all"><button class="m-l-lg btn btn-default" type="button">Reset</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">                                          
                        <!--sorting-->
                        <input type="hidden" name="FormData[sort][field]" id="field" value="<?php if(isset($FormData['sort']['field'])){echo $FormData['sort']['field'];} ?>"/>
                        <input type="hidden" name="FormData[sort][order]" id="order" value="<?php if(isset($FormData['sort']['order'])){echo $FormData['sort']['order'];} ?>"/>
                        <!--page-->
                        <input type="hidden" name="FormData[form_name]" id="form_name" value="" />
                        <input type="hidden" name="FormData[sort][page]" id="page" value="<?php if(isset($getData['page'])) {echo $getData['page']; } ?>"/>
                      </div>
                      </form>
                    </div>
                    <div class="col-sm-12" style="display:none;">
                    <p>Total Record Found: <?php //echo $pagedata;?></p>
                    <p><?php //echo "<pre>";print_r($alldbdata);?></p>
                    </div>                    
                  </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">

                <?php //echo $last_query;?>
                <table class="table table-hover table table-bordered text-nowrap" id="tablecontent">
                  <thead>
                    <tr>                            
                            <th>#</th>
                            <th><a class="heading" style="cursor: pointer;" id="consumer_number"><?php echo strtoupper('CONSUMER NUMBER');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="circle"><?php echo strtoupper('CIRCLE');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="consumer_name"><?php echo strtoupper('CONSUMER NAME');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="campaign_name"><?php echo strtoupper('campaign name');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="campaign_type"><?php echo strtoupper('campaign type');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="date"><?php echo strtoupper('date');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="year"><?php echo strtoupper('year');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="quarter"><?php echo strtoupper('quarter');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="month"><?php echo strtoupper('month');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="day_of_the_week"><?php echo strtoupper('day of the week');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="time"><?php echo strtoupper('time');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="duration"><?php echo strtoupper('duration');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="circle_check"><?php echo strtoupper('CIRCLE CHECK');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="flag"><?php echo strtoupper('FLAG');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="status"><?php echo strtoupper('STATUS');?></a></th>                            
                            <th><a class="heading" style="cursor: pointer;" id="age"><?php echo strtoupper('AGE');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="gender"><?php echo strtoupper('GENDER');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="occupation"><?php echo strtoupper('OCCUPATION');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="marital_status"><?php echo strtoupper('MARITAL STATUS');?></a></th>                            
                            <th><a class="heading" style="cursor: pointer;" id="acting_brand"><?php echo strtoupper('acting brand');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="moub"><?php echo strtoupper('moub');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="previous_moub"><?php echo strtoupper('previous moub');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="purchase_pattern"><?php echo strtoupper('purchase pattern');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="intensity"><?php echo strtoupper('intensity');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="regular_shop"><?php echo strtoupper('regular shop');?></a></th>                    
                            <th><a class="heading" style="cursor: pointer;" id="gratification"><?php echo strtoupper('gratification');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="big_gratification"><?php echo strtoupper('big gratification');?></a></th>                            
                            <th><a class="heading" style="cursor: pointer;" id="productive"><?php echo strtoupper('productive');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="productive_type"><?php echo strtoupper('productive type');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="trail_type"><?php echo strtoupper('trail_type');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="product_feedback"><?php echo strtoupper('product feedback');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="state"><?php echo strtoupper('state');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="city"><?php echo strtoupper('city');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="source"><?php echo strtoupper('source');?></a></th>                           
                            <th><a class="heading" style="cursor: pointer;" id="retailer_number"><?php echo strtoupper('retailer number');?></a></th> 
							<th><a class="heading" style="cursor: pointer;" id="se_mobileno"><?php echo strtoupper('se mobileno.');?></a></th> 
							<th><a class="heading" style="cursor: pointer;" id="tl_mobileno"><?php echo strtoupper('tl Mobileno.');?></a></th> 
                            <th><a class="heading" style="cursor: pointer;" id="retailer_code"><?php echo strtoupper('retailer code');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="wd"><?php echo strtoupper('wd');?></a></th>
                            <th><a class="heading" style="cursor: pointer;" id="geolocationlat"><?php echo strtoupper('geolocationlat');?></a></th>                 
                            <th><a class="heading" style="cursor: pointer;" id="geolocationlong"><?php echo strtoupper('geolocationlong');?></a></th>                 
                            <th><a class="heading" style="cursor: pointer;" id="created_date"><?php echo strtoupper('CREATED');?></a></th>                 
                               
                                                  
                            
                          </tr>
                  </thead>
                  <tbody>
                      <?php if(!empty($dbdata)) { ?>
                    <?php $i=1; foreach($dbdata as $row) { ?>
                      <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row["consumer_number"];?></td>
                        <td><?php echo $row["circle"];?></td>
                        <td><?php echo $row["consumer_name"];?></td>
                        <td><?php echo $row["campaign_name"];?></td>
                        <td><?php echo $row["campaign_type"];?></td>
                        <td><?php echo $row["date"];?></td>
                        <td><?php echo $row["year"];?></td>
                        <td><?php echo $row["quarter"];?></td>
                        <td><?php echo $row["month"];?></td>
                        <td><?php echo $row["day_of_the_week"];?></td>
                        <td><?php echo $row["time"];?></td>
                        <td><?php echo $row["duration"];?></td>
                        <td><?php echo $row["circle_check"];?></td>
                        <td><?php echo $row["flag"];?></td>
                        <td><?php echo $row["status"];?></td>
                        <td><?php echo $row["age"];?></td>
                        <td><?php echo $row["gender"];?></td>
                        <td><?php echo $row["occupation"];?></td>
                        <td><?php echo $row["marital_status"];?></td>
                        <td><?php echo $row["acting_brand"];?></td>
                        <td><?php echo $row["moub"];?></td>
                        <td><?php echo $row["previous_moub"];?></td>
                        <td><?php echo $row["purchase_pattern"];?></td>
                        <td><?php echo $row["intensity"];?></td>
                        <td><?php echo $row["regular_shop"];?></td>
                        <td><?php echo $row["gratification"];?></td>
                        <td><?php echo $row["big_gratification"];?></td>
                        <td><?php echo $row["productive"];?></td>
                        <td><?php echo $row["productive_type"];?></td>
                        <td><?php echo $row["trail_type"];?></td>
                        <td><?php echo $row["product_feedback"];?></td>
                        <td><?php echo $row["state"];?></td>
                        <td><?php echo $row["city"];?></td>
                        <td><?php echo $row["source"];?></td>
                        <td><?php echo $row["retailer_number"];?></td>
						<td><?php echo $row["se_mobileno"];?></td>
						<td><?php echo $row["tl_mobileno"];?></td>
                        <td><?php echo $row["retailer_code"];?></td>
                        <td><?php echo $row["wd"];?></td>                       
                        <td><?php echo $row["geolocationlat"];?></td>
                        <td><?php echo $row["geolocationlong"];?></td>                        
                        <td><?php echo date("Y-m-d H:i:s", strtotime($row["created_date"]));?></td>
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
                <div class="row text-right" style="float: right;">
                    <div class="col-md-12" >
                        <?php echo $pagination; ?>
                    </div>
                </div>         
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
    SyonApp.setPage('AuctionList');
    SyonApp.init();
</script>
<script>

$("#filter").click(function(e){
     //e.preventDefault();
     //show loading gif
	 var val1 = $('#consumernumber').val();
	 var val2 = $('#circle_select').val();
	 var val3 = $('#year_select').val();
	 var val4 = $('#state_select').val();
	 var val5 = $('#city_select').val();
	 var val6 = $('#franchise_brand_select').val();
	 var val7 = $('#acting_brand_select').val();
	 var val8 = $('#campaign_name_select').val();
	 if(val1 === "" && val2 === "" && val3 === "" && val4 === "" && val5 === "" && val6 === "" && val7 === "" && val8 === ""){
		 alert("Select input for search");
		return false;		 
	 }else{		
		$("#spinner").show();
	 }	 
    
});

</script>
</body>
</html>





