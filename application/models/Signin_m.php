<?php if(!defined('BASEPATH')) exit('No direct script allowed');

/****
 * DEVELOPER: OITOC DEV
 * Author: Santo Doni Romadhoni
 * email: oitocdev@gmail.com
 * This is how magic works
 */

class Signin_m extends MY_Model{

    protected $_table_admin = 'tbl_admin';
    protected $_table_role = 'tbl_role';
    protected $_table_permission = 'tbl_permission';
    protected $_table_role_permission = 'tbl_role_permission';

    function __construct(){
        parent::__construct();
 
    }

    public function signin($username, $password){

        $username = strtolower($username);
        //encript password to sha256
        $password = hash('sha256',$username.$password);

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->from($this->_table_admin);
        $q = $this->db->get();

        if ($q->num_rows()>0){

            $result = $q->result();

            $arruser['username'] = $result[0]->username;
            $arruser['role'] = $result[0]->user_role;

            $resrole = $this->role_user($arruser['role']);

            $this->session->set_userdata($arruser);

            return true;
        }else{
            return false;
        }
    }

    public function role_user($role){

        $this->db->where('id_role', $role); 
        $this->db->from($this->_table_role);
        $q = $this->db->get();
        if ($q->num_rows()>0){
            $result = $q->result();
            return $result[0];
        }else{
            return false;
        }

    }

}