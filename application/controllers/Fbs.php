<?php
class Fbs extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('report');
        $this->load->model('fb');
    }
    function index(){
        $this->load->model('report');
        $this->load->model('fb');
        $fb = new Fb();
        $data = array('fb'=>$fb,'xfb'=>$this->report->getObject());
        $this->load->view("report",$data);
    }
    function page1(){
        $fb = new Fb();
        $data = array('fb'=>$fb,'xfb'=>$this->report->getObject());
        $this->load->view("page1",$data);
    }
    function page2(){
        $fb = new Fb();
        $data = array('fb'=>$fb,'xfb'=>$this->report->getObject());
        $this->load->view("page2",$data);
    }
    function hal1(){
        $this->load->view('hal1');
    }
    function hal2(){
        $this->load->view('hal2');
    }
    function phpinfo(){
        phpinfo();
    }
}