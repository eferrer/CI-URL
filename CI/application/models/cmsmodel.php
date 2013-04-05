<?php

class Cmsmodel extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }
    

    //==============================================================

    // GET MAIN HEADINGS (H1), SUBHEADINGS (H3) AND CONTENT

    //==============================================================

    function getPageParts() 
    {
        $sql = "SELECT H1, contentDetails, H3
                    FROM tbContent
                    WHERE pageID =
                    (SELECT pageID FROM tbPages
                    WHERE fileName = '".$this->uri->segment(1)." ' )";
                
        return $this->db->query($sql);
    }

    function getPagePartsAdmin() 
    {
        $sql = "SELECT H1, contentDetails, H3
                    FROM tbContent
                    WHERE pageID =
                    (SELECT pageID FROM tbPages
                    WHERE fileName = '".$this->uri->segment(2)." ' )";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // GET TAGLINES

    //==============================================================
    
    function getTagline()
    {
        $sql = "SELECT tagline
                    FROM tbPages
                    WHERE pageID =
                    (SELECT pageID FROM tbPages
                    WHERE fileName = '".$this->uri->segment(1)." ' )";
                
        return $this->db->query($sql);
    }

      function getTaglineAdmin()
    {
        $sql = "SELECT tagline
                    FROM tbPages
                    WHERE pageID =
                    (SELECT pageID FROM tbPages
                    WHERE fileName = '".$this->uri->segment(2)." ' )";
        
        return $this->db->query($sql);
    }

     //==============================================================

    // GET MENU BUTTONS

    //==============================================================

    public function getMenuParts()
    {
        $sql = "SELECT fileName, pageName, pageID
                FROM tbPages";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // GET PROMOTIONAL LINES

    //==============================================================

    public function getPromotion()
    {
        $sql = "SELECT promoDetails
                FROM tbPromo";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // GET LIST OF TESTIMONIALS FOR ABOUT PAGE

    //==============================================================

    public function getTestimonials()
    {
        $sql = "SELECT testID, testimonialDetails, name
                FROM tbTestimonials";
                
        return $this->db->query($sql);
    }

   //==============================================================

    // GET NEEDS LIST

    //==============================================================

    public function getNeedsList()
    {
        $sql = "SELECT needsDetails
                FROM tbNeeds";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // GET LIST OF CLASSTIMES

    //==============================================================

    public function getClassDetails()
    {
        $sql = "SELECT day, time, place, address
                FROM tbClasses";

        return $this->db->query($sql);
    }
    
    //==============================================================

    // UPDATE MAIN HEADING

    //==============================================================
    
    public function updateMainHeading()
    {
        $mainHeading = $this->db->escape($this->input->post('mainHeading'));
    
        $sql = "UPDATE tbContent
                SET H1 = $mainHeading
                WHERE pageID = 
                (SELECT pageID FROM tbPages
                WHERE fileName = '".$this->uri->segment(2)." ' )";
        //exit(__FILE__.__LINE__.$sql);
        $this->db->query($sql);
        
        return true;
    }

    //==============================================================

    // UPDATE CONTENT

    //==============================================================
    
    public function updateContent()
    {
        $content = $this->db->escape($this->input->post('content'));
    
        $sql = "UPDATE tbContent
                SET contentDetails = $content
                WHERE pageID = 
                (SELECT pageID FROM tbPages
                WHERE fileName = '".$this->uri->segment(2)." ' )";
        //exit(__FILE__.__LINE__.$sql);
        $this->db->query($sql);
        
        return true;
    }

    //==============================================================

    // UPDATE TAGLINE

    //==============================================================
    
    public function updateTagline()
    {
        $tagline = $this->db->escape($this->input->post('tagline'));

        $sql= "UPDATE tbPages 
        SET tagline = ".$tagline." WHERE fileName = '".$this->uri->segment(2) ." ' ";
                 
        $this->db->query($sql);
        
        return true;
    }

    //==============================================================

    // UPDATE PROMOTIONAL LINE

    //==============================================================

    public function updatePromotion()
    {
        $promo = $this->db->escape($this->input->post('promo'));

        $sql = "UPDATE tbPromo
                    SET promoDetails = $promo"; 
                
        return $this->db->query($sql);
    }

    //==============================================================

    // UPDATE TESTIMONIAL DETAILS

    //==============================================================

    public function updateTestimonial()
    {
        $testimonial = $this->db->escape($this->input->post('testimonial'));

        $sql = "UPDATE tbTestimonials
                    SET testimonialDetails = $testimonial"; 
         //exit(__FILE__.__LINE__);       
        return $this->db->query($sql);
    }
    
  
    
















     //model
    // get Content
    // returns all the content blocks for a page identified by the fileName in the uri - 1, 2 0r 3?
    // function getContent()
    // {
    //     $sql = "SELECT contentDetails
    //                 FROM tbContent
    //                 WHERE pageID =
    //                 (SELECT pageID FROM tbPages
    //                 WHERE fileName = ' ".$this->uri->segment(1)." ' )";

    //     return $this->db->query($sql);
    // }
    
    // public function getSubHeading()
    // {
    //     $sql = "SELECT H3
    //                 FROM tbContent
    //                 WHERE pageID=
    //                 (SELECT pageID FROM tbPages
    //                 WHERE fileName = ' ".$this->uri->segment(1)." ' )";
                
    //     return $this->db->query($sql);
    // }
    
    // public function getClassDay()
    // {
    //     $sql = "SELECT day
    //             FROM tbClasses";

    //     return $this->db->query($sql);
    // }

    // public function getClassTime()
    // {
    //     $sql = "SELECT time
    //             FROM tbClasses";

    //     return $this->db->query($sql);
    // }

    // public function getClassPlace()
    // {
    //     $sql = "SELECT place
    //             FROM tbClasses";

    //     return $this->db->query($sql);
    // }

    // public function getClassAddress()
    // {
    //     $sql = "SELECT address
    //             FROM tbClasses";

    //     return $this->db->query($sql);
    // }

    //==============================================================
    // Test 1. Test that the about controller is calling Cmsmodel correctly
    // WORKS!!
    
    //  public function getContentByPageID()
    // {
    //     return "This is something written in the cmsmodel";
    // }
    
    //==============================================================

    // A. GET CONTENT BY PAGE ID

    //==============================================================

    // public function getContentByPageID()
    // {
    //     $pageID = $this->uri->segment(3);
        
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=$pageID";
                
    //     return $this->db->query($sql);
    // }


    // A. 1. with the page ID hardcoded
    
     // A. 1. a. home page content

    // public function getContentByPageIDh()
    // {
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=1";
                
    //     return $this->db->query($sql);
    // }
    

    // A. 1. b. about page: about me content

    // public function getContentByPageIDa()
    // {
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=2";
                
    //     return $this->db->query($sql);
    // }
    
     // A. 1. c. Classes page all content

    // public function getContentByPageIDc()
    // {
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=3";
                
    //     return $this->db->query($sql);
    // }
    
    //$pageID = $this->uri->segment(3, 0);
   
     //==============================================================

    // B. GET H1 BY PAGE ID

    //==============================================================

     // 1. with the page ID hardcoded
    
     // B. 1. a. home page main heading

    // public function getMainHeadingByPageIDh()
    // {
    //     $sql = "SELECT H1
    //             FROM tbContent
    //             WHERE pageID=1";
                
    //     return $this->db->query($sql);
    // }
    
    //  // B. 1. b. about page main heading

    // public function getMainHeadingByPageIDa()
    // {
    //     $sql = "SELECT H1
    //             FROM tbContent
    //             WHERE pageID=2";
                
    //     return $this->db->query($sql);
    // }

    // // B. 1. c. classes page main heading

    // public function getMainHeadingByPageIDc()
    // {
    //     $sql = "SELECT H1
    //             FROM tbContent
    //             WHERE pageID=3";
                
    //     return $this->db->query($sql);
    // }
    
    // B. 1. d. contact me page main heading

    // public function getMainHeadingByPageIDcm()
    // {
    //     $sql = "SELECT H1
    //             FROM tbContent
    //             WHERE pageID=5";
                
    //     return $this->db->query($sql);
    // }

    //==============================================================

    // C. GET H3 BY PAGE ID

    //==============================================================

    // 1. with the page ID hardcoded

    // A. 1. a. about page testimonials sub heading

    // public function getSubHeadingByPageIDa()
    // {
    //     $sql = "SELECT H3
    //             FROM tbContent
    //             WHERE pageID=2";
                
    //     return $this->db->query($sql);
    // }
    // // C. 1. b. classes page sub headings

    // public function getSubHeadingByPageIDc()
    // {
    //     $sql = "SELECT H3
    //             FROM tbContent
    //             WHERE pageID=3";
                
    //     return $this->db->query($sql);
    // }

    //==============================================================

    // D. GET TAGLINES BY PAGE ID

    //==============================================================

     // 1. with the page ID hardcoded

    // A. 1. a. home page tagline

    // public function getTaglineh()
    // {
    //     $sql = "SELECT tagline
    //             FROM tbPages
    //             WHERE pageID=1";
                
    //     return $this->db->query($sql);
    // }

    // // A. 1. b. about page tagline

    // public function getTaglinea()
    // {
    //     $sql = "SELECT tagline
    //             FROM tbPages
    //             WHERE pageID=2";
                
    //     return $this->db->query($sql);
    // }

    // A. 1. c. classes page tagline

    // public function getTaglinec()
    // {
    //     $sql = "SELECT tagline
    //             FROM tbPages
    //             WHERE pageID=3";
                
    //     return $this->db->query($sql);
    // }

    // // A. 1. d. gallery page tagline

    // public function getTaglineg()
    // {
    //     $sql = "SELECT tagline
    //             FROM tbPages
    //             WHERE pageID=4";
                
    //     return $this->db->query($sql);
    // }

    // // A. 1. e. contact me page tagline

    // public function getTaglinecm()
    // {
    //     $sql = "SELECT tagline
    //             FROM tbPages
    //             WHERE pageID=5";
                
    //     return $this->db->query($sql);
    // }

    //==============================================================
    

    // public function getContentByPageID()
    // {
    //     $pageID = 1;
    //     if($this->uri->segment(3)){
    //         $pageID = this->uri->segment(3);
    //     }
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=$pageID";
                
    //     return $this->db->query($sql);
    //            // return  'steve woz here';
    // }

    // public function getContentByPageID()
    // {
    //     $pageID = 1;
    //     if($this->uri->segment(3)){
    //         $pageID = this->uri->segment(3);
    //     }
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=$pageID";
                
    //     return $this->db->query($sql);
               // return  'steve woz here';
    //}  
    
    // public function getContentByPageID()
    // {
    //     // $id = ($this->uri->segment(3))?$this->uri->segment(3):1;
    //     // $arr = array('pageID'=>$this->uri->segment(3));
        
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID='2'";
                
    //     return $this->db->query($sql);
    // }
    
    
} // end of class About