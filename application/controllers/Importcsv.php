<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Importcsv extends CI_Controller
{
    
    public $viewData = array();
    public $loggedInAdmin = array();
    private $upload_data = array();

    public function __construct(){        
        parent::__construct();		
        $this->load->model('admin_model');  // load the admin model
        $this->load->model('role_model');  // load the admin modelz
        $this->load->model('common_model');  // load the admin modelz
        $this->load->library('csvimport'); 
        $this->load->helper('file');       
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


    
	
	function checkUserLevel($role){
        if($role == 3)
        {
            redirect("dashboard");
        }
    } 

    

    public function index(){        
      //  $this->checkUserLevel($this->roleTypeForCheck);
        //echo "<pre>";print_r($this->session->all_userdata());die;
        isLoggedIn();
        customPagination();
        if($this->session->userdata['role_type']==1){
            $tabledata = $this->db->select()->order_by('id','DESC')->get('csv_import')->result_array();
        }else{
            $tabledata = $this->db->select()->where('user_id',$this->session->userdata['id'])->order_by('id','DESC')->get('csv_import')->result_array();
        }        
        $this->viewData["tabledata"] = $tabledata;    
        $this->viewData["adminid"] = $this->loggedInId;       
        $this->viewData['title'] = 'CSV FILE IMPORT';
        $this->viewData['roleDes'] = $this->roleTypeForCheck;
        //print_r($this->viewData);die;
        $this->load->view('dbdata/csvimport', $this->viewData);
    }

    public function ajaxloadviewtable(){
        $tabledata = $this->db->select()->order_by('id','DESC')->get('csv_import')->result_array();
        //echo "<pre>";print_r($tabledata);die;       
        $this->viewData["tabledata"] = $tabledata;      
        $this->load->view('dbdata/csvimport_ajax', $this->viewData);

    }

    public function delete(){
        $id = explode(",",$this->input->post('id'));       
        $this->db->where_in("id", $id);
        if($this->db->delete("csv_import")){            
            echo setSessionFlashData('success', 'You have successfully delete the record.');
        }        
        else{
            echo setSessionFlashData('error', 'Something went wrong.Try again');
        }
    }
	
	public function fileuploadajax(){
        error_reporting(0);   
        //echo "<pre>";print_r($_FILES);die;		
        $path = FCPATH .'uploads/imports';        
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'csv';
        $config['remove_spaces'] = TRUE;
        $config['max_size'] = 50000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);            
        if (!$this->upload->do_upload('uploadFile')) 
        {
            $error = array('error' => $this->upload->display_errors());
           // echo "<pre>";print_r($error);die;           
            echo $this->session->set_flashdata('error', $this->upload->display_errors());die;          
        }else {
            $file_data = $this->upload->data();
            //echo "<pre>";print_r($file_data);die;
            $filenm = $file_data['file_name'];
            $filesize = $file_data['file_size'];
            $file = $file_data['full_path'];                           
            if($filesize>50000){
              echo $this->session->set_flashdata('error', 'Max 50 MB file is allowed.');  die;            
            }              
              $handle     =   fopen($file, "r");
              $data =   fgetcsv($handle);				  
            //echo "<pre>";print_r($data);die;                
              if(($data[0]!= strtoupper('Program Name')) 
              && ($data[1]!= strtoupper('Market Name'))
              && ($data[2]!= strtoupper('Program Type'))
              && ($data[3]!= strtoupper('Mobile No'))
              && ($data[4]!= strtoupper('Operator'))
              && ($data[5]!= strtoupper('Date Of Call'))
              && ($data[6]!= strtoupper('Time Of Call'))
              && ($data[7]!= strtoupper('Circle Of Smoker'))
              && ($data[8]!= strtoupper('Age Consent'))
              && ($data[9]!= strtoupper('Retailer Code Entered'))
              && ($data[10]!= strtoupper('Retailer Mobile Number'))
              && ($data[11]!= strtoupper('SE Mobile Number'))
              && ($data[12]!= strtoupper('TL Mobile Number'))
              && ($data[13]!= strtoupper('Brand Selected'))
              && ($data[14]!= strtoupper('Program Town'))
              && ($data[15]!= strtoupper('Program Location'))
              && ($data[16]!= strtoupper('Pin Code Entered'))
              && ($data[17]!= strtoupper('Coupon Code Entered'))                         
              ){
                  echo $this->session->set_flashdata('error', 'Header Mismatch Error.Check csv format'); die;
                  //redirect($_SERVER['HTTP_REFERER']);
            }

            $file_path = "uploads/imports/" . $filenm;
            $insdata = array(
                'file_name'=>$filenm,
                'file_path'=>$file_path,
                'import_status'=>0,
                'user_id'=>$this->session->userdata['id'],
                'created_datetime'=>date("Y-m-d H:i:s")
            );
            $this->db->insert('csv_import',$insdata);
            //$csv_data = $this->csvimport->parse_file($file_path);
			echo $this->session->set_flashdata('success',$filenm.'Has been uploaded successfully');die;
           // redirect($_SERVER['HTTP_REFERER']);               
        }

    }


    

}