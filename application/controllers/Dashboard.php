<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public $viewData = array();
    public function __construct(){        
        parent::__construct();
        $this->load->model('admin_model');  // load the admin model
        $this->load->model('role_model');  // load the admin modelz
        $this->load->model('Common_model');  // load the admin modelz
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

    public function index()
    {       
        isLoggedIn();  
        $this->checkUserLevel($this->roleTypeForCheck);      
        $this->viewData['title'] = 'Admin Panel | Dashboard';       
        $this->viewData['title'] = 'Dashboard';
        $this->viewData['roleId'] = $this->loggedInId;
        $this->viewData['data'] = array();
        $this->load->view('Dashboard', $this->viewData);
    }

    function checkUserLevel($role){
        if($role == 2)
        {
            redirect("importcsv");
        }
    } 

    public function ajax_totalentriescount(){
        $resSQL = $this->db->query("select count(id) as total from gpi_data")->row_array();
        $TotalUsers = $resSQL['total'];  
        echo $TotalUsers;
    }

    public function ajax_totalcampaignscount(){
        $resSQL = $this->db->query("select count(distinct(campaign_name)) as total from gpi_data");
        //echo $this->db->last_query();die;
        $result = $resSQL->row_array();             
        echo $result['total'];  
    }

    public function ajax_totalcirclecount(){
        $this->db->distinct();
        $this->db->select('circle');
        $this->db->from('gpi_data');                      
        $totalCircles= $this->db->count_all_results();
        //echo "<pre>";print_r($num_results);die;                 
        echo $totalCircles;        
    }   

    public function get_circlewisedata(){        
        $circleCount = $this->Common_model->count_circlewise_data(); 
        $data['circleCount'] =  $circleCount;      
        echo $this->load->view('circledata', $data,true);die;        
    }

    public function get_campaignwisedata(){              
        $camapignCount = $this->Common_model->count_unique_campaign_data(); 
        $data['camapignCount'] =  $camapignCount;
        echo $this->load->view('campaigndata', $data,true);die;
    }

    public function get_yearwisedata(){
        $yearwisedatacount = $this->Common_model->record_count_year_data(); 
        $data['yearwisedatacount'] =  $yearwisedatacount;
        echo $this->load->view('yeardata', $data,true);die;

    }












}
