<?php
Class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('group');
    }
    function login(){
        $this->load->view('login');
    }
    function index(){
        $this->load->view('login');
    }
    function loginhandler(){
        $params = $this->input->post();
        if($this->padiauth->checkAuth($params['email'],$params['password'])){
            $this->routeuser($params['email']);
        }else{
            redirect('/main/login');
        };
    }
    function routeuser($email){
        switch($this->getusergroup($email)){
            case 'sales':
                redirect('/main/nopreferens');
            break;
            case 'hrd':
                redirect('/fbs/getbycreatedate');
            break;
            default:
                redirect('/main/nopreferens');
            break;
        }
    }
    function getusergroup($email){
        if($this->group->isMemberOf(array('group_id'=>8,'email'=>$email))){
            return 'hrd';
        }
        return '';
    }
    function nopreferens(){
        $this->load->view('nopreferens');
    }
}