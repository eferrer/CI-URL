  <section class="mainContainer"><!--main container for main heading begins-->  
    <h1>ADMIN AREA: CLASSES </h1>
    <section class="contentAdmin">
      <!-- <h2>ADMIN AREA: CLASS SCHEDULE</h2>  -->  
        <?php
          $aPageParts = $pageParts->result_array();
          
          // echo "<pre>";
          // print_r($aPageParts);
          // echo "</pre>";
          $contentDetails=$aPageParts[1]['contentDetails'];
          $mainHeading=$aPageParts[0]['H1'];
          echo form_open('admin/classtimes');
        ?><!-- <form> -->
          
          <!-- <label for="mainHeading" class="adminLabel">Main Heading</label>
          <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading', $mainHeading);?>" /> -->
          <!-- <h1 class="classHeading">CLASS SCHEDULE HEADING</h1> -->
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
        
      <section id="promoAdmin" class="promoAboutAdmin"><!--promotional tag begins-->
        <?php 
          $oPromoDetails = $promoDetails->row();
          $promo = $oPromoDetails->promoDetails;
        ?>
          <label for="promo" class="adminLabel">Promotional Message</label>
          <textarea name="promo" rows="5" cols="30"><?php echo set_value('promoDetails', $promo);?></textarea>
          
          <p class="submit"><input type="submit" id="updatePage" name="updatePage" value="Update" /></p>
        </section><!--promotional tag ends-->
      </form>
    </section>
  </section><!--main container ends-->
    
       
  <section class="mainContainer" class="cf"><!-- container for class schedule forms begins-->  
    <h2>ADMIN AREA: CLASS DETAILS</h2>
    <p class="adminAdd"><a href="<?=base_url()?>admin/insertClass">+ ADD NEW CLASS</a></p>
              
    <section class="contentAdmin"> <!--class schedule content begins-->    
    
    <?php  
      $aClassDetails= $classDetails->result_array();
      
      foreach($aClassDetails as $key=>$aDetails){
        $day = $aDetails['day'];
        $time = $aDetails['time'];
        $place = $aDetails['place'];
        $address = $aDetails['address'];   
        $classID = $aDetails['classID']; 
        echo form_open('admin/updateClassSchedule');
    ?>
               
      <section class="classDetailsAdmin"><!--class details begins-->
        <ul class="classTimesAdmin">
          <li class="day"><input type="text" name="day" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('day', $day);?>" /></li>
          <input type="hidden" name = "classID" value = "<?=$classID?>" />
          <li class="time"><input type="text" name="time" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('time',$time); ?>" /></li>
          <input type="hidden" name = "classID" value = "<?=$classID?>" />
          <li class="place"><input type="text" name="place" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('place',$place); ?>" /></li>
          <input type="hidden" name = "classID" value = "<?=$classID?>" />
          <li class="address"><input type="text" name="address" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('address',$address); ?>" /></li>  ` 
          <input type="hidden" name = "classID" value = "<?=$classID?>" />
        </ul>    
      </section><!--class details ends-->
        
      <p class="submit"><input type="submit" id="newClassSubmit" name="newClassSubmit" value="Update" /></p>
      <p class="submit"><input type="submit" id="deleteClassSubmit" name="deleteClassSubmit" value="Delete" /></p>
      </form>            
    <?php } ?>
      
    </section> <!--class schedule content ends--> 
  </section><!--container for classes forms ends-->
            
  <section class="mainContainer" class="cf"><!--main container for Student Info - What to expect begins-->    
    <h2>ADMIN AREA: ITEMS THAT STUDENTS NEED</h2>
    <p class="adminAdd"><a href="<?=base_url()?>admin/insertNeeds">+ ADD NEW ITEM</a></p>  
      
      <section class="contentAdmin">
        
        <?php  
          $aNeedsDetails= $needsDetails->result_array();
          
          foreach($aNeedsDetails as $key=>$aNeeds){
            $needs = $aNeeds['needsDetails'];
            $needsID = $aNeeds['needsID'];    
            echo form_open('admin/updateNeedsItem'); 
        ?>
        
      <section class="classDetailsAdmin"><!--Student information content begins-->
        <ul class="needsAdmin">
          <li><textarea name="needs" rows="5" cols="30"><?php echo set_value('needs',$needs); ?></textarea></li>
        <input type="hidden" name = "needsID" value = "<?=$needsID?>" />
        </ul>
      </section> <!--student information content ends-->
      
      <p class="submit"><input type="submit" id="newNeedsSubmit" name="newNeedsSubmit" value="Update" /></p>
      <p class="submit"><input type="submit" id="deleteNeedsSubmit" name="deleteNeedsSubmit" value="Delete" /></p>
      </form>           
    <?php } ?>
      
    </section>
  </section><!--main container for  Student Info - What to bring ends-->

</div> <!--wrapper ends-->
    

    
