    
    <section id="mainContainer" class="cf"><!--class schedule container begins-->


      <?php 
            // $oContent = $content->result();

            // echo "<pre>";
            // print_r($oContent);
            // echo "</pre>";

            // ==========return content result as an array of all the rows==========
            // rows contain an array of a single row

            // $aContent = $content->result_array();

            // print_r($aContent[1]);
            // echo $aContent[1]['contentDetails'];

            // echo "<pre>";
            // print_r($aContent);
            // echo "</pre>";

            // ==========return main headings result as an array of all the rows==========

            // $aMainHeading = $mainHeading->result_array();

            // print_r($aMainHeading[1]);
            // echo $aMainHeading[1]['H1'];

            // echo "<pre>";
            // print_r($aMainHeading);
            // echo "</pre>";

            // ==========return sub headings result as an array of all the rows==========

            // $aSubHeading = $subHeading->result_array();

            // print_r($aSubHeading[1]);
            // echo $aSubHeading[1]['H3'];

            // echo "<pre>";
            // print_r($aSubHeading);
            // echo "</pre>";
            
            ?>

    
          <h1 class="classHeading"><!-- CLASS SCHEDULE -->
            
            <?php
                  $aPageParts = $pageParts->result_array();
                  echo $aPageParts[0]['H1'];
            ?>
          </h1>

            <section id="classSchedule"> <!--class schedule content begins-->    
                  
                  <section class="classDetails"><!--class details begins-->

                     <?php

                     $aClassDetails= $classDetails->result_array();
                      // $aDay= $day->result_array();
                      // $aTime= $time->result_array();
                      // $aPlace= $place->result_array();
                      // $aAddress= $address->result_array();

                      // echo "<pre>";
                      // print_r($aDay);
                      // echo "</pre>";
                      ?>

                          <ul id="classTimes">
                            <li class="day"><!-- MONDAY --><?php echo $aClassDetails[0]['day']; ?></li>
                            <li class="time"><!-- 7 - 8 PM --><?php echo $aClassDetails[0]['time']; ?></li>
                            <li class="place"><!--RANGITOTO COLLEGE--><?php echo $aClassDetails[0]['place']; ?></li>
                            <li class="address"><!-- 564 East Coast Road, Mairangi Bay --><?php echo $aClassDetails[0]['address']; ?></li>
                          </ul>
                    </section><!--class details ends-->

                        <section class="directions"><!--location details begins-->
                          <form action="http://maps.google.com/maps" method="get" target="_blank">
                             <label for="saddr">Enter your starting point</label>
                             <input type="text" name="saddr" />
                             <input type="hidden" name="daddr" value="564 East Coast Road, Mairangi Bay, Auckland, New Zealand"/>
                             <input type="submit" value="Get directions" />
                          </form>
                              <!-- <div class="mapHolder">Google Map container</div> -->
                              <!-- <article class="details">Location Details</article> -->
                              <!-- <input type="button" id="toggleButton" value="View Details"/> -->
                        </section><!--location details ends-->
                

                <section class="classDetails"><!--class details begins-->
                        <ul id="classTimes">
                          <li class="day"><!-- TUESDAY --><?php echo $aClassDetails[1]['day']; ?></li>
                          <li class="time"><!-- 9.30 - 10.30 AM --><?php echo $aClassDetails[1]['time']; ?></li>
                          <li class="place"><!-- Torbay Community Hall --><?php echo $aClassDetails[1]['place']; ?></li>
                          <li class="address"><!-- 35 Watea Rd, Torbay --><?php echo $aClassDetails[1]['address']; ?></li>  
                        </ul>
                      </section><!--class details ends-->

                        <section class="directions"><!--location details begins-->
                          <form action="http://maps.google.com/maps" method="get" target="_blank">
                             <label for="saddr">Enter your starting point</label>
                             <input type="text" name="saddr" />
                             <input type="hidden" name="daddr" value="35 Watea Rd, Torbay, Auckland"/>
                             <input type="submit" value="Get directions" />
                          </form>
                          
                          <!-- <div class="mapHolder">Google Map container</div> -->
                          <!-- <article class="details">Location Details</article> -->
                        <!-- <input type="button" id="toggleButton" value="View Details"/> -->
                  </section><!--location details ends-->
                
            </section> <!--class schedule content ends--> 
        
      </section><!--class schedule container ends-->


      <section id="mainContainer" class="cf"><!--price schedule container begins-->
    
          <h1 class="classHeading"><!-- PRICE SCHEDULE -->
            <?php
                  //$aMainHeading = $mainHeading->result_array();
                  echo $aPageParts[1]['H1'];
            ?>
          </h1>
            
            <section id="priceSchedule"> <!--price schedule content begins-->    
              
              <article class="classPrice">
                
                <h3><!-- CASUAL CLASS: -->
                  <?php
                        // $aSubHeading = $subHeading->result_array();
                        // echo $aSubHeading[1]['H3'];
                  echo nl2br($aPageParts[1]['H3']);
                  ?>
                </h3>

                <p><!-- $10 per class -->
                  <?php
                        // $aContent = $content->result_array();
                        // echo $aContent[1]['contentDetails'];
                  echo nl2br($aPageParts[1]['contentDetails']);
                  ?>
                </p>

                <h3><!-- CONCESSION CARDS: -->
                   <?php
                        // $aSubHeading = $subHeading->result_array();
                        // echo $aSubHeading[2]['H3'];
                   echo nl2br($aPageParts[2]['H3']);
                  ?>
                </h3>

                <p><!-- $40 for 5 classes. $75 for 10 classes -->
                  <?php
                        // $aContent = $content->result_array();
                        // echo nl2br($aContent[2]['contentDetails']);
                  echo nl2br($aPageParts[2]['contentDetails']);
                  ?>
                </p>
              
                <p><!--card information-->
                  <?php
                        // $aContent = $content->result_array();
                        // echo aPageParts($aContent[3]['contentDetails']);
                  echo nl2br($aPageParts[3]['contentDetails']);
                  ?>
                </p>

              </article>

            </section> <!--price schedule content ends--> 
        
      </section><!--price schedule container ends-->
      
      <section id="promo" class="promoClasses"><!--promotional tag begins-->
          <p><!--Mention this website and receive <span class="prmsgAbout">50%</span> off all classes in your first week OR bring a friend for <span class="prmsgAbout">FREE!</span>--> 
            <?php 
              $oPromoDetails = $promoDetails->row();
              echo nl2br($oPromoDetails->promoDetails);
        ?></p>
      </section><!--promotional tag ends-->
      
      <section id="mainContainer" class="cf"><!--class info container begins-->
        
        <h1 class="classHeading"><!-- INFORMATION FOR STUDENTS -->
          <?php
                  //$aMainHeading = $mainHeading->result_array();
                  echo $aPageParts[4]['H1'];
            ?>
        </h1>
        
        <section id="studentInfo"> <!--student information content begins-->    
          
          <h3><!-- WHAT TO EXPECT -->
            <?php
                  // $aSubHeading = $subHeading->result_array();
                  // echo $aSubHeading[4]['H3'];
            echo nl2br($aPageParts[4]['H3']);
              ?>
          </h3>

          <article class="studentInfo"><!--content paragraphs begin-->
              <p>
              <?php
                  // $aContent = $content->result_array();
                  // echo nl2br($aContent[4]['contentDetails']);
              echo nl2br($aPageParts[4]['contentDetails']);
               ?>
              </p>
          </article><!--content paragraphs end-->
          
          <h3><!-- WHAT YOU WILL NEED -->
            <?php
                  // $aSubHeading = $subHeading->result_array();
                  // echo $aSubHeading[5]['H3'];
                  echo nl2br($aPageParts[5]['H3']);
              ?>
          </h3>

            <?php
            $aNeedsDetails= $needsDetails->result_array();

            // echo "<pre>";
            // print_r($aNeedsDetails);
            // echo "</pre>";
            ?>

            <ul class="needs">
            <li><!-- Plenty of water --><?php echo $aNeedsDetails[0]['needsDetails']; ?></li>
            <li><!-- A towel --><?php echo $aNeedsDetails[1]['needsDetails']; ?></li>
            <li><!-- Proper footwear. Ideally, non-tread shoooes for easier pivoting and movement --><?php echo $aNeedsDetails[2]['needsDetails']; ?></li>

            
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
    

