<?php
/**
 * Created by IntelliJ IDEA.
 * User: nuwan
 * Date: 9/1/16
 * Time: 9:11 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Datamodel');
        $this->load->model('Verification');
        $this->load->library('session');
        $this -> load ->database();

    }

    public function index()
    {
        $this->load->model('Datamodel');
        $this->load->view('ui/header');
        $this->load->view('ui/index');
        $this->load->view('ui/footer');
    }
    public function registration()
    {
        $this->load->view('ui/header');
        $this->load->view('ui/registration');
        $this->load->view('ui/footer');
    }
    public function saveregistration()
    {
        $data1 = $this->input->post('title');
        $data2 = $this->input->post('company_name');
        $data3 = $this->input->post('phone');
        $data4 = $this->input->post('email');
        $data5 = $this->input->post('address');
        $data6 = $this->input->post('date');
        $data7 = $this->input->post('dbc');
        $data8 = $this->input->post('unmae');
        $data9 = $this->input->post('uaddress');
        $data10 = $this->input->post('uphone');
        $data11 = $this->input->post('usefax');
        $data12 = $this->input->post('uemail');
        $data13 = $this->input->post('lyc');
        $data14 = $this->input->post('designation');
        $data15 = $this->input->post('yeq');
        $data16 = $this->input->post('ypq');
        $data17 = $this->input->post('noyi');
        $data18 = $this->input->post('companyname1');
        $data19 = $this->input->post('address1');
        $data20 = $this->input->post('city1');
        $data21 = $this->input->post('relation_1');
        $data22 = $this->input->post('companyname2');
        $data23 = $this->input->post('address2');
        $data24 = $this->input->post('city2');
        $data25 = $this->input->post('relation2');
        $data26 = $this->input->post('comapnyname3');
        $data27 = $this->input->post('address3');
        $data28 = $this->input->post('city3');
        $data29 = $this->input->post('relation3');
        $data30 = $this->input->post('phone_r');

        $data31 = $this->input->post('fax_r');
        $data32 = $this->input->post('email_r');
        $data33 = $this->input->post('other_r');
        $data34 = $this->input->post('phone_r_1');
        $data35 = $this->input->post('fax_r_1');
        $data36 = $this->input->post('email_r_1');
        $data37 = $this->input->post('other_r_1');

        $data38 = $this->input->post('phone_r_2');
        $data39 = $this->input->post('fax_r_2');
        $data40 = $this->input->post('email_r_2');

        $data41 = $this->input->post('other_r_2');
        $data42 = $this->input->post('signature');
        $data43 = $this->input->post('nametitle');
        $data44 = $this->input->post('date_reg');
        $data45 = $this->input->post('signature1');
        $data46 = $this->input->post('nametitle1');
        $data47 = $this->input->post('date_reg1');


        $array_set = array(

            'data1'=>$data1,
            'data2'=>$data2,
            'data3'=>$data3,
            'data4'=>$data4,
            'data5'=>$data5,
            'data6'=>$data6,
            'data7'=>$data7,
            'data8'=>$data8,
            'data9'=>$data9,
            'data10'=>$data10,
            'data11'=>$data11,
            'data12'=>$data12,
            'data13'=>$data13,
            'data14'=>$data14,
            'data15'=>$data15,
            'data16'=>$data16,
            'data17'=>$data17,
            'data18'=>$data18,
            'data19'=>$data19,
            'data20'=>$data20,
            'data21'=>$data21,
            'data22'=>$data22,
            'data23'=>$data23,
            'data24'=>$data24,
            'data25'=>$data25,
            'data26'=>$data26,
            'data27'=>$data27,
            'data28'=>$data28,
            'data29'=>$data29,
            'data30'=>$data30,
            'data31'=>$data31,
            'data32'=>$data32,
            'data33'=>$data33,
            'data34'=>$data34,
            'data35'=>$data35,
            'data36'=>$data36,
            'data37'=>$data37,
            'data38'=>$data38,
            'data39'=>$data39,
            'data40'=>$data40,
            'data41'=>$data41,
            'data42'=>$data42,
            'data43'=>$data43,
            'data44'=>$data44,
            'data45'=>$data45,
            'data46'=>$data46,
            'data47'=>$data47


        );
        $this->Datamodel->Dataset($array_set);

    }
    function datasubmision()
    {
        $this->load->view('ui/header');
        $this->load->view('ui/form');
        $this->load->view('ui/footer');
    }
    function log()
    {
        $this->load->view('ui/header');
        $this->load->view('Auth/log');
        $this->load->view('ui/footer');
    }
    function logauth()
    {
        $result = $this->Verification->authuser();
        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->uid,
                    'username' => $row->uname,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sess_array);
            }
            $this->load->view('ui/authlog');

        }
        else
        {
            $this->load->view('ui/errorlog');
        }

    }
    function login(){
        $this->load->view('ui/header');
        $this->load->view('ui/login');
        $this->load->view('ui/footer');
    }
    function logout()
    {
        $this->session->sess_destroy();
        $this-> index();
    }

    function three_help_tech(){

        $this->load->view('ui/3_help_tech');

    }
    function three_mba_request(){

        $this->load->view('ui/three_mba_request');

    }
    function four_mba_request(){

        $this->load->view('ui/4_mba_request');

    }
    function four_mba_tech(){

        $this->load->view('ui/4_mba_tech');

    }
    function five_advertisment_buy(){

        $this->load->view('ui/5_advertisment_buy');

    }
    function five_advertisment_sale(){

        $this->load->view('ui/5_advertisment_sale');


    }
}
