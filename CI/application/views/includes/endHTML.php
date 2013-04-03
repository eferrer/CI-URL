<footer><!--footer begins-->
        
        <article class="badges">
        <ul >
          <li class="zinNetwork"><p>zinnetwork</p></li>
          <li class="zumbatomic"><p>zumbatomic</p></li>
          <!-- <li class="zumbaButton">zumbabutton</li>
          <li class="zumbatomicButton">zumbatomicbutton</li> -->
        </ul>
        </article>
        
        <article class="social">
        <ul >
          <li class="connect"><a  href="connect.html">connect<!-- <span class="fontAwesome">&#xf082;</span>&nbsp;&nbsp; --></a></li>
          <li class="contactUs"><a href="contact">contact<!-- <span class="fontAwesome">&#xf0e0;</span>&nbsp;&nbsp; --></a></li>
        </ul>
        </article>
          
      </section><!--social and contact links ends-->
    
     <section id="copyright"> <!-- bottom footer section begins   -->
      <p>Site by Eileen Ferrer. &copy;2013.</p>
    </section><!--bottom footer section ends-->
  </footer><!--footer ends-->



<!-- Grab Google CDN's jQuery. fall back to another if necessary-->
<!--http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/ -->  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="http://webconsultant.co.nz/jslibs/jquery-1.8.3.min.js"><\/script>')</script>

<!-- <script src="javascripts/responsiveslides.js"></script>
<script src="javascripts/responsiveslides.min.js"></script> -->

<!-- Javascripts for form validation -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <script>window.jQuery || document.write('<script src="http://natcoll.net.nz/JS-LIBS/jquery-validation.1.9.js"><\/script>')</script>
  
<script src="<?=base_url()?>public/js/main.js"></script> 



<script>
    // This is embedded for DEMO SCRIPT ONLY. 
     // make sure the document is ready before starting to do anything.  Place all your jquery calls inside this function
        $(document).ready(function(){
            // Your code goes here
        
         //=========================FORM VALIDATION============================
      
    jQuery("#form").validate({
            onfocusout: function(element) { $(element).valid();

        //=========== Source: http://net.tutsplus.com/tutorials/other/8-regular-expressions-you-should-know AND
        //============Source: http://stackoverflow.com/questions/280759/jquery-validate-how-to-add-a-rule-for-regular-expression-validation
 
        $.validator.addMethod("email", function(value, element) {  
        return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);  
        }, "Please enter a valid email address");
        
      }

        // =========================================================

        
        , onkeyup: false

       //starts ===========Source: http://stackoverflow.com/questions/4115372/jquery-validate-plugin-adding-a-custom-validator-to-accept-letters-only?rq=1

        , rules: {
          firstname: {
            required: true,
            minlength: 2
          },
          
          lastname: {
            required: true,
            minlength: 2
          },
          
          email: {
            required: true,
            equalTo: "#email"
          }
      } //rules end
        
        , messages: {
          firstname: {
            required: "Please enter your first name",
            minlength: "Your name must consist of at least 2 characters"
          },
          
          lastname: {
            required: "Please enter your last name",
            minlength: "Your name must consist of at least 2 characters"
          },

          email: {
            required: "Please enter an email address so we can contact you",
            equalTo: "#email"
          }
        }
        
        , errorClass: "invalid"
        , validClass: 'success',
      
        success: function(){
        
      }
    }); // ends validate
        
        
        
        });  // put this closing bracket combo right beside the closing script tag.    
</script>  
</body>
</html>



