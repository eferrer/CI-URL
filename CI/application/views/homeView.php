<section id="danceTypes">
  <p><span class="zumbaIs">Zumba is ... </span>Merengue, Salsa. Cumbia, Reggaeton, Samba, Tango, Bachata, ChaCha, Mambo, Bellydance, Calypso, Lambada, Flamenco, Rumba, HipHop, Swing, Country, Bollywood, Bhangra ...</p>
</section>

<section class="mainContainer"><!--main container begins-->
    
    <section id="mainImage"><!-- slideshow begins -->
        <!-- <ul class="rslides" id="slider1">
               <li><img src="base_url()public/images/full/1.jpg" alt=""></li>
               <li><img src="base_url()public/images/full/2.jpg" alt=""></li>
               <li><img src="base_url()public/images/full/3.jpg" alt=""></li>
       </ul> -->
    </section>   <!-- slideshow ends -->   
      
    <h1 class="homeHeading"><!-- What is ZUMBA Fitness? -->
          <?php 
                $aPageParts = $pageParts->row_array();
                echo nl2br($aPageParts['H1']);
          ?>
    </h1>
      
    <section id="content"> <!--content begins-->    
      
      <article class="info"><!--content paragraphs begin-->
        <p>
        <?php 
          //$aMainHeading = $content->row_array();
          //print_r($aContent);

          echo nl2br($aPageParts['contentDetails']);

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
        <section class="viewClassText"><a href="<?=base_url()?>classtimes">View Classes</a></section>
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
          $aTagline = $tagline->row_array();
          echo nl2br($aTagline['tagline']);
        ?>
      </h2>
    </section><!--tagline ends-->
      
  </section><!--main container ends-->
    
  </div> <!--wrapper ends-->
    
    
    