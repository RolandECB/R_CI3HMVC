<?php if(!defined('BASEPATH')) exit('No direct script allowed');

/****
 * DEVELOPER: OITOC DEV
 * Author: Sony - Abu Nadya
 * email: bl4ck4nt@gmail.com
 * Just Ordinary Person
 */

class Select2_m extends MY_Model{

    protected $_table_outlet = 'outlet';    
    protected $_table_divisi = 'divisi';    
    protected $_table_employee = 'employee';
    protected $_table_role = 'role';
    protected $_table_shift = 'master_shift';

    function __construct(){
        parent::__construct();
 
    }
    
    public function load_outlet($pArray = array()){
       
        $this->db->select('outletID, outlet_name')->from($this->_table_outlet)->order_by('outlet_name');
        if(isset($pArray)){
            $this->db->where($pArray);
        }        

        if($this->session->userdata('usertypeID') == 3){ // kepala toko (supervisor)
            $this->db->where('supervisorID', $this->session->userdata('userID'));
        }else if($this->session->userdata('usertypeID') > 3){ // karyawan
            $this->db->where('outletID', $this->session->userdata('outletID'));            
        }
                
        $val = $this->input->get('search');
        if($val){
            $this->db->group_start();            
            $this->db->like('outlet_name', $val, 'both');
            $this->db->or_like('phone', $val, 'both');
            $this->db->group_end();            
        }                
        
        $query = $this->db->get();
        return $query->result();
    }           
    
    public function load_keptoko(){
        $this->db
        ->select('userID, username, realname')
        ->from($this->_table_employee)
        ->where('roleID', 3)
        ->order_by('realname');

        $val = $this->input->get('search');
        if($val){
            $this->db->group_start();            
            $this->db->like('realname', $val, 'both');
            $this->db->or_like('username', $val, 'both');
            $this->db->or_like('phone', $val, 'both');            
            $this->db->group_end();            
        }                
        
        $query = $this->db->get();
        return $query->result();
    } 
    
    public function load_divisi($pArray = array()){
        $this->db->select('divisiID, nama_divisi')->from($this->_table_divisi)->order_by('nama_divisi');
        if(isset($pArray)){
            $this->db->where($pArray);
        }        
        $val = $this->input->get('search');
        if($val){
            $this->db->group_start();            
            $this->db->like('nama_divisi', $val, 'both');
            $this->db->group_end();            
        }                
        
        $query = $this->db->get();
        //log_message('error', $_SERVER['REMOTE_ADDR'].' > select2_m->load_divisi : '.$this->db->last_query(), TRUE);
        return $query->result();
    }    
    
    public function load_role($pArray = array()){
        $this->db->select('roleID, role_name')->from($this->_table_role)->order_by('role_name');
        $this->db->where('roleID !=', 1);
        if(isset($pArray)){
            $this->db->where($pArray);
        }   
                
        $val = $this->input->get('search');
        if($val){
            $this->db->group_start();            
            $this->db->like('role_name', $val, 'both');
            $this->db->group_end();            
        }                
        
        $query = $this->db->get();        
        //log_message('error', $_SERVER['REMOTE_ADDR'].' > select2_m->load_role : '.$this->db->last_query(), TRUE);
        return $query->result();
    }    
    
    public function load_employee($pArray = array()){
        $this->db->select('userID, username, realname')->from($this->_table_employee)->order_by('realname');
        $this->db->where('status_active', 1);
        if(isset($pArray)){
            $this->db->where($pArray);
        }   
                
        $val = $this->input->get('search');
        if($val){
            $this->db->group_start();            
            $this->db->like('username', $val, 'both');
            $this->db->or_like('realname', $val, 'both');            
            $this->db->group_end();            
        }                
        
        $query = $this->db->get();        
        return $query->result();
    }    
    
    public function load_shift($pArray = array()){
        $this->db->select('shiftID, nama_shift, jam_masuk, jam_pulang')->from($this->_table_shift)->order_by('shiftID, nama_shift');
        if(isset($pArray)){
            $this->db->where($pArray);
        }   
                
        $val = $this->input->get('search');
        if($val){
            $this->db->group_start();            
            $this->db->like('nama_shift', $val, 'both');
            $this->db->group_end();            
        }                
        
        $query = $this->db->get();        
        return $query->result();
    }    
}