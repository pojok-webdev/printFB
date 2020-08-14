<?php
class Fbs extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('report');
        $this->load->model('fb');
        $this->load->library('common');
    }
    function index(){
        $fbs = $this->report->getfbs();
        $data = array(
            'fbs'=>$fbs['res']
        );
        $this->load->view('execution/index',$data);
    }
    function indexx(){
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
        $fbs = $this->report->getdata($nofb);
        $data = array(
            'nofb'=>$fbs->nofb,
            'name'=>$fbs->name,
            'address'=>$fbs->address,
            'siup'=>$fbs->siup,
            'npwp'=>$fbs->npwp,
            'telp'=>$fbs->telp,
            'fax'=>$fbs->fax,
            'period1'=>$this->common->adaptdate($fbs->period1),
            'period2'=>$this->common->adaptdate($fbs->period2),
            'resp' => $this->report->getfbpics($nofb,'resp'),
            'subscriber' => $this->report->getfbpics($nofb,'subscriber'),
            'billing' => $this->report->getfbpics($nofb,'billing'),
            'adm' => $this->report->getfbpics($nofb,'adm'),
            'teknis' => $this->report->getfbpics($nofb,'teknis'),
            'support' => $this->report->getfbpics($nofb,'support'),
            
            );
        $this->load->view('execution/hal1',$data);
    }
    function hal2(){
        $nofb = $this->uri->segment(3);
        $data = $this->report->getdata($nofb);
        $setupfee=$this->report->getfees($nofb,'setup');
        $monthlyfee=$this->report->getfees($nofb,'monthly');
        $devicefee=$this->report->getfees($nofb,'device');
        $otherfee =$this->report->getfees($nofb,'other');
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
            'username'=>$data->username,
            'setupdpp'=>$data->setupdpp,
            'services'=>$this->report->getservices($nofb),
            'setupfeedpp'=>(!$setupfee)?'0':$setupfee->dpp,
            'setupfeeppn'=>(!$setupfee)?'0':$setupfee->ppn,
            'setupfeetotal'=>(!$setupfee)?'0':$setupfee->total,
            'monthlyfeedpp'=>(!$monthlyfee)?'0':$monthlyfee->dpp,
            'monthlyfeeppn'=>(!$monthlyfee)?'0':$monthlyfee->ppn,
            'monthlyfeetotal'=>(!$monthlyfee)?'0':$monthlyfee->total,
            'devicefeedpp'=>(!$devicefee)?'0':$devicefee->dpp,
            'devicefeeppn'=>(!$devicefee)?'0':$devicefee->ppn,
            'devicefeetotal'=>(!$devicefee)?'0':$devicefee->total,
            'otherfeedpp'=>(!$otherfee)?'0':$otherfee->dpp,
            'otherfeeppn'=>(!$otherfee)?'0':$otherfee->ppn,
            'activationdate'=>$this->common->adaptdate($data->activationdate),
        );
        $this->load->view('execution/hal2',$data);
    }
    function phpinfo(){
        phpinfo();
    }
}