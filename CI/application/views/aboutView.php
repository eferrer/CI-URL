  <section class="mainContainer"><!--main container begins-->    
    <h1 class="aboutHeading"><!-- ABOUT ME -->
      <?php  
        $aPageParts = $pageParts->row_array();
        echo nl2br($aPageParts['H1']);
      ?>
    </h1>
      
    <section id="about"> <!--about me content begins-->    
      <article class="info"><!--content paragraphs begin-->
        <p>
          <?php 
            echo nl2br($aPageParts['contentDetails']);
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
        echo nl2br($aPageParts['H3']);
      ?>
      </h3>
  
      <ul>
      <?php
        $aTestimonialDetails= $testimonialDetails->result_array();
        
        foreach($aTestimonialDetails as $key=>$aTestimonials){
          echo '<li> '.  $aTestimonials['testimonialDetails']  . '<span class="reference"> ' .  $aTestimonials['name'] . '</span></li>';
        }
        // echo "<pre>";
        // print_r($aTestimonialDetails);
        // echo "</pre>";
      ?>
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
    <p><!--Mention this website and receive <span class="prmsgAbout">50%</span> off all classes in your first week OR bring a friend for <span class="prmsgAbout">FREE!</span>--> 
      <?php 
        $oPromoDetails = $promoDetails->row();
        echo nl2br($oPromoDetails->promoDetails);
      ?>
    </p>
  </section><!--promotional tag ends-->
    
</div> <!--wrapper ends-->
    