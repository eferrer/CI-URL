  <?php  
        $aPageParts = $pageParts->row_array();
        
        $mainHeading=$aPageParts['H1'];
        $contentDetails=$aPageParts['contentDetails'];

        echo form_open('cmsmodel/aboutUpdate');
  ?>
    <section id="mainContainer" class="cf"><!--main container begins-->  
      
      <!-- <form> -->
        <h1>ADMIN AREA: ABOUT ME </h1>
        <label for="mainHeading" class="adminLabel">Main Heading</label>
        <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
      <!-- <h1 class="aboutHeading">ABOUT ME</h1> -->
    
      <section id="aboutAdmin"> <!--content begins-->    
        
        <label for="content" class="adminLabel">Content</label>
        <article class="info"><!--content paragraphs begin-->
          <textarea name="content" rows="5" cols="30"><?php echo set_value('contentDetails', $contentDetails);?></textarea>
        </article><!--content paragraphs end-->
        
      </section> <!--content ends--> 
        
         
     <!--  <section id="rightContent" class="cf">  --><!--right hand side content begins-->
        
      <!--   <section id="selfContainer">
          <article class="selfPhoto"> -->
            <!--<img src="assets/images/zumbaLogo.jpg"/>-->
          <!-- </article>
        </section>

      </section> --> <!--right hand side content ends-->
      
       <?php
          // $aTestimonialDetails= $testimonialDetails->result_array();
          // $aName= $name->result_array();
          
          // echo "<pre>";
          // print_r($aTestimonialDetails);
          // echo "</pre>";
          ?>

      


      <section><!--tagline begins-->
        <?php 

               $oTagline = $tagline->row();
               $tag = $oTagline->tagline;


        ?>
        <label for="tagline" class="adminLabel">Tagline</label>
        <input type="text" name="tagline" value="<?php echo set_value('tagline', $tag);?>" />
        
      </section><!--tagline ends-->
      
    
    
    <section id="promoAdmin" class="promoAboutAdmin"><!--promotional tag begins-->
      <?php 
              $oPromoDetails = $promoDetails->row();
              $promo = $oPromoDetails->promoDetails;
        ?>
        <label for="promo" class="adminLabel">Promotional Message</label>
          <textarea name="content" rows="5" cols="30"><?php echo set_value('promoDetails', $promo);?></textarea>
    </section><!--promotional tag begins-->
    </section><!--main container ends-->


<?php  
        $aTestimonialDetails= $testimonialDetails->result_array();
        //$aName= $name->result_array();

        echo form_open('cmsmodel/aboutUpdate');
  ?>
    <section id="mainContainer" class="cf"><!-- container for testiminials form begins-->  
      <h1>ADMIN AREA: TESTIMONIALS</h1>

      <section id="testimonials"><!--testimonials begin-->
        <label for="title">Subheading</label>


        <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading', $mainHeading);?>" />
        <ul>
          <li><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading', $mainHeading);?></textarea><span class="reference"><input type="text" name="mainHeading" value="Christina 1" /></span></li>
          <li><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading', $mainHeading);?></textarea><span class="reference"><input type="text" name="mainHeading" value="Christina 2" /></span></li>
          <li><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading', $mainHeading);?></textarea><span class="reference"><input type="text" name="mainHeading" value="Christina 3" /></span></li>
        </ul>
        
        <div class="adminLinks">
          <p class="adminAdd"><a href="aboutAddTestimonial.php">+ Add New Testimonial</a></p>
                    
        </div>
      </section><!--testimonials ends-->

    </form>
    </section><!-- container for testiminials form ends-->  

  </div> <!--wrapper ends-->
  
  </form>
    
    