      <section id="mainContainer" class="cf"><!--main container begins--> 
    <h1 class="contactHeading"><!-- CONTACT ME -->
            <?php  
                  //$oMainHeading = $mainHeading->row();
                  $aMainHeading = $mainHeading->result_array();
                  
                  // echo "<pre>";
                  // print_r($aMainHeading);
                  // echo "</pre>";
                  
                  echo $aMainHeading[0]['H1'];
            ?>
          </h1>
        
      <section id="contact"> <!--content begins-->    
        
        <?php
        echo validation_errors();
        echo form_open('contact');
        
        ?>
        <!-- <form id="form" action="" method="post"> -->
      
            <fieldset class="contactDetails"> <!--personal details begins-->
              <h3><!-- Your details -->
              <?php
                  // $aSubHeading = $subHeading->result_array();
                  // echo $aSubHeading[5]['H3'];
                  
                  echo nl2br($aMainHeading[1]['H3']);
              ?>
            </h3>
              
                <p class="firstName">
                  <label for="firstname">First Name <sup>*</sup></label> 
                  <input type="text" id="firstname" name="firstname" placeholder="First name" required/>
                  <?php echo form_error('firstname'); ?>
                </p>
                
                <p class="lastName">
                  <label for="lastname">Last Name <sup>*</sup></label> 
                  <input type="text" id="lastname" name="lastname" placeholder="Last Name" required/>
                  <?php echo form_error('lastname'); ?>
                </p>

                <p class="email">
                  <label for="email">Email <sup>*</sup></label> 
                  <input type="email" id="email" name="email" placeholder="e.g. your@email.co.nz" required/>
                  <?php echo form_error('email'); ?>
                </p>
               
              <h3><!-- Make an Enquiry -->
              <?php
                  // $aSubHeading = $subHeading->result_array();
                  // echo $aSubHeading[5]['H3'];
                  echo nl2br($aMainHeading[2]['H3']);
              ?>
            </h3>     
              <textarea rows="3" cols="20"></textarea>
            </fieldset> <!--enquiry ends-->
    
            <p class="required"><sup>*</sup>&nbsp;Required field</p> 
            <p class="submit"><input type="submit" value="Submit" /></p>
            
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
    
    
    