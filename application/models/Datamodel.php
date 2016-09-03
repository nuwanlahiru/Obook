<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamodel extends CI_Model {



    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this -> load ->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('email');


    }




    function Dataset($array_set)
    {
        //  $address = $this->input->post('district');

        $data = array(
            'uin_id' => '',
            'bus_con_companyname' => $array_set['data1'],
            'bus_con_phone'	=>$array_set['data2'],
            'bus_con_fax_email'	=>$array_set['data3'],
            'bus_con_address'	=>$array_set['data4'],
            'bus_con_date_bus_com'	=>$array_set['data5'],
            'institution'	=>$array_set['data6'],
            'usr_name'	=>$array_set['data7'],
            'usr_home_address_line_1'	=>$array_set['data8'],
            'usr_home_address_line_2'	=>$array_set['data9'],
            'usr_phone'	=>$array_set['data10'],
            'usr_fax'	=>$array_set['data11'],
            'usr_email'	=>$array_set['data12'],
            'usr_years_within_company'	 =>$array_set['data13'],
            'usr_designation'		 =>$array_set['data14'],
            'usr_education_qualification'	 =>$array_set['data15'],
            'usr_professional_qualification'	=>$array_set['data16'],
            'noy_in_industry'	=>$array_set['data17'],
            'tr_ref_fax'		 =>$array_set['data18'],
            'tr_ref_company_name'	=>$array_set['data19'],
            'tr_ref_address' =>$array_set['data20'],
            'tr_ref_relation_ship'		=>$array_set['data21'] ,
            'tr_ref_phone'		 =>$array_set['data22'],
            'tr_ref_city_state'		=>$array_set['data23'],
            'tr_ref_other'	 =>$array_set['data24'],
            'tr_ref_1_company_name'		=>$array_set['data25'] ,
            'tr_ref_1_address'	 =>$array_set['data26'],
            'tr_ref_1_city_state'	 =>$array_set['data27'],
            'tr_ref_1_relation_ship'	=>$array_set['data28'],
            'tr_ref_1_phone'	 =>$array_set['data29'],
            'tr_ref_1_fax'		=> $array_set['data30'],
            'tr_ref_1_email'	=>$array_set['data31'],
            'tr_ref_2_other'		=>$array_set['data32'],
            'tr_ref_2_city_state'	=> $array_set['data33'],
            'tr_ref_2_company_name'		 =>$array_set['data34'],
            'tr_ref_2_address'		 =>$array_set['data35'],
            'tr_ref_2_relation_ship'	=>$array_set['data36'],
            'tr_ref_2_email' =>$array_set['data37'],
            'tr_ref_2_phone'	=>$array_set['data38'],
            'tr_ref_2_fax'	 =>$array_set['data39'],
            'tr_ref_1_other'	=>$array_set['data40'],
            'name_2'		 =>$array_set['data41'],
            'name_1'		 =>$array_set['data42'],
            'signature_1'=>$array_set['data43'],
            'date_1'		 =>$array_set['data44'],
            'date_2'		 =>$array_set['data45'],
            'signature_2'	=>$array_set['data46'],
            'tr_ref_email'=>$array_set['data47']
        );

        $this->db->insert("tb_user_data", $data);
        $id = $this->db->insert_id() ;
        $this->createusercredential($id,$array_set['data12']);
        redirect('MainController/datasubmision');
    }

    public function send_mail($email,$pass) {
        $from_email = "support@macroautobook.com";
        $to_email = $email;
        //Load email library
        $this->load->library('email');

        $this->email->from('support@macroautobook.com','Login Information');
        $this->email->to($to_email);
      //  $this->email->cc('another@another-example.com');
      //  $this->email->bcc('them@their-example.com');

        $this->email->subject('Log Information');
        $this->email->message('Password'.' '.$pass);

        $this->email->send();
    }

    function createusercredential($id,$email)
    {
        $pass = $this->generateRandomString();
        $pword = md5($pass);
        $data = array(

            'uin_id' => $id,
            'uname'	=>$email,
            'pword'	=> $pword
        );
        $this->db->insert("tb_user", $data);

        $this->send_mail($email,$pass);
    }


    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}


// return $query->result();

