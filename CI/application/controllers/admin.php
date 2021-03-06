<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *creates all the public views, depending on the first URI segment being recognised
 */
class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(FALSE);
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

	//***************************************************************************************************
	
	//  LOGIN
	
	//***************************************************************************************************   

            // public function login()
            // {
            //     $this->load->model('Cmsmodel');
                
            //     $this->load->view('loginView');
                
            // }

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->load->model('Cmsmodel');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
    
		if($this->form_validation->run()){
	
			$data=array(
			    'username'=> $this->input->post('username'),
			    'is_logged_in' => 1
			    );
			
			$this->session->set_userdata($data);
			redirect (base_url() . 'admin/home');
		
		}else{
		    
			$this->load->view('loginView');
		    
		}

                //echo $this->input->post('username');
        }

	public function validate_credentials()
	{
		$this->load->model('Cmsmodel');
    
		if( $this->Cmsmodel->canLogin()){
		    
			return true;
	    
		}else{
		    
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
			return false;
    
		}
	}
  
 
	//***************************************************************************************************
	
	//  LOGOUT
	
	//*************************************************************************************************** 
     
	public function logout()
	{
	    $this->session->sess_destroy();
	    redirect('home');
	}

	//***************************************************************************************************
       
	//  HOME PAGE
       
	//***************************************************************************************************   
	       
	//==============================================================
   
	// UPDATE HOME PAGE
	//exit(__FILE__.__LINE__);
   
	//==============================================================

	function home()
	{
		if($this->session->userdata('is_logged_in')){
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
    
		}else{
    
			redirect('admin/restricted');
    
		     }
		
	}

	public function restricted()
	{
	    $this->load->view('restricted');
	}
    
	//***************************************************************************************************
       
	//  ABOUT ME PAGE
       
	//***************************************************************************************************
	//==============================================================
   
	// UPDATE ABOUT ME PAGE
   
	//==============================================================
    
	function about()
	{
		if($this->session->userdata('is_logged_in')){
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
        
		}else{

                    redirect('admin/restricted');

                }
	}
    
	//==============================================================

	// UPDATE TESTIMONIALS AND DELETE TESTIMONIALS

	//==============================================================


	function updateTestimonials()
	{
		if($this->session->userdata('is_logged_in')){
			$data=array();
	
			$this->load->model('Cmsmodel');
	
			if($this->input->post('testimonialSubmit') ){
				$this->Cmsmodel->updateTestimonial();
	
			}elseif ($this->input->post('testimonialDelete') ){
	
				$this->Cmsmodel->deleteTestimonial();
			}
		   
				redirect (base_url() . 'admin/about');   
		
		}else{
    
		    redirect('admin/restricted');
    
		} 
		
	}
    
     //==============================================================

    // ADD  A NEW TESTIMONIAL

    //==============================================================
    
	function addTestimonial()
	{
		if($this->session->userdata('is_logged_in')){
		    
		    $data=array();
	    
		    $this->load->model('Cmsmodel');
		    
		    if($this->input->post('insertTestimonialSubmit')){
			
			    if($this->Cmsmodel->insertTestimonial()){
			       
				redirect (base_url() . 'admin/about/2');
			 
			    }
		    }else{
	    
			$data['menu'] = $this->Cmsmodel->getMenuParts();
	    
			$this->load->view('includes/adminStartHTML', $data);
			$this->load->view('aboutAddTestimonial', $data);
			$this->load->view('includes/endHTML');
		    }
		}else{
	   
			       redirect('admin/restricted');
       
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
	    if($this->session->userdata('is_logged_in')){
		    $data=array();
	    
		    $this->load->model('Cmsmodel');
		    
		    if($this->input->post('updatePage')){
	     
			  //if ( $this->Cmsmodel->updateMainHeading()){
			    if ( $this->Cmsmodel->updateContent()){
				 if ( $this->Cmsmodel->updateTagline()){
				    if ( $this->Cmsmodel->updatePromotion()){
					
				     redirect (base_url() . 'admin/classtimes');
				 
				     //}
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
	    
	    }else{
    
			redirect('admin/restricted');
    
		    }
	}
	
    
	//==============================================================

	// UPDATE CLASS SCHEDULE AND DELETE A CLASS

	//==============================================================

	function updateClassSchedule()
	{
		if($this->session->userdata('is_logged_in')){
		    
		    $data=array();
	    
		    $this->load->model('Cmsmodel');
	    
		    if($this->input->post('newClassSubmit') ){
			    $this->Cmsmodel->updateClassSchedule();
	
		    }elseif ($this->input->post('deleteClassSubmit') ){
	    
			$this->Cmsmodel->deleteClass();
		    }
	       
			redirect (base_url() . 'admin/classtimes');    
		}else{
    
			redirect('admin/restricted');
    
		     }
		
	}
    
    //==============================================================

    // ADD NEW CLASS

    //==============================================================
    
    function insertClass()
    {
        if($this->session->userdata('is_logged_in')){
        
		$data=array();
        
		$this->load->model('Cmsmodel');
        
		if($this->input->post('insertClassSubmit')){
		   
			if ( $this->Cmsmodel->insertClass()){
			   
			    redirect (base_url() . 'admin/classtimes');
			 
			}
		}else{

			$data['menu'] = $this->Cmsmodel->getMenuParts();
	    
			$this->load->view('includes/adminStartHTML', $data);
			$this->load->view('classesAddNew', $data);
			$this->load->view('includes/endHTML');
		     }
         
        }else{

                redirect('admin/restricted');

		}
    }
    
    
    //==============================================================

    // UPDATE PRICE SCHEDULE

    //==============================================================
    
    function updatePriceSchedule()
    {
        if($this->session->userdata('is_logged_in')){
            
        $data=array();

        $this->load->model('Cmsmodel');
        
         if($this->input->post('newPriceSubmit')){
 
            if ( $this->Cmsmodel->updatePriceSchedule()){
               
                redirect (base_url() . 'admin/classtimes');
             
            }
         }
         }else{

                    redirect('admin/restricted');

                 }
    }
    
     //==============================================================

    // UPDATE LIST OF WHAT STUDENTS NEED AND DELETE AN ITEM

    //============================================================== 

    function updateNeedsItem()
    {
        
        if($this->session->userdata('is_logged_in')){
            $data=array();

        $this->load->model('Cmsmodel');

         if($this->input->post('newNeedsSubmit') ){
            $this->Cmsmodel->updateNeedsItem();

        }elseif ($this->input->post('deleteNeedsSubmit') ){

            $this->Cmsmodel->deleteNeedsItem();
        }
           
                redirect (base_url() . 'admin/classtimes');
                
                }else{

                    redirect('admin/restricted');

                 }    
            
    }

      //==============================================================

    // ADD  A NEW ITEM INTO THE LIST OF WHAT STUDENTS NEED FOR A CLASS

    //==============================================================
    
    function insertNeeds()
    {
        if($this->session->userdata('is_logged_in')){
        $data=array();


        $this->load->model('Cmsmodel');
        
         if($this->input->post('insertNeedsSubmit')){
            
            if ( $this->Cmsmodel->insertNeeds()){
               
                redirect (base_url() . 'admin/classtimes/3');
             
            }
         }else{

            $data['menu'] = $this->Cmsmodel->getMenuParts();

            $this->load->view('includes/adminStartHTML', $data);
            $this->load->view('classesAddNewItem', $data);
            $this->load->view('includes/endHTML');
         }
         }else{

                    redirect('admin/restricted');

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
        if($this->session->userdata('is_logged_in')){
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
        
        }else{

                    redirect('admin/restricted');

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
        if($this->session->userdata('is_logged_in')){
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
    
    }else{

            redirect('admin/restricted');

            }
    }
	
}
// end class