
    <section id="mainContainer" class="cf"><!--class schedule container begins-->
    
      <form>
        <input type="text" name="mainHeading" value="CLASS SCHEDULE" />
          <!-- <h1 class="classHeading">CLASS SCHEDULE</h1> -->

            <section id="classSchedule"> <!--class schedule content begins-->    
                  
                  <section class="classDetails"><!--class details begins-->
                          <ul id="classTimes">
                            <li class="day"><input type="text" name="day" value="Monday" /></li>
                            <li class="time"><input type="text" name="time" value="7.30 - 8.30PM" /></li>
                            <li class="place"><input type="text" name="place" value="RANGITOTO COLLEGE" /></li>
                            <li class="address"><input type="text" name="address" value="564 East Coast Road, Mairangi Bay" /></li>
                            <li class="address"><input type="text" name="details" value="Entrance A, turn left etc" /></li>
                          </ul>
                          
                    </section><!--class details ends-->

                        <section class="directions"><!--location details begins-->
                              <div class="mapHolder">Google Map container</div>
                              <!-- <article class="details">Location Details</article>
                              <input type="button" id="toggleButton" value="View Details"/> -->
                              <input type="button" id="deleteButton" value="Delete Class"/>
                        </section><!--location details ends-->
                

                <section class="classDetails"><!--class details begins-->
                        <ul id="classTimes">
                          <li class="day"><input type="text" name="day" value="Tuesday" /></li>
                          <li class="time"><input type="text" name="time" value="9.30 - 10.30 AM" /></li>
                          <li class="place"><input type="text" name="place" value="TORBAY COMMUNITY HALL" /></li>
                          <li class="address"><input type="text" name="address" value="35 Watea Rd, Torbay" /></li>  
                          <li class="address"><input type="text" name="details" value="Entrance A, turn left etc" /></li>
                        </ul>
                        
                      </section><!--class details ends-->

                        <section class="directions"><!--location details begins-->
                          <div class="mapHolder">Google Map container</div>
                          <!-- <article class="details">Location Details</article> -->
                        <!-- <input type="button" id="toggleButton" value="View Details"/> -->
                        <input type="button" id="deleteButton" value="Delete Class"/>
                  </section><!--location details ends-->
                
                  <div class="adminLinks">
          <p class="adminAdd"><a href="classesAddNew.html">+ Add New Class</a></p>
                    
        </div>
            </section> <!--class schedule content ends--> 
        
      </section><!--class schedule container ends-->


      <section id="mainContainer" class="cf"><!--price schedule container begins-->
          
          <input type="text" name="mainHeading" value="PRICE SCHEDULE" />
          <!-- <h1 class="classHeading">PRICE SCHEDULE</h1> -->
            
            <section id="priceSchedule"> <!--price schedule content begins-->    
              
              <article class="classPrice">
                <h3><input type="text" name="priceType" value="CASUAL CLASS" /></h3><p><input type="text" name="day" value="$10 per class" /></p>
                <h3><input type="text" name="priceType" value="CONCESSION CARDS:" /></h3><p><input type="text" name="day" value="$40 for 5 classes$75 for 10 classes" /><br/></p>
              
                <p><input type="text" name="details" value="Cards can be used only for the Tuesday, Wednesday, and Friday classes. There is no expiry date on concession cards. " /></p>
              </article>

            </section> <!--price schedule content ends--> 
        
      </section><!--price schedule container ends-->
      
      <section id="promo" class="promoClasses"><!--promotional tag begins-->
          <textarea name="content" rows="5" cols="30">Promotional Statement</textarea>
    </section><!--promotional tag begins-->
      
      <section id="mainContainer" class="cf"><!--class info container begins-->
        
        <input type="text" name="mainHeading" value="INFORMATION FOR STUDENTS" />
        <!-- <h1 class="classHeading">INFORMATION FOR STUDENTS</h1> -->
        
        <section id="studentInfo"> <!--student information content begins-->    
          
          <input type="text" name="mainHeading" value="What to Expect" />
          <!-- <h3>WHAT TO EXPECT</h3> -->
          <article class="studentInfo"><!--content paragraphs begin-->
            <p><textarea name="content" rows="5" cols="30">What to Expect content</textarea></p>
          </article><!--content paragraphs end-->
          
          <input type="text" name="mainHeading" value="What you will need" />
          <!-- <h3>WHAT YOU WILL NEED</h3> -->
          <ul class="needs">
            <li><textarea name="content" rows="5" cols="30">Plenty of water</textarea><input type="button" id="deleteButton" value="Delete Item"/></li>
            <li><textarea name="content" rows="5" cols="30">A towel</textarea><input type="button" id="deleteButton" value="Delete Item"/></li>
            <li><textarea name="content" rows="5" cols="30">Proper footwear. Ideally, non-tread shes for easier pivoting and movement</textarea><input type="button" id="deleteButton" value="Delete Item"/></li>
          </ul>
          <div class="adminLinks">
          <p class="adminAdd"><a href="needsAddNew.html">+ Add New Item</a></p>
                    
        </div>
        </section> <!--student information content ends--> 

        <section><!--tagline begins-->
          <input type="text" name="mainHeading" value="Don’t wait any longer - Party Yourself into Shape today!" />
          <!-- <h2 id="classesTag">Don’t wait any longer - Party Yourself into Shape today!</h2> -->
        </section><!--tagline ends-->
      
      </section><!--class info container ends-->
    
  </div> <!--wrapper ends-->
    
  </form>
    
  <footer><!--footer begins-->
    <section id="footerLinks"><!--social and contact links begins-->
      <section class="zin"><!--zin network image begins-->
          <article class="zinNetwork">
            <!-- <img src="assets/images/full/photo3.jpg"/> -->
          </article>
          <p class="zinDate">since June 2011</p>
        </section><!--zin network image ends-->
        
        <section class="atomic"><!--zumbatomic image begins-->
          <article class="zumbatomic">
            <!-- <img src="assets/images/full/photo3.jpg"/> -->
          </article>
        </section><!--zumbatomic image ends-->
        
        <article class="social">
        <ul >
          <li class="connect"><a  href="connect.html"><span class="fontAwesome">&#xf082;</span>&nbsp;&nbsp;<span class="text">Connect with Us</span></a></li>
          <li class="contactUs"><a href="contactUs.html"><span class="fontAwesome">&#xf0e0;</span>&nbsp;&nbsp;<span class="text">Contact Us</span></a></li>
        </ul>
        <article>
    </section><!--social and contact links ends-->
    
    <section id="copyright"> <!-- bottom footer section begins   -->
      <p>Site by Eileen Ferrer. &copy;2013.</p>
    </section><!--bottom footer section ends-->
  </footer><!--footer ends-->



<!-- Grab Google CDN's jQuery. fall back to another if necessary-->
<!--http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/ -->  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="http://webconsultant.co.nz/jslibs/jquery-1.8.3.min.js"><\/script>')</script>

<script src="javascripts/responsiveslides.js"></script>
<script src="javascripts/responsiveslides.min.js"></script>

<script src="javascripts/main.js"></script> 

<script src="javascripts/jquery.easing.1.3.js" type="text/javascript"></script>  
<script src="javascripts/animated-menu.js" type="text/javascript"></script>

<script>
    // This is embedded for DEMO SCRIPT ONLY. 
     // make sure the document is ready before starting to do anything.  Place all your jquery calls inside this function
        $(document).ready(function(){
            // Your code goes here
        
        });  // put this closing bracket combo right beside the closing script tag.    
</script>  
</body>
</html>
