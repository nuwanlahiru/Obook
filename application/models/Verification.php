<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification extends CI_Model
{


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    public function authuser()
    {

        $this->load->database();
        $uname = $this->input->post('username');
        // $get_user_id = $this-> getUsername($uname);
        // print_r($get_user_id);
        $this->db->select('*');
        $this->db->where('uname', $uname);
        $this->db->where('pword', md5($this->input->post('password')));
        $query = $this->db->get('tb_user');


        if ($query->num_rows() > 0) {

            return $query->result();
        } else {
            return false;
        }

        // $data = $this->input->post();
        //  $this->db->where('userName',$name);
        //  $this->db->get('tb_adminauth');
        // $data = array_shift($auth->result_array());
    }

}

    ?>