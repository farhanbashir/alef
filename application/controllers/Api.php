<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Api extends REST_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('authenticate','',TRUE);
	   $this->load->model('news','',TRUE);
	 }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function checkKey_post()
    {
    	$data = array();

    	$key = $this->post('key');
    	$phone = $this->post('phone');
    	if(!$key)
        {
            $this->response(NULL, 400);
        }
    	$result = $this->authenticate->key_exists($key,$phone);

       if(is_array($result))
	   {
	    	$data["header"]["error"] = "0";
        	$data["header"]["message"] = "Key exists"; 
	   }
	   else
	   {
			$data["header"]["error"] = "1";
        	$data["header"]["message"] = "Key not exists.";
	   }
       
       $this->response($data);
    }

    function requestKey_post()
    {
    	$data = array();

    	$phone = $this->post('phone');
    	if(!$phone)
        {
            $this->response(NULL, 400);
        }

    	$result = $this->authenticate->get_key_by_phone($phone);
    	
       if(count($result) > 0)
	   {
	    	$data["header"]["error"] = "0";
        	$data["body"] = $result; 
	   }
	   else
	   {
			$data["header"]["error"] = "1";
        	$data["header"]["message"] = "No key found.";
	   }
       
       $this->response($data);
    }

    function getNews_get()
    {
    	$data = array();

    	$result = $this->news->get_news();
    	
       if(count($result) > 0)
	   {
	    	$data["header"]["error"] = "0";
        	$data["body"] = $result; 
	   }
	   else
	   {
			$data["header"]["error"] = "1";
        	$data["header"]["message"] = "No news found.";
	   }
       
       $this->response($data);
    }
}
