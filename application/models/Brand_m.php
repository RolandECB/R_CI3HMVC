<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Brand_m extends MY_Model{

    protected $_table_name = 'tbl_brand';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = "id";
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}


	public function get_brand($array=NULL){

		$query = parent::get_order_by($array);
		return $query;
	}

	public function insert_brand($array){
		$id = parent::insert($array);
		return $id;
	}

	public function edit_brand($data,$id=NULL){
		$res = parent::update($data, $id);
		return $res;
	}

	public function delete_brand($id){
		return parent::delete($id);
	}

}

