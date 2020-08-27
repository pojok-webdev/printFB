<?php
Class Group extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function isMemberOf($params){
        $sql = 'select a.id,a.username from users a left outer join groups_users b ';
        $sql.= 'on b.user_id=a.id ';
        $sql.= 'where b.group_id='.$params['group_id'].' and a.email="'.$params['email'].'"';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        if($que->num_rows()>0){
            return true;
        }
        return false;
    }
}