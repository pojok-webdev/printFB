<?php
class Fbs extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('report');
        $this->load->model('fb');
        $this->load->library('common');
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
        $nofb = $this->uri->segment(3);
        $data = $this->report->getdata($nofb);
        $data = array(
            'nofb'=>$data->nofb,
            'name'=>$data->name,
            'address'=>$data->address,
            'siup'=>$data->siup,
            'npwp'=>$data->npwp,
            'telp'=>$data->telp,
            'fax'=>$data->fax,
            'period1'=>adaptdate($data->period1),
            'period2'=>adaptdate($data->period2),
        );
        $this->load->view('execution/hal1',$data);
    }
    function hal2(){
        $nofb = $this->uri->segment(3);
        $data = $this->report->getdata($nofb);
        $data = array(
            'nofb'=>$data->nofb,
            'name'=>$data->name,
            'address'=>$data->address,
            'siup'=>$data->siup,
            'npwp'=>$data->npwp,
            'telp'=>$data->telp,
            'fax'=>$data->fax,
            'period1'=>$this->common->adaptdate($data->period1),
            'period2'=>$this->common->adaptdate($data->period2),
        );
        $this->load->view('execution/hal2',$data);
    }
    function phpinfo(){
        phpinfo();
    }
}