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
	    $data=array();

    	$this->load->model('Cmsmodel');

    	$data['menu'] = $this->Cmsmodel->getMenuParts();
    	$data['pageParts'] = $this->Cmsmodel->getPageParts();
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

	//==============================================================

    // LOAD HOME PAGE

    //==============================================================

	function home()
	{
		$data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['pageParts'] = $this->Cmsmodel->getPageParts();
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

	//==============================================================

    // LOAD ABOUT PAGE

    //==============================================================

	function about()
	{
	   $data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['pageParts'] = $this->Cmsmodel->getPageParts();
        $data['tagline'] = $this->Cmsmodel->getTagline();

        // GET LIST OF TESTIMONIALS FOR ABOUT PAGE 
        $data['testimonialDetails'] = $this->Cmsmodel->getTestimonials();
        //$data['name'] = $this->Cmsmodel->getName();
        
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

	//==============================================================

    // LOAD CLASSES PAGE

    //==============================================================

	function classtimes()
	{
		$data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['pageParts'] = $this->Cmsmodel->getPageParts();
        $data['tagline'] = $this->Cmsmodel->getTagline();

        $data['classDetails'] = $this->Cmsmodel->getClassDetails();
        
        // GET LIST OF PRICES
        $data['priceDetails'] = $this->Cmsmodel->getPriceDetails();
        
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

	//==============================================================

    // LOAD VIDEO PAGE

    //==============================================================

	function video()
    {
		$data=array();

        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['pageParts'] = $this->Cmsmodel->getPageParts();
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

	//==============================================================

    // LOAD CONTACT ME PAGE

    //==============================================================

	function contact()
	{
		$data=array();

        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->model('Cmsmodel');
		
		$this->form_validation->set_rules('firstname', '5', 'required|min_length[5]');
		$this->form_validation->set_rules('lastname', '5', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('enquiry', 'enquiry', 'required');
		
		// $this->form_validation->set_message('required', 'We need at least %s characters, please');
		$this->form_validation->set_message('required', 'This field is required');
		$this->form_validation->set_message('min_length', 'A minimum of 5 characters is required');
		$this->form_validation->set_message('valid email', 'Please enter a valid email address');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


        $data['menu'] = $this->Cmsmodel->getMenuParts();
        $data['pageParts'] = $this->Cmsmodel->getPageParts();
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
			$data["message"]="";
            $this->load->view('includes/startHTML', $data);
    		$this->load->view('contactView', $data);
    		$this->load->view('includes/endHTML');
		}
		else
		{
			//$this->load->view('formsuccess');
            $data["message"]= "Your enquiry has successfully been sent";
            
             $this->load->library('email');

            $this->email->from(set_value("email"), set_value('firstname'), set_value('lastname'));
            $this->email->to('eileenferrer.nz@gmail.com'); 

            $this->email->subject('Enquiry from your website');
            $this->email->message(set_value('enquiry'));  

            $this->email->send();

            //echo $this->email->print_debugger();
            
		}
	}


     //==============================================================

    // SAVE CONTACT TO THE DATABASE

    //==============================================================
    
    function saveContact()
    {
        $data=array();


        $this->load->model('Cmsmodel');
        
         if($this->input->post('sendEmail')){
            
            if ( $this->Cmsmodel->saveContact()){
               
                //redirect (base_url() . 'admin/classtimes/3');
             
             $data['menu'] = $this->Cmsmodel->getMenuParts();
             $data['pageParts'] = $this->Cmsmodel->getPageParts();

            $this->load->view('includes/startHTML', $data);
            $this->load->view('thankYou', $data);
            $this->load->view('includes/endHTML');

            }
         }
         // else{

         //    $data['menu'] = $this->Cmsmodel->getMenuParts();

         //    $this->load->view('includes/startHTML', $data);
         //    $this->load->view('thankYouMessage', $data);
         //    $this->load->view('includes/endHTML');
         // }
    }

//===============================================
}
// end class