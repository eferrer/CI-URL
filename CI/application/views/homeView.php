
    
    <section id="danceTypes">
      <p><span class="zumbaIs">Zumba is ... </span>Merengue, Salsa. Cumbia, Reggaeton, Samba, Tango, Bachata, ChaCha, Mambo, Bellydance, Calypso, Lambada, Flamenco, Rumba, HipHop, Swing, Country, Bollywood, Bhangra ...</p>
    </section>
    
    <section id="mainContainer" class="cf"><!--main container begins-->
    
      
       <section id="slideshow"><!-- slideshow begins -->
           <ul class="rslides" id="slider1">
                  <li><img src="images/full/1.jpg" alt=""></li>
                  <li><img src="images/full/2.jpg" alt=""></li>
                  <li><img src="images/full/3.jpg" alt=""></li>
          </ul>
      </section>   <!-- slideshow ends -->   
      
      <h1 class="homeHeading"><!-- What is ZUMBA Fitness? -->
            <?php 
                  $oMainHeading = $mainHeading->row();
                  echo nl2br($oMainHeading->H1);
            ?>
      </h1>
      
      <section id="content"> <!--content begins-->    
        
            <article class="info"><!--content paragraphs begin-->
                  <p>
                  <?php 
                          $oContent = $content->row();
                          echo nl2br($oContent->contentDetails);

                          // echo "SEGMENTS";
                          // echo "SEGMENTS 1". $this->uri->segment(1);
                          // echo "SEGMENTS 2". $this->uri->segment(2);
                          // echo "SEGMENTS 3". $this->uri->segment(3);
                    ?>

                    </p>
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
        <h2 id="homeTag">
            <?php 
                    $oTagline = $tagline->row();
                    echo nl2br($oTagline->tagline);
              ?>
        </h2>
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    
  </div> <!--wrapper ends-->
    
    
    