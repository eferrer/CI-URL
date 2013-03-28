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
   
          $(function () {

              // Slideshow 1
              $("#slider1").responsiveSlides({
                maxwidth: 800,
                speed: 800
              });
          });
     
        //***************************************
            
            // TOGGLE  VIEW DIRECTION
            
            //***************************************
            
            // the disclaimer is hidden by default
            // when the "show" button is clicked, show the disclaimer
            // hide the disclaimer when "hide" button is clicked
            
            $('.details').hide();
            
            $('#toggleButton').click(function(){
                $('.details').toggle();
                
              if($('.details').is(':visible')){
                $(this).attr('value', 'Hide Details');
                }else{
                    $(this).attr('value', 'View Details');
                }
                
            }); //eof disclaimer toggle

}); // eof ready