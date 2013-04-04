<section class="mainContainer" class="cf"><!--main container begins-->  
  <h1>ADMIN AREA: VIDEO </h1>
   
  <section><!--tagline begins-->
      <?php 
        $oTagline = $tagline->row();
        $tag = $oTagline->tagline;
        echo form_open('cmsmodel/about');
      ?>
      <label for="tagline" class="adminLabel">Tagline</label>
      <input type="text" name="tagline" value="<?php echo set_value('tagline', $tag);?>" />
    </section><!--tagline ends-->
        
    <p class="submit"><input type="submit" value="Update" /></p>
    
  </form>     
      
</section><!--main container ends-->
    
</div> <!--wrapper ends-->
    
