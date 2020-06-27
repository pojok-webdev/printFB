<?php
class Fb extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    var $id = 1;
    var $nofb = '1234';
    var $name = 'PadiInternet';
    var $otherbusinesstype = 'Lain-lain';
    var $siup = '';
    var $npwp = '';
    var $siteaddress = '';
    var $telp = '';
    var $fax = '';
    var $documentstatus = array(
        'siup'=>'',
        'npwp'=>'',
        'sppkp'=>'',
        'ktp penanggungjawab'=>'',
        'ktp pemohon'=>'',
        'surat kuasa'=>''
    );
    var $services = array();
    var $vases = array();
    var $docarrays = array();
}