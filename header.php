<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript,Wordpress,PHP">
    <meta name="author" content="Alan Olimpio">
 	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head();?>
	
</head>
<body id="pn_mainContent" <?php body_class();?>>

	<!-- Navbar (sit on top) -->
<div id="up-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
  	<?php 
  	if (!has_custom_logo()) {
    ?>

    <a href="<?php echo home_url('/') ?>" class="w3-bar-item w3-button w3-wide"wcwd><?php bloginfo('name'); ?></a>

    <?php 

  	}else{
  		the_custom_logo();
  	}

  	?> 	 
   
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
		<?php if (has_nav_menu('primary')){
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => 'div',
				'container_class' => 'w3-right w3-hide-small',
				'fallback_cb' => false,
				
				

			));
		} ?>

   </div>

	<!-- Hide right-floated links on small screens and replace them with a menu icon -->

    
    <span class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" style="cursor:pointer" onclick="pn_openNav3();pn_openOffcanvas()"><i class="fa fa-bars"></i></span>
	</div>
</div>


<nav id="mobileSidenav" class="sidenav">
<div id="pn_CanvasNav" class="overlay3" onclick="pn_closeOffcanvas()" style="width: 0%; opacity: 0;"></div>
<div id="pn_Offcanvas" class="offcanvas" >	
  <a href="javascript:void(0)" class="closebtn w3-button" onclick="pn_closeOffcanvas()"><i class="fa fa-times" aria-hidden="true"></i></a>
  
	<?php if (has_nav_menu('menu_mobile')){
			wp_nav_menu(array(
				'theme_location' => 'menu_mobile',
				'fallback_cb' => false
			));
		}   


  elseif (has_nav_menu('primary')){
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'fallback_cb' => false
				

			));
		} ?>
	</div>
</nav>


