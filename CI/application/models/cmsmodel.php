<?php

class Cmsmodel extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }
    
     //***************************************************************************************************
    
    //  GET MODELS
    
    //****************************************************************************************************
    
    //==============================================================

    // GET MAIN HEADINGS (H1), SUBHEADINGS (H3) AND CONTENT

    //==============================================================

    function getPageParts() 
    {
        $sql = "SELECT H1, contentDetails, H3, contentID, description
                    FROM tbContent
                    WHERE pageID =
                    (SELECT pageID FROM tbPages
                    WHERE fileName = '".$this->uri->segment(1)." ' )";
                
        return $this->db->query($sql);
    }

    function getPagePartsAdmin() 
    {
        $sql = "SELECT H1, contentDetails, H3, contentID
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
        $sql = "SELECT fileName, pageName, title, description, pageID
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

    // GET PRICE DETAILS

    //==============================================================

    public function getPriceDetails()
    {
        $sql = "SELECT priceType, priceDetails, priceID
                FROM tbPrices";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // GET LIST OF CLASSTIMES

    //==============================================================

    public function getClassDetails()
    {
        $sql = "SELECT day, time, place, address, classID
                FROM tbClasses";

        return $this->db->query($sql);
    }
    
    //==============================================================

    // GET NEEDS LIST

    //==============================================================

    public function getNeedsList()
    {
        $sql = "SELECT needsDetails, needsID
                FROM tbNeeds";
                
        return $this->db->query($sql);
    }
    
    //***************************************************************************************************
    
    //  UPDATE MODELS
    
    //***************************************************************************************************
    
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
        $testimonials = $this->db->escape($this->input->post('testimonial'));
        $name = $this->db->escape($this->input->post('testimonialRef'));

        $sql = "UPDATE tbTestimonials
                    SET testimonialDetails = $testimonials,
                    name = $name 
                    WHERE testID={$this->input->post('testID')}"; 
             
        return $this->db->query($sql);
    }
     
     //==============================================================

    // UPDATE CLASSTIMES

    //==============================================================

    public function updateClassSchedule()
    {
        $day = $this->db->escape($this->input->post('day'));
        $time = $this->db->escape($this->input->post('time'));
        $place = $this->db->escape($this->input->post('place'));
        $address = $this->db->escape($this->input->post('address'));
        
        $sql = "UPDATE tbClasses
                SET day = $day, 
                time = $time, 
                place = $place, 
                address = $address
                WHERE classID={$this->input->post('classID')}"; 

        return $this->db->query($sql);
    }
    
    //==============================================================

    // UPDATE PRICE SCHEDULE

    //==============================================================

    public function updatePriceSchedule()
    {
        $priceType = $this->db->escape($this->input->post('priceType'));
        $priceDescription = $this->db->escape($this->input->post('priceContent'));
        
        $sql = "UPDATE tbPrices
                SET priceType = $priceType,
                priceDetails = $priceDescription
                WHERE priceID={$this->input->post('priceID')}"; 

        return $this->db->query($sql);
    }
    
    //==============================================================

    // UPDATE LIST OF WHAT STUDENTS NEED

    //==============================================================

    public function updateNeedsItem()
    {
        $needsDetails = $this->db->escape($this->input->post('needs'));
        
        $sql = "UPDATE tbNeeds
                SET needsDetails = $needsDetails
                WHERE needsID={$this->input->post('needsID')}"; 

        return $this->db->query($sql);
    }
    
    //***************************************************************************************************
    
    //  DELETE MODELS **************!!!!!!!!!!!!!!!!!!!??????????????????????
    
    //***************************************************************************************************
  
    //==============================================================

    // DELETE TESTIMONIAL DETAILS

    //==============================================================

    public function deleteTestimonial()
    {
        
        //$id= $this->db->escape($this->input->post('testimonial'));

        $sql = "DELETE FROM tbTestimonials
                    WHERE testID={$this->input->post('testID')}";
           //exit(__FILE__.__LINE__.$sql);              
        return $this->db->query($sql);
        
    }
    
    //==============================================================

    // DELETE A CLASS

    //==============================================================

    public function deleteClass()
    {
        
        //$id= $this->db->escape($this->input->post('testimonial'));

        $sql = "DELETE FROM tbClasses
                    WHERE classID={$this->input->post('classID')}";
                         
        return $this->db->query($sql);
    }
    
    //==============================================================

    // DELETE AN ITEM FROM STUDENT NEEDS LIST

    //==============================================================

    public function deleteNeedsItem()
    {
        
        //$id= $this->db->escape($this->input->post('needs'));

        $sql = "DELETE FROM tbNeeds
                    WHERE needsID={$this->input->post('needsID')}";
                         
        return $this->db->query($sql);
    }
    
    //***************************************************************************************************
    
    //  INSERT MODELS
    
    //***************************************************************************************************
  
    //==============================================================

    // INSERT TESTIMONIAL DETAILS

    //==============================================================

    public function insertTestimonial()
    {
        // print_r($_POST);exit(__FILE__.__LINE__);
        $sql = "INSERT INTO tbTestimonials(testimonialDetails, name)
                    VALUES ( ".$this->db->escape($this->input->post('newTestimonialDetails')). "  ,
                        " .$this->db->escape($this->input->post('newTestimonialRef')).")";
                    // exit(__FILE__.__LINE__.$sql);      

        return $this->db->query($sql);
        
    }
    
    //==============================================================

    // INSERT A NEW CLASS

    //==============================================================

    public function insertClass()
    {
        //print_r($_POST);exit(__FILE__.__LINE__);
        $sql = "INSERT INTO tbClasses(day, time, place, address)
                    VALUES ( ".$this->db->escape($this->input->post('newDay')). "  ,
                        ".$this->db->escape($this->input->post('newTime')). "  ,
                        ".$this->db->escape($this->input->post('newPlace')). "  ,
                        " .$this->db->escape($this->input->post('newAddress')).")";
                //exit(__FILE__.__LINE__.$sql);      

        return $this->db->query($sql);
        
    }


    //==============================================================

    // INSERT A NEW ITEM INTO WHAT STUDENTS NEED

    //==============================================================

    public function insertNeeds()
    {
        // print_r($_POST);exit(__FILE__.__LINE__);
        $sql = "INSERT INTO tbNeeds(needsDetails)
                    VALUES (  " .$this->db->escape($this->input->post('newNeedItem')).")";
                    // exit(__FILE__.__LINE__.$sql);      

        return $this->db->query($sql);
        
    }

    //==============================================================

    // SAVE CONTACT INTO DATABASE

    //==============================================================

    public function saveContact()
    {
        // print_r($_POST);exit(__FILE__.__LINE__);
        $sql = "INSERT INTO tbContact(firstName, lastName, email)
                    VALUES ( ".$this->db->escape($this->input->post('firstName')). "  ,
                        ".$this->db->escape($this->input->post('lastName')). "  ,
                        " .$this->db->escape($this->input->post('email')).")";
                    // exit(__FILE__.__LINE__.$sql);      

        return $this->db->query($sql);
        
    }


    //==============================================================

    // LOGIN MODEL

    //==============================================================

    public function canLogin()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));

        $sql = $this->db->get('tbAdmin');

        if($sql->num_rows()==1){
            
            return true;
        
        }else{
            
            return false;
        }
       
    }

} // end of class About