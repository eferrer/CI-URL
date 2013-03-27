<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *creates all the public views, depending on the first URI segment being recognised
 */
class Page extends CI_Controller {
	
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
	
	function home()
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
	            $data['content'] = $this->Cmsmodel->getContentByPageIDh();
	            //$data['content'] = $this->Cmsmodel->getContentByPageIDh();
	            $data['mainHeading'] = $this->Cmsmodel->getMainHeadingByPageIDh();
	            $data['tagline'] = $this->Cmsmodel->getTaglineh();
	            

	            $this->load->view('includes/startHTML', $data);
	            $this->load->view('homeView', $data);
	            $this->load->view('includes/endHTML');
	}

}
// end class