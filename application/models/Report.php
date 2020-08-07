<?php
class Report extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getObject(){
        return array(
            'name'=>'Harapan Djaja'
        );
    }
    function getdata($nofb){
        $sql = 'select nofb,name,address,';
        $sql.= 'siup,npwp,telp,fax,period1,period2 from fbs ';
        $sql.= 'where nofb="'.$nofb.'"';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
}