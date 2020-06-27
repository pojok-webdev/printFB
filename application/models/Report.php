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
}