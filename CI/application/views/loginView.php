<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

   <title>Zumba with Christina | Admin Login </title>
  
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="<?=base_url()?>public/css/_main.css">
   <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
   <script src="<?=base_url()?>public/js/modernizr-2.6.2.min.js"></script> <!-- * -->
</head>
<body>

   <div id="wrapper"> <!-- wrapper begins--> 
      <header id="headerContainer"> <!--logo and menu container begins-->
         <div id="logo"><!-- logo begins -->
           <a href="home.html">logo</a>
         </div><!--logo ends-->     
      </header><!--logo and menu container ends-->
   
   
      <section class="mainContainer"><!--main container begins-->
          <h1>ADMIN LOGIN </h1>
          <section class="contentAdmin">
         <?php //echo validation_errors(); ?>
      
            <?php 
            echo form_open('admin/login_validation'); 
            echo validation_errors();
            ?>
            
               <h5>Username</h5>
               <input type="text" name="username" id="username" value="" size="50"  autofocus="autofocus"/>
               
               <h5>Password</h5>
               <input type="password" name="password" id="password" value="" size="50" />
               
               <p class="submit"><input type="submit" name="adminLogin" id="adminLogin" value="Login" /></p>
         
            </form>
         </section>
      </section>
   </div><!--wrapper ends-->

   <footer><!--footer begins-->
           
      <article class="badges">
         <ul >
           <li class="zinNetwork"><p>zinnetwork</p></li>
           <li class="zumbatomic"><p>zumbatomic</p></li>
         </ul>
      </article>
           
      <article class="social">
         <ul >
           <li class="connect"><a  href="http://www.facebook.com">connect<!-- <span class="fontAwesome">&#xf082;</span>&nbsp;&nbsp; --></a></li>
           <li class="contactUs"><a href="<?=base_url()?>contact">contact<!-- <span class="fontAwesome">&#xf0e0;</span>&nbsp;&nbsp; --></a></li>
         </ul>
      </article>
       
      <section id="copyright"> <!-- bottom footer section begins   -->
         <p class="siteLink">Site by Eileen Ferrer. &copy;2013.</p>
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
  
</body>
</html>



