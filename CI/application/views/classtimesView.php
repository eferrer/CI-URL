  <section class="mainContainer"><!--class schedule container begins-->
    <h1 class="classHeading"><!-- CLASS SCHEDULE -->           
    <?php
      $aPageParts = $pageParts->result_array();
      
      // echo $aPageParts[0]['H1'];

    ?>
    CLASS SCHEDULE
    </h1>
  
      <section id="classSchedule"> <!--class schedule content begins-->    
    
        <p class="rangitotoClasses">* Rangitoto College classes are only offered on a term by term basis through the Adult Education Office at Rangitoto College.
          To enrol, please call me on 4770075 or <a href="http://rangitoto.learningsource.co.nz/courses/148-zumba">click here</a> to visit their website.</p>
          <?php
      
            $aClassDetails= $classDetails->result_array();
            foreach($aClassDetails as $key=>$aDetails){
          ?>
          
          <section class="classDetails"><!--class details begins-->
           <ul id="classTimes">
              <li class="day"><!-- MONDAY --><?php echo $aDetails['day']; ?></li>
              <li class="time"><!-- 7 - 8 PM --><?php echo $aDetails['time']; ?></li>
              <li class="place"><!--RANGITOTO COLLEGE--><?php echo $aDetails['place']; ?></li>
              <li class="address"><!-- 564 East Coast Road, Mairangi Bay --><?php echo $aDetails['address']; ?></li>
            </ul>
          </section><!--class details ends-->
      
          <section class="directions"><!--location details begins-->
            <form action="http://maps.google.com/maps" method="get" target="_blank">
               <label for="saddr">Enter your starting point:</label>
               <input type="text" name="saddr" />
               <input type="hidden" name="daddr" value="<?php echo $aDetails['address']; ?>"/>
               <input type="submit" value="Get directions" />
            </form>
          </section><!--location details ends-->
          
        <?php } ?>
                 
      </section> <!--class schedule content ends-->         
  </section><!--class schedule container ends-->
      
  <section class="mainContainer"><!--price schedule container begins-->
      
    <h1 class="classHeading"><!-- PRICE SCHEDULE -->
    <?php
      //echo $aPageParts[1]['H1'];
    ?>
    PRICE SCHEDULE
    </h1>
              
    <section id="priceSchedule"> <!--price schedule content begins-->    
      <article class="classPrice">
        <?php
        $aPriceDetails = $priceDetails->result_array();
        foreach($aPriceDetails as $key=>$aPriceDetails){
        ?>
        <h3><!-- Price Type-->
        <?php
          echo nl2br($aPriceDetails['priceType']);
        ?>
        </h3>
  
        <p><!-- Description of the price-->
        <?php
          echo nl2br($aPriceDetails['priceDetails']);
        }
        ?>
        </p>
        <p>No expiry date and cards can only be used for the Tuesday, Wednesday and Thursday classes</p>
      </article>
    </section> <!--price schedule content ends-->       
  </section><!--price schedule container ends-->
        
  <section id="promo" class="promoClasses"><!--promotional tag begins-->
    <p><!--Mention this website and receive <span class="prmsgAbout">50%</span> off all classes in your first week OR bring a friend for <span class="prmsgAbout">FREE!</span>--> 
    <?php 
      $oPromoDetails = $promoDetails->row();
      echo nl2br($oPromoDetails->promoDetails);
    ?>
    </p>
  </section><!--promotional tag ends-->
        
  <section class="mainContainer"><!--class info container begins-->
        
    <h1 class="classHeading"><!-- INFORMATION FOR STUDENTS -->
    <?php
      //$aMainHeading = $mainHeading->result_array();
      //echo $aPageParts[4]['H1'];
    ?>
    STUDENT INFORMATION
    </h1>
    
    <section id="studentInfo"> <!--student information content begins-->    
      
      <h3><!-- WHAT TO EXPECT -->
      <?php
       // echo "<pre>";
       //    print_r($aPageParts);
       //    echo "</pre>";
  
      // $aSubHeading = $subHeading->result_array();
      // echo $aSubHeading[4]['H3'];
        echo nl2br($aPageParts[1]['H3']);
      ?>
      </h3>
  
      <article class="studentInfo"><!--content paragraphs begin-->
        <p>
        <?php
        // $aContent = $content->result_array();
        // echo nl2br($aContent[4]['contentDetails']);
          echo nl2br($aPageParts[1]['contentDetails']);
        ?>
        </p>
      </article><!--content paragraphs end-->
      
      <h3><!-- WHAT YOU WILL NEED -->
      <?php
      // $aSubHeading = $subHeading->result_array();
      // echo $aSubHeading[5]['H3'];
        echo nl2br($aPageParts[2]['H3']);
      ?>
      </h3>
  
      <ul class="needs">
      <?php
        $aNeedsDetails= $needsDetails->result_array();
        foreach($aNeedsDetails as $key=>$aNeeds){
          echo '<li>' . $aNeeds['needsDetails'] . '</li>';
        } ?>
      </ul>
    </section> <!--student information content ends--> 
  
    <section><!--tagline begins-->
      <h2 id="classesTag">
      <?php 
        $oTagline = $tagline->row();
        echo nl2br($oTagline->tagline);
      ?>
      </h2>
    </section><!--tagline ends-->
  </section><!--class info container ends-->
  
</div> <!--wrapper ends-->
    

