<?php get_header(); ?>
<div class="w3-row">
	<div class="w3-container w3-light-grey">
 					 <h1 class="w3-text-grey" ><?php the_title(); ?></h1>
	</div>
	<div class="w3-col w3-container m9 m6 post-equal-height" style="padding-top:20px">
	<?php if(have_posts()): ?>
		
		<?php while(have_posts()): ?>
			
			<?php the_post(); ?>

			<article>
				
				<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail('full',['class' => 'w3-card-4','style' => 'max-width:100%;height: auto;']); ?>
				<?php endif; ?>
				
				

				<p>
					<?php echo get_the_date(); ?>
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
					<?php the_category(', ') ?>
				</p>

				<div>
				<?php the_content() ?>
					
				</div>
				<?php if (get_theme_mod('pn_comentarios_hidden') == 'yes'): ?>
				<p>
				<?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> 
				</p>
			<?php endif; ?>

				<hr/>
				<?php if (get_theme_mod('pn_posts_relaciondos') == 'yes'): ?>
				<h2>Posts Relacionados</h2>
				
				<?php 
					$pn_categorias = get_the_category();
					$pn_query = new WP_Query(array(

						'posts_per_page' => 3,
						'posts__not_in' => array($post->ID),
						'cat' => $pn_categorias[0]->tern_id
					));

					if ($pn_query->have_posts()) {
						while ($pn_query->have_posts()) {
							$pn_query->the_post();

							get_template_part('template_parts/related_post');
						}
						wp_reset_postdata();
					}

				 ?>	
				 <div style="clear: both;"></div>
				<hr/>
				<?php endif; ?>
				<?php if (get_theme_mod('pn_comentarios_hidden') == 'yes'): ?>
				<?php 

				if (comments_open()) {
					comments_template();
				}

				 ?>
				<?php endif; ?>
			</article>
		
		<?php endwhile; ?>
	
	<?php endif; ?>

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
<div class="w3-col w3-container m3 l3" style="padding-top:20px">
<?php get_sidebar(); ?>
</div>
</div>
<div style="clear: both;"></div>
<?php get_footer() ?>

