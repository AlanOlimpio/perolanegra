<footer id="pn_fundo_footer" class="w3-padding-64" >
  <?php 

  		require get_template_directory().'/include/widgets/widgets.php';

  ?>
<script type="text/javascript">
	var	pn_ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
</script>
<?php wp_footer(); ?>
</footer>
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
</html>