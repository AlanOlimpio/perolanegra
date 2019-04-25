<?php get_header(); ?>
	<div class="w3-container w3-light-grey">
 		<h1><?php echo single_post_title(); ?></h1>
	</div>
<div class="w3-row" style="margin-top: 32px;">
	<div class="w3-col w3-container m9 m6 ">
		<div class="pn_post_content post-equal-height">
			<?php if(have_posts()): ?>

			<?php while(have_posts()): ?>

			<?php the_post(); ?>

			<?php get_template_part('template_parts/post'); ?>

			<?php endwhile; ?>

			<?php endif; ?>
		</div>
<div class="pn_paginacao">
	<?php if(get_theme_mod('pn_tipos_de_paginacao') == 'value1'): ?>
	    	
	<div class="pagina_anterior"><?php previous_posts_link('Posts Anteriores' ); ?></div>
	<div class="pagina_proxima"><?php next_posts_link('Próximos Posts'); ?></div>

	    
	<?php elseif(get_theme_mod('pn_tipos_de_paginacao') == 'value2'): ?>
		<div class="w3-show-inline-block">
			<div class="w3-bar w3-border">
				<?php 
					global $wp_query;
					echo paginate_links(array(
						'current' => max(1, get_query_var('paged')),
						'total' => $wp_query->max_num_pages,
						'show_all' => true,
						'end_size' => 1,
						'mid_size' => 1,
						'prev_next' => true,
						'prev_text' => '<span class="w3-bar-item w3-button">&laquo;</span>',
						'next_text' => '<span class="w3-bar-item w3-button">&raquo;</span>',
						'before_page_number' => '<span class="w3-bar-item w3-button">',
						'after_page_number' => '</span>'
					));
				?>
			</div>
		</div> 
 	
 	<?php elseif(get_theme_mod('pn_tipos_de_paginacao') == 'value3'): ?>
 		<button class="w3-button w3-light-grey load_more_buttom" style="display: block;margin: 0 auto;">Carregar Mais Posts</button>

	<?php endif ?>

	
</div>
</div>

<div class="w3-col w3-container m3 l3 ">
<?php get_sidebar(); ?> 
</div>

<div style="clear: both;"></div>
</div>

 <?php get_footer() ?>

