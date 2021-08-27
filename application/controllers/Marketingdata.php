<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Marketingdata extends CI_Controller
{
    var $perPage = '10';
    var $segment = '3';
    public $viewData = array();
    public $loggedInAdmin = array();
    private $upload_data = array();

    public function __construct(){        
        parent::__construct();
        $this->load->model('admin_model');  // load the admin model
        $this->load->model('role_model');  // load the admin modelz
        $this->load->model('common_model');  // load the admin modelz       
        $this->viewData['data'] = array();       
        
		
        $this->loggedInId = trim(getSessionUserData("id"));
        if (getSessionUserData("logged_in") == FALSE && getSessionUserData("id") == "" && empty(getSessionUserData("id"))) 
        {
            // if user is not login then it will rediret to the login page of panel
            redirect(base_url(''));  
        }
        $role_type = trim(getSessionUserData("role_type")); //output=1/2/3 /4/5/6     
        $this->roleTypeForCheck = $role_type;
        $rolename = getAdminRoleInfo($role_type, $table = "roles");  // geting the user role
        /*if($rolename["role_id"] != 1)
        {
            redirect(base_url("dashboard"));
        }*/
    }


    function index(){
        $this->checkUserLevel($this->roleTypeForCheck);
        isLoggedIn();
        customPagination();
        $isAll = getStringSegment(3) ? getStringSegment(3) : false;
        if ($isAll && $isAll == 'all') {
            $this->session->unset_userdata('AuctionList');
        }
        $prevSessData = getSessionUserData('AuctionList');
        $conditionArray=$prevSessData;      
        if($isAll!='all'){
            $start =validateURI(3) != '' ? validateURI(3) : '0';
            $getData['page']=$start;
        }
        else{
            $start='0';
            $getData['page']='';
        }
        $getField = $this->input->get();     
        
       // echo "<pre>";print_r($getField);die;
        $sortField= isset($prevSessData['sort']['field'])?$prevSessData['sort']['field']:'id';
        $order= isset($prevSessData['sort']['order'])?$prevSessData['sort']['order']:'desc';
        $page_num = (int)$this->uri->segment(3);
        if($page_num==0) $page_num=1;
        if($order == "asc") $order_seg = "desc"; else $order_seg = "asc";		
        //echo "<pre>";print_r($conditionArray);die;
        $contactDataCount = $this->common_model->record_count('gpi_data', $conditionArray);
		//echo "<pre>";print_r($contactDataCount);die;
        $contactData = $this->common_model->get_records('gpi_data', $start, $this->perPage, $conditionArray);
		//echo $this->db->last_query();die;       
        $pagination = createPagination('marketingdata/index', $contactDataCount, $this->perPage, $this->segment, $getField);
        $yearList = $this->common_model->get_distinct_year_list();        
        $campaignList = $this->common_model->get_distinct_campaign_list(); 
        $circleList = $this->common_model->get_distinct_circle_list();        
        $frenchyse_brand = $this->common_model->get_distinct_frenchysebrand_list();        
        $acting_brand = $this->common_model->get_distinct_acting_brand_list();        
        $city = $this->common_model->get_distinct_city_list();        
        $statelist = $this->common_model->get_distinct_state_list();        
        //echo "<pre>";print_r($yearList);die;
        
        $this->viewData['pagination'] = $pagination;
        $this->viewData['pagedata'] = $contactDataCount;
        $this->viewData['dbdata'] = $contactData;
        $this->viewData['frenchyseBrandList'] = $frenchyse_brand;
        $this->viewData['actingBrandList'] = $acting_brand;
        $this->viewData['yearList'] = $yearList;
        $this->viewData['campaignList'] = $campaignList;
        $this->viewData['circleList'] = $circleList;
        $this->viewData['statelist'] = $statelist;
        $this->viewData['citylist'] = $city;
        //$this->viewData['alldbdata'] = $dbData1;
        $this->viewData['getData'] = $getData;
        $this->viewData['pageNum'] = $page_num;
        $this->viewData['field'] = $sortField;
        $this->viewData['order'] = $order_seg;
        $this->viewData['FormData'] =$prevSessData;
        $this->viewData["adminid"] = $this->loggedInId;       
        $this->viewData['title'] = 'marketingdata List';
        $this->viewData['roleDes'] = $this->roleTypeForCheck;
        //echo "<pre>";print_r($this->viewData);die;
        $this->load->view('dbdata/list', $this->viewData); 
    }
	
	function checkUserLevel($role){
        if($role == 2)
        {
            redirect("dashboard");
        }
    } 
	
	
	function excel_download(){
        error_reporting(0);               
        $this->load->library("excel");
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);		
        $table_columns = array(strtoupper("Program Name"),strtoupper("Market Name"),strtoupper("Program Type"),strtoupper("Mobile No"),strtoupper("Operator"),strtoupper("Date Of Call"),strtoupper("Time Of Call"),strtoupper("Circle Of Smoker"),strtoupper("Age Consent"),strtoupper("Retailer Code Entered"),strtoupper("Retailer Mobile Number"),strtoupper("SE Mobile Number"),strtoupper("TL Mobile Number"),strtoupper("Brand Selected"),strtoupper("Program Town"),strtoupper("Program Location"),strtoupper("Pin Code Entered"),strtoupper("Coupon Code Entered"),strtoupper("Consumer Name"),strtoupper("Consumer Number"),strtoupper("Gender"),strtoupper("Occupation"),strtoupper("Marital Status"),strtoupper("Flag"),strtoupper("Status"),strtoupper("Franchise Brand"),strtoupper("Previous Moub"),strtoupper("Purchase Pattern"),strtoupper("Intensity"),strtoupper("Regular Shop"),strtoupper("Year"),strtoupper("Quarter"),strtoupper("Month"),strtoupper("Day of the Week"),strtoupper("Duration"),strtoupper("Gratification"),strtoupper("Big Gratification"),strtoupper("Productive"),strtoupper("Productive Type"),strtoupper("Trail Type"),strtoupper("Product Feedback"),strtoupper("Source"),strtoupper("Wd"),strtoupper("Geolocationlat"),strtoupper("Geolocationlong"));
        $column = 0;
        foreach ($table_columns as $field){			
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }		
        $queries = $this->common_model->getExcelData();
        if(count($queries) == 0)
        {
            setSessionFlashData('error', 'No Entry Is Found.');
            redirect(base_url('marketingdata/index/all')); 
        }
		
		$excel_row = 2;
        $row1 = 1;
        
		foreach ($queries as $row) {			
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row["campaign_name"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row["circle"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row["campaign_type"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row["moub"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row["circle_check"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row["date"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row["time"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row["circle"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row["age"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row["retailer_code"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row["retailer_number"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row["se_mobileno"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row["tl_mobileno"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row["acting_brand"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row["state"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row["city"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row["pincode_entered"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row["coupon_code_entered"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row["consumer_name"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row["consumer_number"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row["gender"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row["occupation"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row["marital_status"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row["flag"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row["status"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row["franchise_brand"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row["previous_moub"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row["purchase_pattern"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row["intensity"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row["regular_shop"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row["year"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row["quarter"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row["month"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row["day_of_the_week"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row["duration"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row["gratification"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row["big_gratification"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row["productive"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row["productive_type"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row["trail_type"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row["product_feedback"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row["source"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row["wd"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row["geolocationlat"]);
			$object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row["geolocationlong"]);			
			$excel_row++;
			$row1++;
			
		}
		
		$filename = "ExportFIleSample".date("Ymdhis").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
		$object_writer = PHPExcel_IOFactory::createWriter($object, 'CSV');
        header('Cache-Control: max-age=0'); 
        $object_writer->save('php://output');
    }
	

    

    

    

}