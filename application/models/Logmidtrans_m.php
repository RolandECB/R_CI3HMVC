<?php if(!defined('BASEPATH')) exit('No direct script allowed');

/****
 * DEVELOPER: OITOC DEV
 * Author: Santo Doni Romadhoni
 * email: oitocdev@gmail.com
 * This is how magic works
 */

class Logmidtrans_m extends MY_Model{

    protected $_table_name = 'tbl_member';

    function __construct(){
        parent::__construct();
 
    }

    function get_single($array){
        $query = parent::single($array);
        return $query;
    }

    function get_order_by_log($array=NULL, $limit, $start){
        $query = parent::get_order_by($array, $limit, $start);
        return $query;
    }

    function insert_log($data=array()){
        $id = parent::insert($data);
        return $id;
    }

    function update_log($data=array(), $id=NULL){
        $query = parent::update($data, $id);
        return $query;
    }
    
}