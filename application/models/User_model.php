<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    public function	__construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('date');
        $this->load->library('form_validation');
    }
    public function save($data)
	{	
		// inserting the user data
        $this->db->insert('users',$data);  
        $userId = $this->db->insert_id();   
        //return 202 status code on successful completion.
        $response['status_code'] = 201;
        $response['response_message'] = "User created Succesfully";
        $response['data'] = $data;
        $response['id'] = $userId;
        $new_data = array( 'userid' => $userId);
        $this->session->set_userdata($new_data);
        $res = $this->output->set_status_header(201)->set_content_type('application/json')->set_output(json_encode($response));   
        return $res;
    }
    function can_login($email, $password)  
    {  
         $this->db->where('email', $email);  
         $this->db->where('password', $password);  
         $query = $this->db->get('users'); 
         $row = $query->row();
         if (isset($row))
         {
             $id = $row->id;
         }
         if($query->num_rows() == 1)  
         {  
            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'username' => $row->full_name,
                    'email' => $row->email,
                    'cart' => $row->cart,
                    'status' => true
                    );
            $this->session->set_userdata($data);
            $response = array();
            $response['status_code'] = 202;
            $response['response_message'] = "Login Succesful";
            $response['uid'] = $id;
            $res = $this->output->set_status_header(202)->set_content_type('application/json')->set_output(json_encode($response));
            return $res; 
         }  
         else  
         {  
            $response['status_code'] = 401;
            $response['reason'] = "Email or Password Does Not Exists";
            $res = $this->output->set_status_header(401)->set_content_type('application/json')->set_output(json_encode($response));
            return $res;       
         }  
    }
    public function saveAddress($data,$id)
	{	
		// inserting the user data    
        $this->db->where('id', $id);
        $this->db->update('users', $data); 
        $datas = array( 
                'userdata' => $data
            );
        $this->session->set_userdata($datas); 	 
        //return 202 status code on successful completion.
        $response['status_code'] = 201;
        $response['response_message'] = "User address added Succesfully";
        $res = $this->output->set_status_header(201)->set_content_type('application/json')->set_output(json_encode($response));
        return $res;
    }
    public function showIndividualCrate($id) //show Individual company  
    {
        $this->db->select('tub.id as crateid, tub.tub_name as tubname, tub.tub_price as tubprice');
        $this->db->from('tub');
        $this->db->where('tub.id', $id);
        $crate = $this->db->get();
        return $crate->result_array();
    }
}

?>