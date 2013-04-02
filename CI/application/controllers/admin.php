<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *creates all the public views, depending on the first URI segment being recognised
 */
class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
    }
	
	function index()
	{
		echo 'File :'. __FILE__;
		echo '<hr />';
		echo 'method: '.__FUNCTION__;
		echo '<hr />';
		echo 'uri string :'.$this->uri->uri_string();
		echo '<hr />';
		$arr = $this->uri->segment_array();
		echo '<pre>';
			print_r($arr);	
		echo '</pre>';
	}
	
	function login()
	{
		
		$this->load->helper('form');
		
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|valid_password');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('loginView');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }
	
	function update()
	{
		echo 'File :'. __FILE__;
		echo '<hr />';
		echo 'method: '.__FUNCTION__;
		echo '<hr />';
		echo 'uri string :'.$this->uri->uri_string();
		echo '<hr />';
		$arr = $this->uri->segment_array();
		echo '<pre>';
			print_r($arr);	
		echo '</pre>';
	}
	
	function homeUpdate()
	{
        $data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['mainHeading'] = $this->Cmsmodel->getMainHeading();
        $data['tagline'] = $this->Cmsmodel->getTagline();
        
        // PUT THIS IN TO AVOID BROWSER CACHING IN CI
        $this->output->set_header("HTTP/1.0 200 OK");
        $this->output->set_header("HTTP/1.1 200 OK");
        $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");

        $this->load->view('includes/startHTML', $data);
        $this->load->view('aboutUpdate', $data);
        $this->load->view('includes/endHTML');
    }
	
    
    function aboutUpdate()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['mainHeading'] = $this->Cmsmodel->getMainHeading();
        $data['tagline'] = $this->Cmsmodel->getTagline();

        // GET LIST OF TESTIMONIALS FOR ABOUT PAGE 
        $data['testimonialDetails'] = $this->Cmsmodel->getTestimonials();
        $data['name'] = $this->Cmsmodel->getName();
        
        // GET PROMOTIONAL DETAILS
        $data['promoDetails'] = $this->Cmsmodel->getPromotion();
        
        // PUT THIS IN TO AVOID BROWSER CACHING IN CI
        $this->output->set_header("HTTP/1.0 200 OK");
        $this->output->set_header("HTTP/1.1 200 OK");
        $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");

        $this->load->view('includes/startHTML', $data);
        $this->load->view('aboutUpdate', $data);
        $this->load->view('includes/endHTML');
    }
    
    function classtimesUpdate(){
        
    }
	
	
	

}
// end class