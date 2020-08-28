<?php
Class Padiauth extends CI_Model{
    function __construct(){
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    function getSalt($email){
        $sql = 'select id,username,email,password,salt from users ';
        $sql.= 'where email="'.$email.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
    function checkAuth($email,$password){
        $obj = $this->getSalt($email);
        $salt = substr($obj->password, 0, 10);
        $db_password =  $salt . substr(sha1($salt . $password), 0, -10);
        if($db_password===$obj->password){
            $_SESSION["username"] = $obj->username;
            return true;
        }else{
            return false;
        }
    }
    function checklogin(){
        if(!$_SESSION['username']){
            redirect('/main/login');
        }
    }
    function hasmodulepreference($identifier_id,$module_id,$identifiertype='user_id'){
        $sql = 'select * from modules_users ';
        $sql.= 'where module_id='.$module_id.'';
        switch($identifiertype){
            case 'user_id':
            $sql.= 'and user_id='.$identifier_id.'';
            break;
            case 'email':
            $sql.= 'and email=".$identifier_id."';
            break;
        }
        $sql.= 'and user_id='.$user_id.'';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        if($que->num_rows()>0){
            return true;
        };
        return false;
    }
}