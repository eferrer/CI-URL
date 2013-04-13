  <section class="mainContainer"><!--main container begins-->  
    <h1>ADMIN AREA: VIDEO </h1>
    <section class="contentAdmin">
    
    <?php 
      $aPageParts = $pageParts->row_array();
    
      $mainHeading=$aPageParts['H1'];
      $contentDetails=$aPageParts['contentDetails'];
      echo form_open('admin/video');
    ?><!-- <form begins> -->
  
      <label for="mainHeading" class="adminLabel">Main Heading</label>
      <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
      <!-- <h1 class="aboutHeading">VIDEO</h1> -->
       
      <section><!--tagline begins-->
          <?php 
            $oTagline = $tagline->row();
            $tag = $oTagline->tagline;
            
          ?>
          <label for="tagline" class="adminLabel">Tagline</label>
          <input type="text" name="tagline" value="<?php echo set_value('tagline', $tag);?>" />
      </section><!--tagline ends-->
          
      <p class="submit"><input type="submit" id="updatePage" name="updatePage" value="Update" /></p>
      
    </form>         
  </section><!--main container ends-->
    
</div> <!--wrapper ends-->
    
