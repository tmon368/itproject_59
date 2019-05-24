<?php
class Loginuser extends CI_Controller
{
    public function _construct()
    {
        parent::_construct();
        
    }
    public function index(){
        
        $this->load->view('login');
    }
    
    public function login(){
        //$this->load->model('login_model');
        //$data['records'] = $this->login_model->getdata();
        $this->load->view('login');
    }
    
    
    
    public function login_validation(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            //true
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //model function
            $this->load->model('login_model');
            if($this->login_model->can_login($username, $password))
            {
                $session_data = array(
                    'username'     =>     $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'index.php/loginuser/enter');
            }
            else
            {
                $this->session->set_flashdata('error', '<br/>ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง');
                redirect(base_url() . 'index.php/loginuser/login');
            }
        }
        else
        {
            //false
            $this->login();
        }
    }
    function enter(){
        if($this->session->userdata('username') != '')
        {
            $this->load->model('login_model');
            $data['records'] = $this->login_model->getdata();
            $this->load->view('allemployee',$data);
            //echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
            // echo '<label><a href="'.base_url().'index.php/loginuser/logout">Logout</a></label>';
        }
        else
        {
            redirect(base_url() . 'index.php/loginuser/login');
        }
    }
    function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url() . 'index.php/loginuser/login');
    }
    
    
    function select()
    {
        $this->load->model('login_model');
        $data['records'] = $this->login_model->getdata();
        $this->load->view('showdata',$data);
    }
    function edit()
    {
        $id = $this->input->get('id');
        print_r($id);
        $this->load->model('login_model');
        $data['user_data'] = $this->login_model->fetch_single_data($id);
        //Check data from fetch_single_data model
        //var_dump($data['user_data']);
        //$data["fetch_data"] = $this->login_model->fetch_data();
        $this->load->view('editdata',$data);
    }
    
    function editdata(){
        $id = $this->input->get('id');
        $this->load->model("login_model");
        $data = array(
            'UName'     =>     $this->input->post("username"),
            'Pass'     =>     $this->input->post("password"));
        $this->login_model->editdata($id,$data);
        redirect(base_url() . 'index.php/loginuser/select');
        
    }
    
    function del()
    {
        $id = $this->input->get('id');
        print_r($id);
        $this->load->model('login_model');
        $data['user_data'] = $this->login_model->fetch_single_data($id);
        //Check data from fetch_single_data model
        //var_dump($data['user_data']);
        //$data["fetch_data"] = $this->login_model->fetch_data();
        $this->load->view('deldata',$data);
    }
    
    function deldata()
    {
        $id = $this->input->get('id');
        print_r($id);
        $this->load->model('login_model');
        $data = array(
            'flag'     =>    '1');
        $this->login_model->deldata($id,$data);
        redirect(base_url() . 'index.php/loginuser/select');
    }
    
    
    function truedeldata()
    {
        $id = $this->input->get('id');
        print_r($id);
        $this->load->model('login_model');
        $this->login_model->truedeldata($id);
        redirect(base_url() . 'index.php/loginuser/select');
    }
    
    
    
    
    
    function add()
    {
        $this->load->view('adddata');
    }
    
    
    
    
    function insert()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run())
        {
            
            $this->load->model('login_model');
            $data = array(
                'UName'     =>     $this->input->post("username"),
                'Pass'     =>     $this->input->post("password"));
            $this->login_model->insertdata($data);
            redirect(base_url() . 'index.php/loginuser/select');
        }
        
    }
    
    public function excel(){
        $this->load->view('excel_import');
        
        
        
        
    }
    
    
}
