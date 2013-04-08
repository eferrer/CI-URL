<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *creates all the public views, depending on the first URI segment being recognised
 */
class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
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
		$this->load->library('form_validation');
        
        $this->load->model('Cmsmodel');
        
        $data['menu'] = $this->Cmsmodel->getMenuParts();
        
                $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|valid_password');
                
                // $this->form_validation->set_message('required', 'We need at least %s characters, please');
                // $this->form_validation->set_message('min_length', 'Surely you can manage %s lousy characters');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('includes/startHTML', $data);
                    $this->load->view('loginView');
                    $this->load->view('includes/endHTML');
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

    //==============Sample add new page code==========

    // make a new page
  
  
    // public function newPage()
    // {
    //     // These should be autoloaded. Included here to remind you.
    //     $this->load->helper(array('form', 'url'));
    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('title', '5', 'required|min_length[5]');
    //     $this->form_validation->set_rules('content', '5', 'required|min_length[5]');
        
    //     $this->form_validation->set_message('required', 'We need at least %s characters, please');
    //     $this->form_validation->set_message('min_length', 'Surely you can manage %s lousy characters');
        
    //     //run the rules. If anything fails show the form
    //     if ($this->form_validation->run() == FALSE){
    //         $this->load->view('includes/startHTML');
    //         $this->load->view('CMS_newPage');
    //         $this->load->view('includes/endHTML');
    //     }else{
    //         // this should be in a conditional statement to handle what happens if putContent() fails
    //         $this->Cmsmodel->putContent();
    //         redirect('cms');            
    //     }       

    // }

    // ==========end sample add new Page code===========

