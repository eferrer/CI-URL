      <section id="mainContainer" class="cf"><!--main container begins--> 
    <h1 class="contactHeading"><!-- CONTACT ME -->
            <?php  
                  $oMainHeading = $mainHeading->row();
                  echo nl2br($oMainHeading->H1);
            ?>
          </h1>
        
      <section id="contact"> <!--content begins-->    
        
        
        <form id="form" action="" method="post">
      
            <fieldset class="contactDetails"> <!--personal details begins-->
              <h3>Your details</h3>
              
                <p class="firstName">
                  <label for="firstname">First Name <sup>*</sup></label> 
                  <input type="text" id="firstname" name="firstname" placeholder="First name" required/>
                </p>
                
                <p class="lastName">
                  <label for="lastname">Last Name <sup>*</sup></label> 
                  <input type="text" id="lastname" name="lastname" placeholder="Last Name" required/>
                </p>

                <p class="email">
                  <label for="email">Email <sup>*</sup></label> 
                  <input type="email" id="email" name="email" placeholder="e.g. your@email.co.nz" required/>
                </p>
               
              <h3>Make an Enquiry</h3>     
              <textarea rows="3" cols="20"></textarea>
            </fieldset> <!--enquiry ends-->
    
            <p class="required"><sup>*</sup>&nbsp;Required field</p> 
            <p class="submit"><input type="submit" value="SUBMIT" /></p>
            
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
    
    
    