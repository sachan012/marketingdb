<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    var $perPage = '10';
    var $segment = '3';
    public $viewData = array();
    public $loggedInAdmin = array();
    private $upload_data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');  // load the admin model
        $this->load->model('role_model');  // load the admin model
        $this->viewData['data'] = array();
        $this->load->helper("basic_helper");
         $this->loggedInId = trim(getSessionUserData("id"));  //output=0/1
        if (getSessionUserData("logged_in") == FALSE && getSessionUserData("id") == "" && empty(getSessionUserData("id"))) 
        {
            // if user is not login then it will rediret to the login page of panel
            redirect(base_url(''));  
        }
        $role_type = trim(getSessionUserData("role_type"));
        $this->roleTypeForCheck = $role_type;
        $rolename = getAdminRoleInfo($role_type, $table = "roles");  // geting the user role
        
    }


    function index(){        
        isLoggedIn();
        customPagination();
        $this->checkUserLevel($this->roleTypeForCheck);        
        $isAll = getStringSegment(3) ? getStringSegment(3) : false;
        if ($isAll && $isAll == 'all') {
            $this->session->unset_userdata('adminList');
        }
        $prevSessData = getSessionUserData('adminList');
        $conditionArray=$prevSessData;
        /* $conditionArray['equal']['template_type'] = 'email';*/
        if($isAll!='all')
        {
            $start =validateURI(3) != '' ? validateURI(3) : '0';
            $getData['page']=$start;
        }
        else{
            $start='0';
            $getData['page']='';
        }
        $getField= $this->input->get();
        $sortField= isset($prevSessData['sort']['field'])?$prevSessData['sort']['field']:'id';
        $order= isset($prevSessData['sort']['order'])?$prevSessData['sort']['order']:'desc';
        $page_num = (int)$this->uri->segment(3);
        if($page_num==0) $page_num=1;
        if($order == "asc") $order_seg = "desc"; else $order_seg = "asc";

        $contactDataCount = $this->admin_model->record_count('admins', $conditionArray);
        $contactData = $this->admin_model->get_records('admins', $start, $this->perPage, $conditionArray);
        $pagination = createPagination('admin/index', $contactDataCount, $this->perPage, $this->segment, $getField);

        $this->viewData['pagination'] = $pagination;
        $this->viewData['dbdata'] = $contactData;
        $this->viewData['getData'] = $getData;
        $this->viewData['pageNum'] = $page_num;
        $this->viewData['field'] = $sortField;
        $this->viewData['order'] = $order_seg;
        $this->viewData['FormData'] =$prevSessData;
        $this->viewData["adminid"] = $this->loggedInId;
        $this->viewData['dataQuery'] = $this->db->last_query();
        $this->viewData['title'] = 'users';
        //print_r($this->viewData);die;
        $this->load->view('admin/list', $this->viewData); 
    }


    function add()
    {   
        $this->checkUserLevel($this->roleTypeForCheck);
        isLoggedIn();
        if($_POST)
        {
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[admins.email]');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            $this->form_validation->set_rules('address', 'Address', 'trim');
            $this->form_validation->set_rules('username', 'Username','trim|required|min_length[5]|is_unique[admins.username]',array('required' => 'You have not provided %s.','is_unique' => 'This %s already exists.'));
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('role','role','required|callback_check_default');
            $this->form_validation->set_message('check_default', 'Select Role type');

            if ($this->form_validation->run() == FALSE)
            {
                $this->viewData['roles'] = getAllTableData("roles");
                $this->viewData['title'] = 'Add New admin';
                $this->viewData['data'] = array();
                $this->load->view('admin/add', $this->viewData);
            }else{
                $array = array(
                    "name" => trim($this->input->post("name")),
                    "email" => trim($this->input->post("email")),
                    "phone" => trim($this->input->post("phone")),
                    "address" => trim($this->input->post("address")),
                    "username" => trim($this->input->post("username")),
                    "password" => md5(trim($this->input->post("password"))),
                    "status" => trim($this->input->post("status")),
                    "role_type " => trim($this->input->post("role")),
                    );    

                if($this->db->insert("admins", $array))
                {
                    setSessionFlashData('success', 'Great! You have successfully create new Account.');
                    redirect(base_url('admin/add'));
                }
                else
                {
                    setSessionFlashData('error', 'Whoops! some error occured.');
                    redirect(base_url('admin/add')); 
                }

            }
        }        
        $this->viewData['roles'] = getAllTableData("roles");
        $this->viewData['title'] = 'Add New admin';
        $this->viewData['data'] = array();
        $this->load->view('admin/add', $this->viewData);
    }

    function check_default($post_string)
    {
        return $post_string == '0' ? FALSE : TRUE;
    }

    function edit($id)
        {
            $this->checkUserLevel($this->roleTypeForCheck);
            isLoggedIn();
                if($_POST)
                   {
                     $array = array(
                        "name" => trim(_inputPost("name")),
                        "email" => trim(_inputPost("email")),
                        "phone" => trim(_inputPost("phone")),
                        "address" => trim(_inputPost("address")),
                        "status" => trim(_inputPost("status")),
                        "role_type " => trim(_inputPost("role")),
                     );

                    
                        if($this->admin_model->_update("admins", $array, $condition = array("id" => $id)))
                        {
                            setSessionFlashData('success', 'Details has been successfully updated.');
                                
                            redirect(base_url('admin/edit/'.$id));
                        }
                        else
                        {
                             setSessionFlashData('error', 'Whoops! some error occured.');
                             redirect(base_url('admin/edit/'.$id)); 
                        }
                    

                   }
                $this->viewData['userDetails'] = $this->admin_model->_profile($id);
                //print_r($userDetails); die;
                $this->viewData['roles'] = getAllTableData("roles");
                $this->viewData['id']= $id;
                $this->viewData['title'] = 'Update admin';
                $this->viewData['data'] = array();
                $this->load->view('admin/edit', $this->viewData);

        }


    function view($id)
    {
        isLoggedIn();
        $this->viewData['title'] = 'Users View';
        // get admin user from database
        if(!empty($this->loggedInId))
        {
            $this->viewData['adminusers'] = $this->admin_model->_profile($id); 
        }
        $this->viewData["adminid"] = $this->loggedInId;
        $this->viewData['data'] = array();
        $this->load->view('admin/view', $this->viewData);
    }
    
    function delete()
    {
        $id = explode(",",$this->input->post('id'));     
        $this->db->where_in("id", $id);
        if($this->db->delete("admins"))
        {
            echo setSessionFlashData('success', 'Data has been Deleted successfully.');                    
            
        }        
        else
        {
        echo setSessionFlashData('error', 'admin User not found in our database.');            
       
        }
         
    }


   





    function handle_upload()
    {  
        if (isset($_FILES['AdminImage']) && !empty($_FILES['AdminImage']['name'])) {

            $imgInfo = pathinfo($_FILES['AdminImage']['name'], PATHINFO_EXTENSION);
            $rand_val = date('YMDHIS') . rand(11111, 99999);
            $filename = md5($rand_val) . "." . $imgInfo;
            $_FILES['AdminImage']['name'] = $filename;

            $config['upload_path'] = "assets/uploads/AdminUser";
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = "204800";
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('AdminImage')) {
               
                // set a $_POST value for 'image' that we can use later
                $this->upload_data = $this->upload->data();
                return true;
            } else {
                
                // possibly do some clean up ... then throw an error
                $this->form_validation->set_message('handle_upload', $this->upload->display_errors());
                return false;
            }
        }
    }


    function checkUserLevel($role)
    {
        if($role != 1)
        {
            redirect("dashboard");
        }
    }  

   

}