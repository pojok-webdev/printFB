<?php
class Dataprovider extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function getfb(){
        $nofb = $this->uri->segment(3);
        $this->load->model('fb');
        echo json_encode($this->fb->get($nofb));
    }
}