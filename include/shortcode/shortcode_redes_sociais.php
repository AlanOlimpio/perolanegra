<?php 
	
	function shortcode_rede_social(){		

	   	if(get_theme_mod('pn_facebook')): 
		   	$pn_var_facebook_link = get_theme_mod('pn_facebook');
		   	$pn_var_facebook = "<a href='$pn_var_facebook_link' target='_blank'>
		   	<i class='fa fa-facebook-official w3-hover-opacity'></i></a>"; 
	    endif; 
	    

	    if(get_theme_mod('pn_instagram')): 
		   	$pn_instagram_link = get_theme_mod('pn_instagram');
		   	$pn_var_instagram = "<a href='$pn_instagram_link' target='_blank'>
	        <i class='fa fa-instagram w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	   	if(get_theme_mod('pn_snapchat')): 
		   	$pn_snapchat_link = get_theme_mod('pn_snapchat');
		   	$pn_var_snapchat = "<a href='$pn_snapchat_link' target='_blank'>
	        <i class='fa fa-snapchat w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	   	if(get_theme_mod('pn_pinterest')): 
		   	$pn_pinterest_link = get_theme_mod('pn_pinterest');
		   	$pn_var_pinterest = "<a href='$pn_pinterest_link' target='_blank'>
	        <i class='fa fa-pinterest-p w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	   	 if(get_theme_mod('pn_twitter')): 
		   	$pn_twitter_link = get_theme_mod('pn_twitter');
		   	$pn_var_twitter = "<a href='$pn_twitter_link' target='_blank'>
	        <i class='fa fa-twitter w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	   	 if(get_theme_mod('pn_linkedin')): 
		   	$pn_linkedin_link = get_theme_mod('pn_linkedin');
		   	$pn_var_linkedin = "<a href='$pn_linkedin_link' target='_blank'>
	        <i class='fa fa-linkedin w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	   	if(get_theme_mod('pn_youtube')): 
		   	$pn_youtube_link = get_theme_mod('pn_youtube');
		   	$pn_var_youtube = "<a href='$pn_youtube_link' target='_blank'>
	        <i class='fa fa-youtube w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	   	if(get_theme_mod('pn_googleplus')): 
		   	$pn_googleplus_link = get_theme_mod('pn_googleplus');
		   	$pn_var_googleplus = "<a href='$pn_googleplus_link' target='_blank'>
	        <i class='fa fa-google-plus w3-hover-opacity'></i>
	      </a>"; 
	   	endif; 

	  	return  $pn_var_facebook . $pn_var_instagram . $pn_var_snapchat . $pn_var_pinterest . $pn_var_twitter . $pn_var_linkedin . $pn_var_youtube. $pn_var_googleplus;
	}

?>