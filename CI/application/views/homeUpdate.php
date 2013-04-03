
    <section id="danceTypes">
      <p><span class="zumbaIs">Zumba is ... </span>Merengue, Salsa. Cumbia, Reggaeton, Samba, Tango, Bachata, ChaCha, Mambo, Bellydance, Calypso, Lambada, Flamenco, Rumba, HipHop, Swing, Country, Bollywood, Bhangra ...</p>
    </section>
    
    <section id="mainContainer" class="cf"><!--main container begins-->
    
      
      <section id="mainImage"><!-- image goes here -->
       <!-- <img src="assets/images/full/photo2.jpg" width="800" height="600" alt="zumba"/> -->
      </section>   
      
      <?php 
      $aPageParts = $pageParts->row_array();

            // print_r($aMainHeading[1]);
            // echo $aMainHeading[1]['H1'];

            // echo "<pre>";
            // print_r($aMainHeading);
            // echo "</pre>";
      
      // $mainHeading = $oMainHeading->mainHeading;
      // $contentDetails = $oMainHeading->contentDetails;
      
      echo form_open('cmsmodel/homeUpdate');
      ?>
      
      <!-- <form> -->
        <input type="text" name="mainHeading" value="<?php //echo set_value('mainHeading',$mainHeading); ?>" />
        <!-- <h1 class="homeHeading">WHAT IS ZUMBA FITNESS?</h1> -->
      
      <section id="content"> <!--content begins-->    
        
        <!-- <label for="title">Content</label> -->
        <article class="info"><!--content paragraphs begin-->
          <textarea name="content" rows="5" cols="30"><?php //echo set_value('contentDetails',$contentDetails); ?></textarea>
        </article><!--content paragraphs end-->
        
      </section> <!--content ends--> 
        
         
      <section id="rightContent" class="cf"> <!--right hand side content begins-->
        <article id="viewClasses" class="cf">
          <section class="viewClassText"><a href="class.html">View Classes</a></section>
        </article>
        
        <section id="zumbaContainer">
          <article class="zumbaCom">
            <a href="http://www.zumba.com/">img</a>
          </article>
        </section>
      </section> <!--right hand side content ends-->
      
      <section><!--tagline begins-->
      <?php 
            $oTagline = $tagline->row();
            
      ?>
              
      
        <input type="text" name="tagline" value="<?php //echo set_value('tagline); ?>" />
        <!-- <h2 id="homeTag">Its Zumba! Feel the music and let loose</h2> -->
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    
  </div> <!--wrapper ends-->
  
  </form>
    
    