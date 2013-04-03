 $(document).ready(function(){
           
            
            //***************************************************************
            
            // For mobile and tablet, move the tag line into the container box
            
            //****************************************************************
            
            var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                    clearTimeout (timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            $(function() {

                var pause = 100; // will only process code within delay(function() { ... }) every 100ms.

                $(window).resize(function() {

                    delay(function() {

                        var width = $(window).width();

                        if( width >= 801 && width <= 959 ) {
                            // code for tablet view
                        } else if( width >= 480 && width <= 800 ) {
                            // code for mobile landscape
                            
                            // $("h2").insertAfter("#content p:last-child");
                            $("h2").insertAfter(".zumbaCom");
                            $("h2").insertAfter("#about .promo");
                            $("h2").insertAfter("#studentInfo p:last-child");
                            $("h2").insertAfter(".needs li:last-child");
                            $("h2").insertAfter("#video");
			    $(".text").hide();
                            
                        } else if( width <= 479 ) {
                            // code for mobile portrait
                            
                            $("h2").insertAfter("#content p:last-child");
                            $("h2").insertAfter("#about .promo");
                            $("h2").insertAfter("#studentInfo p:last-child");
                            $("h2").insertAfter(".needs li:last-child");
                            $("h2").insertAfter("#video");
                            $(".text").hide();
                        }

                    }, pause );

                });

                $(window).resize();

            });
            
            //***************************************
            
            // SLIDESHOW
            //Source: http://http://responsive-slides.viljamis.com/ v1.53 by @viljamis
            
            //***************************************
   
          // $(function () {

          //     // Slideshow 1
          //     $("#slider1").responsiveSlides({
          //       maxwidth: 800,
          //       speed: 800
          //     });
          // });
     
        //***************************************
            
            // TOGGLE  VIEW DIRECTION
            
            //***************************************
            
            // the information is hidden by default
            // when the "show" button is clicked, show the details
            // hide the details when "hide" button is clicked
            
            // $('.details').hide();
            
            // $('#toggleButton').click(function(){
            //     $('.details').toggle();
                
            //   if($('.details').is(':visible')){
            //     $(this).attr('value', 'Hide Details');
            //     }else{
            //         $(this).attr('value', 'View Details');
            //     }
                
            // }); //eof details toggle

            //******************************************

            // FORM VALIDATION

            //******************************************
            
            //=========================FORM VALIDATION============================
      
    jQuery("#contactForm").validate({
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
            



}); // eof ready