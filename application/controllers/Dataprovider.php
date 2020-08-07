<?php
class Dataprovider extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('report');
    }
    function getfb(){
        $nofb = $this->uri->segment(3);
        $this->load->model('fb');
        echo json_encode($this->fb->get($nofb));
    }
    function getdata(){
        $nofb = $this->uri->segment(3);
        print_r($this->report->getdata($nofb));
    }
}