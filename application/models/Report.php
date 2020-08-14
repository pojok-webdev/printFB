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
        $sql = 'select a.nofb,a.name,a.address,activationdate,';
        $sql.= 'a.siup,a.npwp,a.telp,a.fax,a.period1,a.period2,c.username,';
        $sql.= 'd.dpp setupdpp ';
        $sql.= 'from fbs a ';
        $sql.= 'left outer join clients b on b.id=a.client_id ';
        $sql.= 'left outer join users c on c.id=b.sale_id ';
        $sql.= 'left outer join (select nofb,dpp from fbfees where name="setup") d on d.nofb=a.nofb ';
        $sql.= 'where a.nofb="'.$nofb.'"';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
    function getfbpics($nofb,$role){
        $sql = 'select a.* from fbpics a left outer join clients b on b.id=a.client_id ';
        $sql.= 'left outer join fbs c on c.client_id =b.id ';
        $sql.= 'where c.nofb="'.$nofb.'" and a.role="'.$role.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
    function getservices($nofb){
        $sql = 'select a.* from fbservices a ';
        $sql.= 'where a.fb_id="'.$nofb.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res;
    }
    function getfees($nofb,$name){
        $sql = 'select format(dpp,0)dpp,format(ppn,0)ppn,format(dpp+ppn,0) total from fbfees ';
        $sql.= 'where nofb="'.$nofb.'" and name="'.$name.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        if($que->num_rows()>0){
            return $res[0];
        }else{
            return false;
        }
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