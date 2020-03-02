<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
        $this->load->helper('date');
        $this->load->library('form_validation');
    }
    public function Signin()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'password_confirm', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
        {   
            $response = array();
            $response['status_code'] = 422;
            $response['reason'] = "Validation Failed";
            $response['validation_message'] = validation_errors();
            $result = $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($response));
            return $result;
        }else{
            $userVal = array();
            $password = $this->input->post('password',TRUE);
            $uname = $this->input->post('name',TRUE);
            $confirmation_is_id = md5(uniqid(rand()));
            $hash = md5($password);
            $userVal['full_name'] = $this->input->post('name',TRUE);
            $userVal['email'] = $this->input->post('email',TRUE);
            $userVal['phone_number'] = $this->input->post('contact',TRUE);
            $userVal['password'] = $hash;
            $userVal['created_date'] = date("d m Y");
            $userVal['confirm_id'] = $confirmation_is_id;
            $userVal['active_status'] = 1;
            $new_data = array( 'username' => $uname, 'status' => TRUE);
            $this->session->set_userdata($new_data);
            $result = $this->User_model->save($userVal);
            // $config = array(
			// 	'protocol'  => 'smtp',
			// 	'smtp_host' => 'ssl://smtp.gmail.com',
			// 	'smtp_port' => 465,
			// 	'smtp_user' => 'user@gmail.com',
			// 	'smtp_pass' => 'gmail_password',
			// 	'mailtype'  => 'html',
			// 	'charset'   => 'iso-8859-1',
			// 	'smtp_auth' => TRUE, 
			// 	'mailpath'  => '/usr/sbin/sendmail',
			// );
		    // $this->email->initialize($config);
			// $this->email->set_mailtype("html");
			// $this->email->set_newline("\r\n");
            // $this->email->from('mukeshswamy9945@gmail.com', 'mukesh');
            // $this->email->to('vfcbangaloresam@gmail.com');
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');
            // $this->email->subject('Email Test');
            // $this->email->message('Testing the email class.');
            // $this->email->send();
        }
    }
    public function Login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
        {   
            $response = array();
            $response['status_code'] = 422;
            $response['reason'] = "Validation Failed";
            $response['validation_message'] = validation_errors();
            $result = $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($response));
            return $result;
        }else{
            $password = $this->input->post('password',TRUE);
            $hash = md5($password);
            $userVal = $this->input->post('email',TRUE);
            $result = $this->User_model->can_login($userVal, $hash);
        }
    }
    public function Billing($ids)
    {
        $this->form_validation->set_rules('term', 'Term', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('sneaker_size', 'Sneakersize', 'required');
        $this->form_validation->set_rules('shirt_size', 'Shirtsize', 'required');
        $this->form_validation->set_rules('term_prize', 'tprize', 'required');
        $this->form_validation->set_rules('product_name', 'pname', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('address2', 'Address2', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required|regex_match[/^[0-9]{10}$/]');
        if ($this->form_validation->run() == FALSE) //If validation falied then return 422 status code.
        {   
            $response = array();
            $response['status_code'] = 422;
            $response['reason'] = "Validation Failed";
            $response['validation_message'] = validation_errors();
            $result = $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($response));
            return $result;
        }else{
            $userVal = array();
            $userVal['address1'] = $this->input->post('address1',TRUE);
            $userVal['address2'] = $this->input->post('address2',TRUE);
            $userVal['phone_number'] = $this->input->post('contact',TRUE);
            $userVal['cart'] = 1;
            $jarr['term'] =$this->input->post('term',TRUE);
            $jarr['gender'] =$this->input->post('gender',TRUE);
            $jarr['sneaker_size'] =$this->input->post('sneaker_size',TRUE);
            $jarr['shirt_size'] =$this->input->post('shirt_size',TRUE);
            $jarr['term_prize'] =$this->input->post('term_prize',TRUE);
            $jarr['product_name'] =$this->input->post('product_name',TRUE);
            $userVal['order_details'] = json_encode($jarr,true);
            $new_data = array( 'cart' => 1);
            $this->session->set_userdata($new_data);
            $result = $this->User_model->saveAddress($userVal,$ids);
        }
    }

    public function Logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('cart');
        redirect(base_url());
    }
    public function showCrate($CreateId) // show individual crates
    {
        $Crate = $this->User_model->showIndividualCrate($CreateId);
        echo json_encode($Crate); 
    }
}



?>