   
    <section id="mainContainer" class="cf"><!--main container begins-->  
    
      <h1 class="aboutHeading"><!-- ABOUT ME -->
            <?php  
                  $oMainHeading = $mainHeading->row();
                  echo nl2br($oMainHeading->H1);
            ?>
      </h1>
    
      <section id="about"> <!--about me content begins-->    
        
        <article class="info"><!--content paragraphs begin-->
            <p>
            <?php 
                  $oContent = $content->row();
                  echo nl2br($oContent->contentDetails);
            ?>
            </p>
        </article><!--content paragraphs end-->
        
      </section> <!--about me content ends--> 
        
         
      <section id="rightContent" class="cf"> <!--right hand side content begins-->
        
        <section id="selfContainer">
          <article class="selfPhoto">
            <!--<img src="assets/images/zumbaLogo.jpg"/>-->
          </article>
        </section>

      </section> <!--right hand side content ends-->

       <section id="testimonials"><!--testimonials begin-->
        <h3>
        <?php 
              $oSubHeading = $subHeading->row();
              echo nl2br($oSubHeading->H3);
        ?>
        </h3>

        <ul>

          <?php
          $aTestimonialDetails= $testimonialDetails->result_array();
          $aName= $name->result_array();
          
          // echo "<pre>";
          // print_r($aTestimonialDetails);
          // echo "</pre>";
          ?>
          
          <li><!-- I'm a busy mother of 4 children and originally from the USA. I would love to inspire many other women and mothers to give Zumba Fitness a go! --><?php echo $aTestimonialDetails[0]['testimonialDetails']; ?><span class="reference"> <!-- Christina 1 --><?php echo $aName[0]['name']; ?></span></li>
          <li><?php echo $aTestimonialDetails[1]['testimonialDetails']; ?><span class="reference"> <?php echo $aName[1]['name']; ?></span></li>
          <li><?php echo $aTestimonialDetails[2]['testimonialDetails']; ?><span class="reference"> <?php echo $aName[2]['name']; ?></span></li>
          <li><?php echo $aTestimonialDetails[3]['testimonialDetails']; ?><span class="reference"> <?php echo $aName[3]['name']; ?></span></li>
        </ul>
      </section><!--testimonials ends-->
      
      <section><!--tagline begins-->
        <h2 id="aboutTag">
              <?php 
                    $oTagline = $tagline->row();
                    echo nl2br($oTagline->tagline);
              ?>
        </h2>
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    <section id="promo" class="promoAbout"><!--promotional tag begins-->
           <p><!--Mention this website and receive <span class="prmsgAbout">50%</span> off all classes in your first week OR bring a friend for <span class="prmsgAbout">FREE!</span>--> <?php 
              $oPromoDetails = $promoDetails->row();
              echo nl2br($oPromoDetails->promoDetails);
        ?></p>
    </section><!--promotional tag ends-->
    
  </div> <!--wrapper ends-->
    
    
    