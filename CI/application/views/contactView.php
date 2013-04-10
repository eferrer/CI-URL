      <section class="mainContainer" class="cf"><!--main container begins--> 
    <h1 class="contactHeading"><!-- CONTACT ME -->
            <?php  
                  //$oMainHeading = $mainHeading->row();
                  $aPageParts = $pageParts->result_array();
                  
                  echo $aPageParts[0]['H1'];
            ?>
          </h1>
        
      <section id="contact"> <!--content begins-->    
        
        <?php
        
        $attributes = array('class'=>'contactForm', 'id'=>'contactForm');
        echo form_open('saveContact', $attributes);
        
        //echo validation_errors();
        ?>
        <!-- <form id="contactForm" action="" method="post"> -->
      
            <fieldset class="contactDetails"> <!--personal details begins-->
              <h3><!-- Your details -->
              <?php
                  // $aSubHeading = $subHeading->result_array();
                  // echo $aSubHeading[5]['H3'];
                  
                  echo nl2br($aPageParts[1]['H3']);
              ?>
            </h3>
              
                <p class="firstName">
                  <label for="firstname">Name <sup>*</sup></label> 
                  <input type="text" id="firstName" name="firstName" placeholder="First name" required/>
                </p>
                
                <p class="lastName">
                  <label for="lastName">Name <sup>*</sup></label> 
                  <input type="text" id="lastName" name="lastName" placeholder="Last name" required/>
                </p>

                <p class="email">
                  <label for="email">Email <sup>*</sup></label> 
                  <input type="email" id="email" name="email" placeholder="e.g. your@email.co.nz" required/>
                </p>
               
              <h3><!-- Make an Enquiry -->
              <?php
                  // $aSubHeading = $subHeading->result_array();
                  // echo $aSubHeading[5]['H3'];
                  echo nl2br($aPageParts[2]['H3']);
              ?>
            </h3>     
              <textarea rows="3" cols="20" name="enquiry" id="enquiry"></textarea>
            </fieldset> <!--enquiry ends-->
    
            <p class="required"><sup>*</sup>&nbsp;Required field</p> 
            <p class="submit"><input type="submit" id="sendEmail" name="sendEmail" value="Submit" /></p>
            
          </form>
          
        </section><!--content ends-->
      
        <section><!--tagline begins-->
          <h2 id="contactTag">
              <?php 
                    $oTagline = $tagline->row();
                    echo nl2br($oTagline->tagline);
              ?>
          </h2>
        </section><!--tagline ends-->
        
    </section><!--main container ends-->
    
    <section id="promo" class="promoContact"><!--promotional tag begins-->
           <p><!--Mention this website and receive <span class="prmsgAbout">50%</span> off all classes in your first week OR bring a friend for <span class="prmsgAbout">FREE!</span>--> <?php 
              $oPromoDetails = $promoDetails->row();
              echo nl2br($oPromoDetails->promoDetails);
        ?></p>
    </section><!--promotional tag ends-->
    
  </div> <!--wrapper ends-->
    
    
    