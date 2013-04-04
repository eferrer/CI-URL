<section id="mainContainer" class="cf"><!--main container begins-->  
  <h1>ADMIN AREA: ABOUT ME </h1>
  
<?php 
  $aPageParts = $pageParts->row_array();

  $mainHeading=$aPageParts['H1'];
  $contentDetails=$aPageParts['contentDetails'];
  echo form_open('cmsmodel/about');
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
      <textarea name="content" rows="5" cols="30"><?php echo set_value('promoDetails', $promo);?></textarea>
      
      <p class="submit"><input type="submit" value="Update" /></p>
    
    </form>
  </section><!--promotional tag begins-->
</section><!--main container ends-->




<section id="mainContainer" class="cf"><!-- container for testimonials forms begins-->  
  <h1>ADMIN AREA: TESTIMONIALS</h1>
  <p class="adminAdd"><a href="aboutAddTestimonial.php">+ Add New Testimonial</a></p>
  
  <section id="testimonials"><!--testimonials begin-->
    
  <?php  
    echo form_open('cmsmodel/aboutUpdate');
    $aTestimonialDetails= $testimonialDetails->result_array();
    
    foreach($aTestimonialDetails as $key=>$aTestimonials){
      $testimonials = $aTestimonials['testimonialDetails'];
      $name = $aTestimonials['name']?>

      <ul>
        <li><textarea name="content" rows="5" cols="30"> <?php echo set_value('testimonialDetails', $testimonials)?>;</textarea></li>
          <li><input type="text" name="mainHeading" value=" <?php echo set_value('name', $name)?>;" /></li>
        <p class="submit"><input type="submit" value="Update" /></p>
        <p class="submit"><input type="submit" value="Delete" /></p>
      </ul>
      
      <?php } ?>
    </form>    
  </section><!--testimonials ends-->
</section><!-- container for testiminials form ends-->  
    
    