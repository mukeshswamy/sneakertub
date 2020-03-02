<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('Products_Model');
	}

	public function index()
	{
		$this->load->view('index');
		// if($this->session->userdata('status') == 1){
		// 	$this->load->view('index');
		// }else{
		// 	redirect(base_url("login"));
		// }
	}
	public function subscribe()
	{
		$this->load->view('subscribe');
	}
	public function aboutus()
	{
		$this->load->view('aboutus');
	}
	public function faq()
	{
		$this->load->view('faq');
	}
	public function process($url = null)
	{
		if(!empty($url)){
			$data['id'] = $url;
			$data['tub'] = $this->Products_Model->get_product($data);
			// json_encode($data, true);

			$this->load->view('header');
			$this->load->view('process',$data);
		}else{
			$this->load->view('process');
		}
	}
	public function loginsignin()
	{
		$this->load->view('signup');
	}
	public function pdf()
	{
		$this->load->view('generate_pdf');
	}

	public function session(){
		var_dump($_SESSION);
	}
}
