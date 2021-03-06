<?php 

if (post_password_required()) {
	return;
}

if(have_comments()){
	foreach ($comments as $comment) {
		?>
		<div class="comentario">
			<div class="comentario_foto">
				<?php echo get_avatar($comment, 60); ?>
			</div>
			<div class="comentario_area">
				<strong><?php comment_author(); ?></strong> - <?php comment_date(); ?> <br/>

				<?php  comment_text(); ?>
			</div>
		</div>

		<?php
	}
	the_comments_pagination();
}



comment_form(array(
		'comment_field' => '<textarea name="comment" placeholder="Digite um comentário"></textarea><br/>',
		'fields' => array(
			'author' =>'<input type="text" name="author"  placeholder="Digite seu nome"/><br/>' ,
			'email' =>'<input type="email" name="email" placeholder="Digite seu e-mail" />' ,
			//'url' =>'<input type="text" name="url" />' ,
			 ),
		'class_submit' => 'btn_comentario',
		'label_submit' => 'Envie seu comentário',
		'title_reply'  => 'Deixe um comentário!'
));
 ?>