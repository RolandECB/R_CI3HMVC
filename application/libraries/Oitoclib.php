<?php 

class Oitoclib {

    var $CI;

    var $settings = "";

    public function __construct()
	{
        $this->CI = & get_instance();
        $this->CI->load->model('permission_m');
        $this->settings = $this->get_settings();
    }

    public function get_settings(){
        $this->CI->db->where('id', 1);
         $this->CI->db->from('tbl_config');
        $q= $this->CI->db->get();
        if ($q->num_rows()>0){
            $result = $q->result();
            return $result[0];
        }else{
            return false;
        }
    }


    public function get_perms_sub($name_permission){
        $strlike = $name_permission."_";
        $this->CI->db->like('name_permission', $strlike, 'after');
        $this->CI->db->where('is_menu', '0');
        $this->CI->db->from('tbl_permission'); 
        $q = $this->CI->db->get();
        if ($q->num_rows()>0){
            $result = $q->result();
            return $result;
        }else{
            return false;
        }
    }

    public function get_role_permission($role){
        /*** semua baik itu menu atau bukan ***/

        $array = array();

        $this->CI->db->where('id_role', $role);
        $this->CI->db->from('tbl_role_permission');
        $q = $this->CI->db->get();
        if ($q->num_rows()>0){
            $result = $q->result();
            foreach($result as $row){
                $array[] = $row->id_permission;
            }

            return $array;
        }else{
            return false;
        }
    }

    public function check_permission($name_permission){

        $this->CI->db->where('name_permission', $name_permission);
        $this->CI->db->where('tbl_role_permission.id_role', $this->CI->session->userdata('role'));
        $this->CI->db->join('tbl_permission', 'tbl_permission.permission_id = tbl_role_permission.id_permission', 'left');
        $this->CI->db->select('tbl_role_permission.*');
        $this->CI->db->from('tbl_role_permission');
        $q = $this->CI->db->get();
        if ($q->num_rows()>0){
            return true;
        }else{
            return false;
        }

    }

    /*** untuk informasi di dashboard ***/

}



