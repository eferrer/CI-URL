<section class="mainContainer" class="cf"><!--main container begins-->  
  <h1>ADMIN AREA: ABOUT ME </h1>
<section class="contentAdmin">
  
<?php 
  $aPageParts = $pageParts->row_array();

  $mainHeading=$aPageParts['H1'];
  $contentDetails=$aPageParts['contentDetails'];
  echo form_open('admin/about');
?><!-- <form begins> -->

  <label for="mainHeading" class="adminLabel">Main Heading</label>
  <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
<!-- <h1 class="aboutHeading">ABOUT ME</h1> -->

  <section id="aboutAdmin"> <!--content begins-->    
    <label for="content" class="adminLabel">Content</label>
    <article class="info"><!--content paragraphs begin-->
      <textarea name="content" rows="5" cols="30"><?php echo set_value('contentDetails', $contentDetails);?></textarea>
    </article><!--content paragraphs end-->
  </section> <!--content ends--> 
        
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
      <textarea name="promo" rows="5" cols="30"><?php echo set_value('promoDetails', $promo);?></textarea>
      
      <p class="submit"><input type="submit" id="updatePage" name="updatePage" value="Update" /></p>
    
    </form>
  </section><!--promotional tag ends-->
</section>
</section><!--main container ends-->

<section class="mainContainer" class="cf"><!-- container for testimonials forms begins-->  
  <h2>ADMIN AREA: TESTIMONIALS</h2>
  <p class="adminAdd"><a href="<?=base_url()?>admin/addTestimonial">+ ADD NEW TESTIMONIAL</a></p>
  
  <section class="contentAdmin"><!--testimonials begin-->
    
  <?php  
    echo form_open('admin/about');
    
    $aTestimonialDetails= $testimonialDetails->result_array();
    
    foreach($aTestimonialDetails as $key=>$aTestimonials){
      $testimonials = $aTestimonials['testimonialDetails'];
      $name = $aTestimonials['name'];
      $testimonialsID = $aTestimonials["testID"];
  ?>

      <ul>
        <li><textarea name="testimonial" id="<?php echo set_value('testID', $testimonialsID);?>" rows="5" cols="30"> <?php echo set_value('testimonialDetails', $testimonials);?></textarea></li>
          <li><input type="text" name="testimonialRef" value=" <?php echo set_value('name', $name); ?>" /></li>
        <p class="submit"><input type="submit" id="updateTestimonial" name="updateTestimonial" value="Update" /></p>
        <p class="submit"><input type="submit" value="Delete" /></p>
      </ul>
      
      <?php } ?>
    </form>    
  </section><!--testimonials ends-->
</section>
</section><!-- container for testiminials form ends--> 
</div> <!--wrapper ends--> 
    
    