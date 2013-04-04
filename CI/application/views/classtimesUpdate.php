<section id="mainContainer" class="cf"><!--main container for main heading begins-->  
  <h1>ADMIN AREA: CLASS SCHEDULE </h1>
      
      <?php
        $aPageParts = $pageParts->row_array();
        $mainHeading=$aPageParts['H1'];
        echo form_open('cmsmodel/classtimes');
      ?><!-- <form> -->
        
        <label for="mainHeading" class="adminLabel">Main Heading</label>
        <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
          <!-- <h1 class="classHeading">CLASS SCHEDULE</h1> -->
        </form>
</section><!--main container for main heading ends-->

<section id="mainContainer" class="cf"><!-- container for classes forms begins-->  
  <h2>ADMIN AREA: CLASSES</h2>
  <p class="adminAdd"><a href="aboutAddTestimonial.php">+ ADD NEW CLASS</a></p>
            
  <section id="classSchedule"> <!--class schedule content begins-->    
  
  <?php  
    echo form_open('cmsmodel/classtimesUpdate');
    
    $aClassDetails= $classDetails->result_array();
    
    foreach($aClassDetails as $key=>$aDetails){
      $day = $aDetails['day'];
      $time = $aDetails['time'];
      $place = $aDetails['place'];
      $address = $aDetails['address'];    
  ?>
             
      <section class="classDetails"><!--class details begins-->
        <ul id="classTimes">
          <li class="day"><input type="text" name="day" value="<?php echo set_value('day', $day)?>;" /></li>
          <li class="time"><input type="text" name="time" value="<?php echo set_value('time',$time); ?>" /></li>
          <li class="place"><input type="text" name="place" value="<?php echo set_value('place',$place); ?>" /></li>
          <li class="address"><input type="text" name="address" value="<?php echo set_value('address',$address); ?>" /></li>  ` 
        </ul>
              
      </section><!--class details ends-->
      <p class="submit"><input type="submit" value="Update" /></p>
      <p class="submit"><input type="submit" value="Delete" /></p>
                   
  <?php } ?>
    </form>               
                
                  
            </section> <!--class schedule content ends--> 
        
      </section><!--class schedule container ends-->


      <section id="mainContainer" class="cf"><!--price schedule container begins-->
          
          <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
          <!-- <h1 class="classHeading">PRICE SCHEDULE</h1> -->
            
            <section id="priceSchedule"> <!--price schedule content begins-->    
              
              <article class="classPrice">
                <h3><input type="text" name="priceType" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></h3><p><input type="text" name="day" value="$10 per class" /></p>
                <h3><input type="text" name="priceType" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></h3><p><input type="text" name="day" value="$40 for 5 classes$75 for 10 classes" /><br/></p>
              
                <p><input type="text" name="details" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></p>
              </article>

            </section> <!--price schedule content ends--> 
        
      </section><!--price schedule container ends-->
      
      <section id="promo" class="promoClasses"><!--promotional tag begins-->
          <textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading',$mainHeading); ?></textarea>
    </section><!--promotional tag begins-->
      
      <section id="mainContainer" class="cf"><!--class info container begins-->
        
        <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
        <!-- <h1 class="classHeading">INFORMATION FOR STUDENTS</h1> -->
        
        <section id="studentInfo"> <!--student information content begins-->    
          
          <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
          <!-- <h3>WHAT TO EXPECT</h3> -->
          <article class="studentInfo"><!--content paragraphs begin-->
            <p><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading',$mainHeading); ?></textarea></p>
          </article><!--content paragraphs end-->
          
          <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
          <!-- <h3>WHAT YOU WILL NEED</h3> -->
          <ul class="needs">
            <li><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading',$mainHeading); ?></textarea><input type="button" id="deleteButton" value="Delete Item"/></li>
            <li><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading',$mainHeading); ?></textarea><input type="button" id="deleteButton" value="Delete Item"/></li>
            <li><textarea name="content" rows="5" cols="30"><?php //echo set_value('mainHeading',$mainHeading); ?></textarea><input type="button" id="deleteButton" value="Delete Item"/></li>
          </ul>
          <div class="adminLinks">
          <p class="adminAdd"><a href="needsAddNew.html">+ Add New Item</a></p>
                    
        </div>
        </section> <!--student information content ends--> 

        <section><!--tagline begins-->
          <?php 
            $oTagline = $tagline->row();    
           ?>
          <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
          <!-- <h2 id="classesTag">Don’t wait any longer - Party Yourself into Shape today!</h2> -->
        </section><!--tagline ends-->
      
      </section><!--class info container ends-->
    
  </div> <!--wrapper ends-->
    
  </form>
    
