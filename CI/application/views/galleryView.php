
    
      <section id="mainContainer" class="cf"><!--main container begins-->
            
            <section id="videoContainer"><!--video container begins-->
                    <section id="video">
                            <iframe title="YouTube video player" class="youtube-player" type="text/html" 
                              width="896" height="546" src="<?=base_url()?>public/images/full/1.jpg"
                              frameborder="1" allowFullScreen></iframe>
                    </section> 
              </section><!--video container ends-->
        
            <section><!--tagline begins-->
                    <h2 id="galleryTag">
                        <?php 
                              $oTagline = $tagline->row();
                              echo nl2br($oTagline->tagline);
                          ?>
                    </h2>
            </section><!--tagline ends-->
      
      </section><!--main container ends-->
    
</div> <!--wrapper ends-->
    
