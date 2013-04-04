<section class="mainContainer" class="cf"><!--main container begins-->
  <h1>ADMIN AREA: HOME </h1> 
<section class="contentAdmin">
<?php 
  $aPageParts = $pageParts->row_array();
  $mainHeading=$aPageParts['H1'];
  $contentDetails=$aPageParts['contentDetails'];
  echo form_open('admin/home');
?><!-- <form begins> -->

  <label for="mainHeading" class="adminLabel">Main Heading</label>
  <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
        <!-- <h1 class="homeHeading">WHAT IS ZUMBA FITNESS?</h1> -->
      
  <section id="contentAdmin"> <!--content begins-->    
    <label for="title" class="adminLabel">Content</label>
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
  
  <p class="submit"><input type="submit" id="updatePage" name="updatePage" value="Update" /></p>
  
 </form>     
</section>
</section><!--main container ends-->    
    
</div> <!--wrapper ends-->
  
  
    
    