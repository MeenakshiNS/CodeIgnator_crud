<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model {

    function insert_data($data){
         $this->db->insert('user', $data);
         return true;

    }

    function display_records()
    {
      $query=$this->db->get("user");
    //   print_r($query);
    //   print_r($query->result());
      return $query->result();
    }

    function displayrecordsById($id){
      $query=$this->db->query("select * from user where user_id= '$id'");
	return $query->result();

    }

}

?>