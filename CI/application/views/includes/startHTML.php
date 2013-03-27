<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <title>Zumba with Christina | Home</title>
  
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
      
      <nav id="navBar"> <!--navigation bar begins-->
        <ul id="menu">

          <?php
          $aMenu = $menu->result_array();

          // echo "<pre>";
          //   print_r($aMenu);
          //   echo "</pre>";

          foreach ($aMenu as $key=>$aRow){
            echo '<li class="'.$aRow['fileName'].'"><a href="'.$aRow['fileName']. '/'. $aRow['pageID'].  '">'.$aRow['pageName'].'</a></li>';
          }

          ?>
          
        </ul>
      </nav> <!--navigation bar ends--> 
    </header><!--logo and menu container ends-->