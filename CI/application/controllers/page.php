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
	            $data['day'] = $this->Cmsmodel->getClassDay();
	            $data['time'] = $this->Cmsmodel->getClassTime();
	            $data['place'] = $this->Cmsmodel->getClassPlace();
	            $data['address'] = $this->Cmsmodel->getClassAddress();
	            
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

}
// end class