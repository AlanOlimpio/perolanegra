<div class="w3-col w3-container m6 post-equal-height-col"> 
	<div class="w3-card">
		<article>
			<div class="pn_posts">
				<?php if(get_post_format() == 'video'): ?>
					<?php 
						$content = apply_filters('the_content', get_the_content());
						$video = get_media_embedded_in_content($content, 
							array('iframe', 'embed', 'object', 'video')
						);
						if($video) {
							?>
							<div class="post_miniatura">
							<?php  echo $video[0];?>
							</div>
							<?php 
						}
					 ?>
				<?php elseif(get_post_format() == 'audio'): ?>
					<?php 
						$content = apply_filters('the_content', get_the_content());
						$audio = get_media_embedded_in_content($content, 
							array('iframe', 'audio')
						);
						if($audio) {
							?>
							<div class="post_miniatura">
							<?php  echo $audio[0];?>
							</div>
							<?php 
						}
					 ?>

		        <?php elseif(has_post_thumbnail()): ?>
		        	<div class="post_miniatura">
						<a href="<?php  the_permalink(); ?>" class="post_thumbnail">
							<?php the_post_thumbnail('full', array('class' => 'post_miniatura-img')); ?>
						</a>
					</div>
						
				<?php endif; ?>
		<div class="w3-container aligner">
		<h3><a href="<?php  the_permalink();?>"><?php the_title(); ?></a></h3>
		<p class="w3-opacity"><?php echo get_the_date(); ?>
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> <?php the_category(', ') ?></p>
		<p><?php the_excerpt() ?></p>
		<?php if (get_theme_mod('pn_comentarios_hidden') == 'yes'): ?>
		<p><?php comments_number('0 comentários', '1 comentário', '% comentários'); ?></p>
	<?php endif; ?>
		<p style="margin-bottom: 60px;"></p>
		<p><a href="<?php the_permalink(); ?>" class="w3-button w3-light-grey w3-block aligner-item-bottom"><i class="fa fa-angle-right" aria-hidden="true"></i> Leia Mais</a></p></div>
		</div>
	  </article>
	</div>
</div>
