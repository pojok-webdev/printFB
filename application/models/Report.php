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
        $sql = 'select a.nofb,a.name,a.address,';
        $sql.= 'a.siup,a.npwp,a.telp,a.fax,a.period1,a.period2,c.username,d.dpp setupdpp from fbs a ';
        $sql.= 'left outer join clients b on b.id=a.client_id ';
        $sql.= 'left outer join users c on c.id=b.sale_id ';
        $sql.= 'left outer join (select nofb,dpp from fbfees where name="setup") d on d.nofb=a.nofb ';
        $sql.= 'where a.nofb="'.$nofb.'"';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
    function getfbs(){
        $sql = 'select a.nofb,a.name,a.address,';
        $sql.= 'a.siup,a.npwp,a.telp,a.fax,a.period1,a.period2,c.username,d.dpp setupdpp from fbs a ';
        $sql.= 'left outer join clients b on b.id=a.client_id ';
        $sql.= 'left outer join users c on c.id=b.sale_id ';
        $sql.= 'left outer join (select nofb,dpp from fbfees where name="setup") d on d.nofb=a.nofb ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array('res'=>$que->result(),'cnt'=>$que->num_rows());
    }
}