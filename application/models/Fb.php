<?php
class Fb extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get($nofb){
        $sql = 'select client_id,nofb,name from fbs ';
        $sql.= 'where nofb='.$nofb.' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result();
    }
    function getbycreatedate($date1,$date2){
        $sql = 'select nofb,name,createdate ';
        $sql.= 'from fbs ';
        $sql.= 'where date(createdate) >="'.$date1.'" and date(createdate)<="'.$date2.'" ';
        $sql.= 'order by createdate asc ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result();
    }
}