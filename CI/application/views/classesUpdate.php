
    <section id="mainContainer" class="cf"><!--class schedule container begins-->
      
      <?php
       $aPageParts = $pageParts->row_array();
       
      echo form_open('contactForm', $attributes);?>
      <!-- <form> -->
        <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
          <!-- <h1 class="classHeading">CLASS SCHEDULE</h1> -->

            <section id="classSchedule"> <!--class schedule content begins-->    
                  
                  <section class="classDetails"><!--class details begins-->
                          <ul id="classTimes">
                            <li class="day"><input type="text" name="day" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></li>
                            <li class="time"><input type="text" name="time" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></li>
                            <li class="place"><input type="text" name="place" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></li>
                            <li class="address"><input type="text" name="address" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" /></li>  ` 
                          </ul>
                          
                    </section><!--class details ends-->

                    <section class="directions"><!--location details begins-->
                          <form action="http://maps.google.com/maps" method="get" target="_blank">
                             <label for="saddr">Enter your starting point</label>
                             <input type="text" name="saddr" />
                             <input type="hidden" name="daddr" value="<?php //echo set_value('mainHeading',$mainHeading); ?>"/>
                             <input type="submit" value="Get directions" />
                          </form>
                      
                      <input type="button" id="deleteButton" value="Delete Class"/>
                    </section><!--location details ends-->
                
                
                  <div class="adminLinks">
          <p class="adminAdd"><a href="classesAddNew.html">+ Add New Class</a></p>
                    
        </div>
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
    
