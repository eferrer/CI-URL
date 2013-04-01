  <?php  
        $aMainHeading = $mainHeading->row_array();
        echo nl2br($aMainHeading['H1']);
        $mainHeading = $aMainHeading['H1'];
  ?>
    <section id="mainContainer" class="cf"><!--main container begins-->  
      
      <form>
        <label for="title">Main Heading</label>
        <input type="text" name="mainHeading" value="<?php echo set_value('mainHeading', $mainHeading);?>" />
      <!-- <h1 class="aboutHeading">ABOUT ME</h1> -->
    
      <section id="about"> <!--content begins-->    
        
        <label for="title">Content</label>
        <article class="info"><!--content paragraphs begin-->
          <textarea name="content" rows="5" cols="30">About content</textarea>
        </article><!--content paragraphs end-->
        
      </section> <!--content ends--> 
        
         
      <section id="rightContent" class="cf"> <!--right hand side content begins-->
        
        <section id="selfContainer">
          <article class="selfPhoto">
            <!--<img src="assets/images/zumbaLogo.jpg"/>-->
          </article>
        </section>

      </section> <!--right hand side content ends-->
      
      

      <section id="testimonials"><!--testimonials begin-->
        <label for="title">Subheading</label>
        <input type="text" name="mainHeading" value="Testimonials" />
        <ul>
          <li><textarea name="content" rows="5" cols="30">Testimonial 1</textarea><span class="reference"><input type="text" name="mainHeading" value="Christina 1" /></span></li>
          <li><textarea name="content" rows="5" cols="30">Testimonial 2</textarea><span class="reference"><input type="text" name="mainHeading" value="Christina 2" /></span></li>
          <li><textarea name="content" rows="5" cols="30">Testimonial 3</textarea><span class="reference"><input type="text" name="mainHeading" value="Christina 3" /></span></li>
        </ul>
        
        <div class="adminLinks">
          <p class="adminAdd"><a href="aboutAddTestimonial.php">+ Add New Testimonial</a></p>
                    
        </div>
      </section><!--testimonials ends-->


      <section><!--tagline begins-->
        <label for="tagline">Tagline</label>
        <input type="text" name="mainHeading" value="Its fun, its fitness,  its exercise in disguise!" />
        
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    <section id="promo" class="promoAbout"><!--promotional tag begins-->
          <textarea name="content" rows="5" cols="30">Promotional Statement</textarea>
    </section><!--promotional tag begins-->
    
  </div> <!--wrapper ends-->
  
  </form>
    
    