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
}