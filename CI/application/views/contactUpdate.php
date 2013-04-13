  <section class="mainContainer"><!--main container begins-->  
    <h1>ADMIN AREA: CONTACT ME </h1>
    <section class="contentAdmin">
    
      <?php 
	$aPageParts = $pageParts->row_array();
      
	$mainHeading=$aPageParts['H1'];
	$contentDetails=$aPageParts['contentDetails'];
	echo form_open('admin/contact');
      ?><!-- <form begins> -->
  
      <label for="mainHeading" class="adminLabel">Main Heading</label>
      <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
      <!-- <h1 class="aboutHeading">CONTACT ME</h1> -->      
      
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
</div> <!--wrapper ends-->
    
    
    