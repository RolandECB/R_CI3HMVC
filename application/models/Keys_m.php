<?php if(!defined('BASEPATH')) exit('No direct script allowed');

/****
 * DEVELOPER: OITOC DEV
 * Author: Sony - Abu Nadya
 * email: bl4ck4nt@gmail.com
 * Just Ordinary Person
 */

class Keys_m extends MY_Model{

    protected $_table_name = 'tbl_apikeys';

    function __construct(){
        parent::__construct();
 
    }

    function insert_token($array){
        $id = parent::insert($array);
        return $id;        
    }
    
    function get_single_key($array){
        $query = parent::get_single($array);
        return $query;        
    }
    
}