
    
      <section class="mainContainer" class="cf"><!--main container begins-->
            
            <section id="videoContainer"><!--video container begins-->
                    <section id="video">
                            <!-- <iframe title="YouTube video player" class="youtube-player" type="text/html" 
                              width="896" height="546" src="<?=base_url()?>public/images/full/1.jpg"
                              frameborder="1" allowFullScreen></iframe> -->
                              
                              <iframe src="http://player.vimeo.com/video/63044882" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <!-- <p><a href="http://vimeo.com/63044882">City Dreams</a> from <a href="http://vimeo.com/eileenferrer">Eileen Ferrer</a> on <a href="http://vimeo.com">Vimeo</a>.</p> -->
                    </section> 
              </section><!--video container ends-->
        
            <section><!--tagline begins-->
                    <h2 id="videoTag">
                        <?php 
                              $oTagline = $tagline->row();
                              echo nl2br($oTagline->tagline);
                          ?>
                    </h2>
            </section><!--tagline ends-->
      
      </section><!--main container ends-->
    
</div> <!--wrapper ends-->
    
