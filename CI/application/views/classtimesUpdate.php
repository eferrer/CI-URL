<section class="mainContainer" class="cf"><!--main container for main heading begins-->  
  <h1>ADMIN AREA: CLASSES </h1>
  <section class="contentAdmin">
  <h2>ADMIN AREA: CLASS SCHEDULE</h2>   
      <?php
        $aPageParts = $pageParts->result_array();
        
        // echo "<pre>";
        // print_r($aPageParts);
        // echo "</pre>";
        
        $mainHeading0=$aPageParts[0]['H1'];
        echo form_open('admin/classtimes');
      ?><!-- <form> -->
        
        <label for="mainHeading" class="adminLabel">Main Heading</label>
        <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading0);?>" />
          <!-- <h1 class="classHeading">CLASS SCHEDULE HEADING</h1> -->
  
  <h2>ADMIN AREA: PRICE SCHEDULE</h2>
      
  <?php
    $aPageParts = $pageParts->result_array();
    $mainHeading1=$aPageParts[1]['H1'];
  ?><!-- <form> -->
    
    <label for="mainHeading" class="adminLabel">Main Heading</label>
    <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading1);?>" />      
    <!--PRICE SCHEDULE HEADING-->
  <?php 
  $aPageParts = $pageParts->result_array();
  $subHeading1 = $aPageParts[1]['H3'];
  $subHeading2 = $aPageParts[2]['H3'];
  $casualPrice = $aPageParts[1]['contentDetails'];
  $concessionPrice = $aPageParts[2]['contentDetails'];
  $concessionDetails = $aPageParts[3]['contentDetails'];
  
  // echo "<pre>";
  // print_r($aPageParts);
  // echo "</pre>";
  ?>
  
    <section id="priceScheduleAdmin"> <!--price schedule content begins-->    
      
      <article class="classPrice">
        <label for="mainHeading" class="adminLabel">SubHeading</label>
        <input type="text" name="priceType" value="<?php echo set_value('subHeading1',$subHeading1); ?>" />
        
        <label for="mainHeading" class="adminLabel">Description</label>
        <input type="text" name="day" value="<?php echo set_value('casual',$casualPrice); ?>" />
        
        <label for="mainHeading" class="adminLabel">SubHeading</label>
        <input type="text" name="priceType" value="<?php echo set_value('subHeading2',$subHeading2); ?>" />
        
        <label for="mainHeading" class="adminLabel">Description</label>
        <input type="text" name="day" value="<?php echo set_value('concession',$concessionPrice); ?>" />
        
        <label for="mainHeading" class="adminLabel">Description2</label>
        <input type="text" name="details" value="<?php echo set_value('concessionDetails',$concessionDetails); ?>" />
      </article>

    </section> <!--price schedule content ends--> 
    
  
    <h2>ADMIN AREA: STUDENT INFORMATION</h2>
      
    <?php
      $aPageParts = $pageParts->result_array();
      $mainHeading=$aPageParts[4]['H1'];
      $info=$aPageParts[4]['contentDetails'];
    ?><!-- <form> -->
    <section> <!--student information content begins--> 
      <label for="mainHeading" class="adminLabel">Main Heading</label>
      <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
        <!-- <h1 class="classHeading">INFORMATION FOR STUDENTS</h1> -->
        <label for="mainHeading" class="adminLabel">Description</label>
         
        <!-- <article class="studentInfo"> --><!--content paragraphs begin-->
          <textarea name="content" rows="5" cols="30"><?php echo set_value('info',$info); ?></textarea>
        <!-- </article> --><!--content paragraphs end-->
    </section><!--student information content ends-->   
    
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
      
      
      
      
      
<section class="mainContainer" class="cf"><!-- container for classes forms begins-->  
  <h2>ADMIN AREA: CLASS DETAILS</h2>
  <p class="adminAdd"><a href="<?=base_url()?>admin/addClass">+ ADD NEW CLASS</a></p>
            
  <section class="contentAdmin"> <!--class schedule content begins-->    
  
  <?php  
    echo form_open('admin/classtimes');
    
    $aClassDetails= $classDetails->result_array();
    
    foreach($aClassDetails as $key=>$aDetails){
      $day = $aDetails['day'];
      $time = $aDetails['time'];
      $place = $aDetails['place'];
      $address = $aDetails['address'];   
      $classID = $aDetails['classID']; 
  ?>
             
      <section class="classDetailsAdmin"><!--class details begins-->
        <ul class="classTimesAdmin">
          <li class="day"><input type="text" name="day" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('day', $day);?>" /></li>
          <li class="time"><input type="text" name="time" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('time',$time); ?>" /></li>
          <li class="place"><input type="text" name="place" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('place',$place); ?>" /></li>
          <li class="address"><input type="text" name="address" id="<?php echo set_value('classID', $classID);?>" value="<?php echo set_value('address',$address); ?>" /></li>  ` 
        </ul>
              
      </section><!--class details ends-->
      <p class="submit"><input type="submit" value="Update" /></p>
      <p class="submit"><input type="submit" value="Delete" /></p>
                   
  <?php } ?>
    </form>
  </section> <!--class schedule content ends--> 
</section><!--container for classes forms ends-->
      
          
<section class="mainContainer" class="cf"><!--main container for Student Info - What to expect begins-->    
  <h2>ADMIN AREA: ITEMS THAT STUDENTS NEED</h2>
  <p class="adminAdd"><a href="<?=base_url()?>admin/addItem">+ ADD NEW ITEM</a></p>  
    
    <section class="contentAdmin">
      
      <?php  
        echo form_open('admin/classtimes');
      
        $aNeedsDetails= $needsDetails->result_array();
        
        foreach($aNeedsDetails as $key=>$aNeeds){
          $needs = $aNeeds['needsDetails'];     
      ?>
        <section class="classDetailsAdmin"><!--class details begins-->
          <ul class="needsAdmin">
            <li><textarea name="content" rows="5" cols="30"><?php echo set_value('needs',$needs); ?></textarea></li>
          </ul>
        
        </section> <!--student information content ends--> 
        <p class="submit"><input type="submit" value="Update" /></p>
      <p class="submit"><input type="submit" value="Delete" /></p>
                   
  <?php } ?>
    </form>
  </section>
</section><!--main container for  Student Info - What to expect ends-->

        
      
      <!-- </section> --><!--class info container ends-->
    
</div> <!--wrapper ends-->
    

    