//==============Sample update page code==========

    // function updatePage()
    // {
    //     $this->load->helper(array('form', 'url'));
    //     $this->load->library('form_validation');
    //     $this->load->model('Cmsmodel');

    //     $this->form_validation->set_rules('title', '5', 'required|min_length[5]');
    //     $this->form_validation->set_rules('content', '5', 'required|min_length[5]');
        
    //     $this->form_validation->set_message('required', 'We need at least %s characters, please');
    //     $this->form_validation->set_message('min_length', 'Surely you can manage %s lousy characters');
    //     //run the rules. If anything fails show the form
    //     if ($this->form_validation->run() == FALSE){
    //         $data['query_result']= $this->Cmsmodel->getContentById();
    //         $this->load->view('CMS_updatePage',$data);
            
    //     }else{
    //         if($this->Cmsmodel->updateContent() ){
    //             redirect('cms');
    //         }else{
    //             redirect('cms/admin');
    //         }
    //     } 
    // }

     //***************************************************************************************************
    
    //  HOME PAGE
    
    //***************************************************************************************************   
            
    //==============================================================

    // UPDATE HOME PAGE
    //exit(__FILE__.__LINE__);

    //==============================================================

	function home()
	{
        $data=array();

        $this->load->model('Cmsmodel');

        if($this->input->post('updatePage')){

             if ( $this->Cmsmodel->updateMainHeading()){
               if ( $this->Cmsmodel->updateContent()){
                    if ( $this->Cmsmodel->updateTagline()){
                        redirect (base_url() . 'admin/home');
                }        
            }
        }

        }else{
            $data['menu'] = $this->Cmsmodel->getMenuParts();
            $data['pageParts'] = $this->Cmsmodel->getPagePartsAdmin();
            $data['tagline'] = $this->Cmsmodel->getTaglineAdmin();

            // PUT THIS IN TO AVOID BROWSER CACHING IN CI
            $this->output->set_header("HTTP/1.0 200 OK");
            $this->output->set_header("HTTP/1.1 200 OK");
            $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
            $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('homeUpdate', $data);
            $this->load->view('includes/endHTML');
         }
     //   $this->Cmsmodel->updateMainHeading();
        
    }
    
     //***************************************************************************************************
    
    //  ABOUT ME PAGE
    
    //***************************************************************************************************
    //==============================================================

    // UPDATE ABOUT ME PAGE

    //==============================================================
    
    function about()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
         if($this->input->post('updatePage')){
 
              if ( $this->Cmsmodel->updateMainHeading()){
                if ( $this->Cmsmodel->updateContent()){
                     if ( $this->Cmsmodel->updateTagline()){
                        if ( $this->Cmsmodel->updatePromotion()){
                            
                         redirect (base_url() . 'admin/about');
                     
                         }
                     }        
                 }
             }
             
         }else{
            $data['menu'] = $this->Cmsmodel->getMenuParts();
            $data['pageParts'] = $this->Cmsmodel->getPagePartsAdmin();
            $data['tagline'] = $this->Cmsmodel->getTaglineAdmin();

            // GET PROMOTIONAL DETAILS
            $data['promoDetails'] = $this->Cmsmodel->getPromotion();

            $data['testimonialDetails'] = $this->Cmsmodel->getTestimonials();
            
            // PUT THIS IN TO AVOID BROWSER CACHING IN CI
            $this->output->set_header("HTTP/1.0 200 OK");
            $this->output->set_header("HTTP/1.1 200 OK");
            $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
            $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('aboutUpdate', $data);
            $this->load->view('includes/endHTML');
        }
    }
    
     //==============================================================

    // UPDATE AND DELETE TESTIMONIALS

    //==============================================================


     function updateTestimonials()
    {
        $data=array();

        $this->load->model('Cmsmodel');

         if($this->input->post('testimonialSubmit') ){
            $this->Cmsmodel->updateTestimonial();

        }elseif ($this->input->post('testimonialDelete') ){

            $this->Cmsmodel->deleteTestimonial();
        }
           
                redirect (base_url() . 'admin/about');    
            
    }
    
     //==============================================================

    // ADD TESTIMONIALS 

    //==============================================================
    
    function addTestimonial()
    {
        $data=array();


        $this->load->model('Cmsmodel');
        
         if($this->input->post('insertTestimonialSubmit')){
            
            if ( $this->Cmsmodel->insertTestimonial()){
               
                redirect (base_url() . 'admin/about/2');
             
            }
         }else{

            $data['menu'] = $this->Cmsmodel->getMenuParts();

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('aboutAddTestimonial', $data);
            $this->load->view('includes/endHTML');
         }
    }
    
    //***************************************************************************************************
    
    //  CLASSES PAGE
    
    //***************************************************************************************************
    
    //==============================================================

    // UPDATE CLASSES PAGE

    //==============================================================
    
    function classtimes()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
        if($this->input->post('updatePage')){
 
              if ( $this->Cmsmodel->updateMainHeading()){
                if ( $this->Cmsmodel->updateContent()){
                     if ( $this->Cmsmodel->updateTagline()){
                        if ( $this->Cmsmodel->updatePromotion()){
                            
                         redirect (base_url() . 'admin/classtimes');
                     
                         }
                     }        
                 }
             }
             
         }else{
        
            $data['menu'] = $this->Cmsmodel->getMenuParts();
            $data['pageParts'] = $this->Cmsmodel->getPagePartsAdmin();
            $data['tagline'] = $this->Cmsmodel->getTaglineAdmin();
            
            $data['classDetails'] = $this->Cmsmodel->getClassDetails();
            
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

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('classtimesUpdate', $data);
            $this->load->view('includes/endHTML');
        }
    }
    
    
     //==============================================================

    // UPDATE CLASS SCHEDULE

    //==============================================================
    
    function updateClassSchedule()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
         if($this->input->post('newClassSubmit')){
 
            if ( $this->Cmsmodel->updateClassSchedule()){
               
                redirect (base_url() . 'admin/classtimes');
             
            }
         }
    }
    
    //==============================================================

    // ADD NEW CLASSES PAGE

    //==============================================================
    
    function addClass()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
        if($this->input->post('updatePage')){
 
              if ( $this->Cmsmodel->updateMainHeading()){
                if ( $this->Cmsmodel->updateContent()){
                     if ( $this->Cmsmodel->updateTagline()){
                        if ( $this->Cmsmodel->updatePromotion()){
                            
                         redirect (base_url() . 'admin/classtimes');
                     
                         }
                     }        
                 }
             }
             
         }else{
        
            $data['menu'] = $this->Cmsmodel->getMenuParts();
            $data['pageParts'] = $this->Cmsmodel->getPagePartsAdmin();
            $data['tagline'] = $this->Cmsmodel->getTaglineAdmin();
            
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

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('classesAddNew', $data);
            $this->load->view('includes/endHTML');
        }
    }
    
    //==============================================================

    // UPDATE PRICE SCHEDULE

    //==============================================================
    
    function updatePriceSchedule()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
         if($this->input->post('newPriceSubmit')){
 
            if ( $this->Cmsmodel->updatePriceSchedule()){
               
                redirect (base_url() . 'admin/classtimes');
             
            }
         }
    }
    
     //==============================================================

    // UPDATE LIST OF WHAT STUDENTS NEED

    //==============================================================
    
    function updateNeedsItem()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
         if($this->input->post('newNeedsSubmit')){
 
            if ( $this->Cmsmodel->updateNeedsItem()){
               
                redirect (base_url() . 'admin/classtimes');
             
            }
         }
    }
    
    //==============================================================

    // DELETE AN ITEM FROM STUDENT NEEDS LIST

    //==============================================================
    
    function deleteNeedsItem()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
         if($this->input->post('deleteNeedsSubmit')){
 
            if ( $this->Cmsmodel->deleteNeedsItem()){
               
                redirect (base_url() . 'admin/classtimes');
             
            }
         }
    }
    
    //***************************************************************************************************
    
    //  VIDEO PAGE
    
    //***************************************************************************************************
    
    //==============================================================

    // UPDATE VIDEO PAGE

    //==============================================================
    
    function video()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
        if($this->input->post('updatePage')){
 
          if ( $this->Cmsmodel->updateMainHeading()){
                 if ( $this->Cmsmodel->updateTagline()){
                        
                     redirect (base_url() . 'admin/video');
                 
                     }
                 }        
         
         }else{
        
            $data['menu'] = $this->Cmsmodel->getMenuParts();
            $data['pageParts'] = $this->Cmsmodel->getPagePartsAdmin();
            $data['tagline'] = $this->Cmsmodel->getTaglineAdmin();
            
            // PUT THIS IN TO AVOID BROWSER CACHING IN CI
            $this->output->set_header("HTTP/1.0 200 OK");
            $this->output->set_header("HTTP/1.1 200 OK");
            $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
            $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('galleryUpdate', $data);
            $this->load->view('includes/endHTML');
        }
    }
    
    //***************************************************************************************************
    
    //  CONTACT ME PAGE
    
    //***************************************************************************************************
    
    //==============================================================

    // UPDATE CONTACT ME PAGE

    //==============================================================
    
    function contact()
    {
        $data=array();

        $this->load->model('Cmsmodel');
        
        if($this->input->post('updatePage')){
 
          if ( $this->Cmsmodel->updateMainHeading()){
                 if ( $this->Cmsmodel->updateTagline()){
                    if ( $this->Cmsmodel->updatePromotion()){
                     redirect (base_url() . 'admin/contact');
                 
                     }
                 }        
            }
         }else{
        
            $data['menu'] = $this->Cmsmodel->getMenuParts();
            $data['pageParts'] = $this->Cmsmodel->getPagePartsAdmin();
            $data['tagline'] = $this->Cmsmodel->getTaglineAdmin();

            // GET PROMOTIONAL DETAILS
            $data['promoDetails'] = $this->Cmsmodel->getPromotion();
            
            // PUT THIS IN TO AVOID BROWSER CACHING IN CI
            $this->output->set_header("HTTP/1.0 200 OK");
            $this->output->set_header("HTTP/1.1 200 OK");
            $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
            $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
            $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
            $this->output->set_header("Pragma: no-cache");

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('contactUpdate', $data);
            $this->load->view('includes/endHTML');
        }
    }
	
}
// end class