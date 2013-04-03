<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *creates all the public views, depending on the first URI segment being recognised
 */
class Page extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->output->enable_profiler(FALSE);	
    }
	
	function index()
	{
		// echo "SELECT H1
  		// FROM tbContent
  		// WHERE pageID =
  		// (SELECT pageID FROM tbPages
  		// WHERE fileName = ' ".$this->uri->segment(1)." ' )";
		
		// echo 'File :'. __FILE__;
		// echo '<hr />';
		// echo 'method: '.__FUNCTION__;
		// echo '<hr />';
		// echo 'uri string :'.$this->uri->uri_string();
		// echo '<hr />';
		// $arr = $this->uri->segment_array();
		// echo '<pre>';
		// 	print_r($arr);	
		// echo '</pre>';

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
        $this->load->view('homeView', $data);
        $this->load->view('includes/endHTML');
	}
	
	function home()
	{
		// echo "SELECT H1
  		// FROM tbContent
  		// WHERE pageID =
  		// (SELECT pageID FROM tbPages
  		// WHERE fileName = ' ".$this->uri->segment(1)." ' )";
		
		// echo 'File :'. __FILE__;
		// echo '<hr />';
		// echo 'method: '.__FUNCTION__;
		// echo '<hr />';
		// echo 'uri string :'.$this->uri->uri_string();
		// echo '<hr />';
		// $arr = $this->uri->segment_array();
		// echo '<pre>';
		// 	print_r($arr);	
		// echo '</pre>';

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
        $this->load->view('homeView', $data);
        $this->load->view('includes/endHTML');
	}

	function about()
	{
		// echo 'File :'. __FILE__;
		// echo '<hr />';
		// echo 'method: '.__FUNCTION__;
		// echo '<hr />';
		// echo 'uri string :'.$this->uri->uri_string();
		// echo '<hr />';
		// $arr = $this->uri->segment_array();
		// echo '<pre>';
		// 	print_r($arr);	
		// echo '</pre>';

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
        $this->load->view('aboutView', $data);
        $this->load->view('includes/endHTML');
	}

	function classtimes()
	{
		// echo 'File :'. __FILE__;
		// echo '<hr />';
		// echo 'method: '.__FUNCTION__;
		// echo '<hr />';
		// echo 'uri string :'.$this->uri->uri_string();
		// echo '<hr />';
		// $arr = $this->uri->segment_array();
		// echo '<pre>';
		// 	print_r($arr);	
		// echo '</pre>';

		$data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['mainHeading'] = $this->Cmsmodel->getMainHeading();
        $data['tagline'] = $this->Cmsmodel->getTagline();

        // GET CLASS DETAILS
        // $data['day'] = $this->Cmsmodel->getClassDay();
        // $data['time'] = $this->Cmsmodel->getClassTime();
        // $data['place'] = $this->Cmsmodel->getClassPlace();
        // $data['address'] = $this->Cmsmodel->getClassAddress();

        $data['classDetails'] = $this->Cmsmodel->getClassDetails();
        
        // GET LIST OF WHAT IS NEEDED FOR CLASS
        $data['needsDetails'] = $this->Cmsmodel->getNeedsList();

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
        $this->load->view('classtimesView', $data);
        $this->load->view('includes/endHTML');
	}

	function gallery(){
		// echo "SELECT H1
  		// FROM tbContent
  		// WHERE pageID =
  		// (SELECT pageID FROM tbPages
  		// WHERE fileName = ' ".$this->uri->segment(1)." ' )";
		
		// echo 'File :'. __FILE__;
		// echo '<hr />';
		// echo 'method: '.__FUNCTION__;
		// echo '<hr />';
		// echo 'uri string :'.$this->uri->uri_string();
		// echo '<hr />';
		// $arr = $this->uri->segment_array();
		// echo '<pre>';
		// 	print_r($arr);	
		// echo '</pre>';

		$data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['tagline'] = $this->Cmsmodel->getTagline();
        
        // PUT THIS IN TO AVOID BROWSER CACHING IN CI
       	$this->output->set_header("HTTP/1.0 200 OK");
		$this->output->set_header("HTTP/1.1 200 OK");
		$this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

        $this->load->view('includes/startHTML', $data);
        $this->load->view('galleryView', $data);
        $this->load->view('includes/endHTML');
	}

	function contact()
	{
		// echo "SELECT H1
  		// FROM tbContent
  		// WHERE pageID =
  		// (SELECT pageID FROM tbPages
  		// WHERE fileName = ' ".$this->uri->segment(1)." ' )";
		
		// echo 'File :'. __FILE__;
		// echo '<hr />';
		// echo 'method: '.__FUNCTION__;
		// echo '<hr />';
		// echo 'uri string :'.$this->uri->uri_string();
		// echo '<hr />';
		// $arr = $this->uri->segment_array();
		// echo '<pre>';
		// 	print_r($arr);	
		// echo '</pre>';

		$data=array();

        		$this->load->model('Cmsmodel');
        
        		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('firstname', '5', 'required|min_length[5]');
		$this->form_validation->set_rules('lastname', '5', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		// $this->form_validation->set_message('required', 'We need at least %s characters, please');
		$this->form_validation->set_message('required', 'This field is required');
		$this->form_validation->set_message('min_length', 'A minimum of 5 characters is required');
		$this->form_validation->set_message('valid email', 'Please enter a valid email address');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


	        $data['menu'] = $this->Cmsmodel->getMenuParts();
	        $data['mainHeading'] = $this->Cmsmodel->getMainHeading();
	        $data['tagline'] = $this->Cmsmodel->getTagline();

	        // GET PROMOTIONAL DETAILS
	        $data['promoDetails'] = $this->Cmsmodel->getPromotion();
        
	        // PUT THIS IN TO AVOID BROWSER CACHING IN CI
	       	$this->output->set_header("HTTP/1.0 200 OK");
		$this->output->set_header("HTTP/1.1 200 OK");
		$this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/startHTML', $data);
            		$this->load->view('contactView', $data);
            		$this->load->view('includes/endHTML');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
	
	

}
// end class