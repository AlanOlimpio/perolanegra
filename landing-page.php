<?php 
/*
Template Name: Página Landing Page
*/
 ?>
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

		<?php while(have_posts()): ?>
			
			<?php the_post(); ?>

			
				

				<?php the_content() ?>					
							
					
		
		<?php endwhile; ?>
<script type="text/javascript">
	var	pn_ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
</script>
<?php wp_footer(); ?>
<style type="text/css">
<?php if(get_header_image()): ?>
    .bgimg-1 {
     	background-image: url("<?php header_image(); ?>");
    }
 <?php endif; ?>   
	.w3-light-grey {
		background-color: <?php echo get_theme_mod('pn_cor_primaria') ?>!important;
	}
	.w3-light-grey {
    	color: <?php echo get_theme_mod('pn_cor_contraste') ?>!important;
	}
	.w3-button:hover, .page-numbers.current {
		background-color:<?php echo get_theme_mod('pn_cor_hover') ?>!important;
	}
    <?php if (get_theme_mod('pn_img_bg_footer')): ?>
    	#pn_fundo_footer{background-image: url("<?php echo get_theme_mod('pn_img_bg_footer'); ?>");}
    <?php endif ?>
	#pn_fundo_footer{	background-color: <?php echo get_theme_mod('pn_bg_color_footer'); ?>;}
	#pn_fundo_footer{ color: <?php echo get_theme_mod('pn_color_footer'); ?>;}

	#pn_fundo_footer a { color: <?php echo get_theme_mod('pn_color_a_footer'); ?>;
    }
	#pn_fundo_footer a:hover { color: <?php echo get_theme_mod('pn_color_a_hover_footer'); ?>;
    }
</style>
	
</body>