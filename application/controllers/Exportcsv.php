<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exportcsv extends CI_Controller
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
        if($role == 2)
        {
            redirect("dashboard");
        }
    } 

    

    public function index(){        
        $this->checkUserLevel($this->roleTypeForCheck);
        isLoggedIn();
        customPagination();
        $yearList = $this->common_model->get_distinct_year_list();        
        $campaignList = $this->common_model->get_distinct_campaign_list(); 
        $circleList = $this->common_model->get_distinct_circle_list();        
        $frenchyse_brand = $this->common_model->get_distinct_frenchysebrand_list();        
        $acting_brand = $this->common_model->get_distinct_acting_brand_list();        
        $city = $this->common_model->get_distinct_city_list();        
        $statelist = $this->common_model->get_distinct_state_list();  
        
        $this->viewData['frenchyseBrandList'] = $frenchyse_brand;
        $this->viewData['actingBrandList'] = $acting_brand;
        $this->viewData['yearList'] = $yearList;
        $this->viewData['campaignList'] = $campaignList;
        $this->viewData['circleList'] = $circleList;
        $this->viewData['statelist'] = $statelist;
        $this->viewData['citylist'] = $city;

        $tabledata = $this->db->select()->order_by('id','DESC')->get('csv_export')->result_array();
        $this->viewData["tabledata"] = $tabledata;    
        $this->viewData["adminid"] = $this->loggedInId;       
        $this->viewData['title'] = 'CSV Export Logs';
        $this->viewData['roleDes'] = $this->roleTypeForCheck;
        //print_r($this->viewData);die;
        $this->load->view('dbdata/csvexport', $this->viewData);

    }

    function ajax_export(){
        if ($this->input->is_ajax_request()) {              
            $consumer_number = $this->input->post('consumer_number');       
            $circle = $this->input->post('circle');       
            $year = $this->input->post('year');       
            $frenchyse_brand = $this->input->post('frenchyse_brand');       
            $acting_brand = $this->input->post('acting_brand');       
            $state = $this->input->post('state');       
            $city = $this->input->post('city');       
            $campaign_name = $this->input->post('campaign_name');

            if (isset($consumer_number) && $consumer_number!='') {
                $params['consumer_number'] = $consumer_number;
            }

            if (isset($circle) && $circle!='') {
                $params['circle'] = $circle;
            }

            if (isset($year) && $year!='') {
                $params['year'] = $year;
            }

            if (isset($frenchyse_brand) && $frenchyse_brand!='') {
                $params['frenchyse_brand'] = $frenchyse_brand;
            }

            if (isset($acting_brand) && $acting_brand!='') {
                $params['acting_brand'] = $acting_brand;
            }

            if (isset($state) && $state!='') {
                $params['state'] = $state;
            }

            if (isset($city) && $city!='') {
                $params['city'] = $city;
            }

            if (isset($campaign_name) && $campaign_name!='') {
                $params['campaign_name'] = $campaign_name;
            }

            //echo "<pre>";print_r($param);

            $filter = json_encode($params);
            $data = array(
            'export_status' => 0,
            'filter_col' => $filter,
            'created_datetime'=>date('Y-m-d H:i:s')
            );
            if($this->db->insert('csv_export',$data)){
                echo $this->session->set_flashdata('success','Request Successfylly added');
            }else{
                echo $this->session->set_flashdata('error','Something went wrong Please Try again');
            }
        }       
    }

    public function status_check(){
        $postval = $this->input->post('myData');
        $query = $this->db->select('status')->where_in('export_status',$postval)->get('csv_export')->result();
        echo $this->db->last_query();die;
        
    }


    public function ajaxloadviewtable(){
        $tabledata = $this->db->select()->order_by('id','DESC')->get('csv_export')->result_array();
        $this->viewData["tabledata"] = $tabledata;      
        $this->load->view('dbdata/csvexport_ajax', $this->viewData);

    }

    public function delete(){
        $id = explode(",",$this->input->post('id'));       
        $this->db->where_in("id", $id);
        if($this->db->delete("csv_export"))
        {
            
            echo setSessionFlashData('success', 'You have successfully delete the record.');
        }        
        else
        {
        echo setSessionFlashData('error', 'Something went wrong.Try again');
        }
    }   

    

}