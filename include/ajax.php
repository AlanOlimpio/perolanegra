<?php 

function pn_load_more_posts(){
$offset = $_POST['offset'];

$wp_query = new Wp_Query(array(
	'post_type' => 'post',
	'offset' => $offset
));

while($wp_query->have_posts()){

	$wp_query->the_post();
	get_template_part('template_parts/post');
}

exit;

}

add_action('wp_ajax_pn_load_more_posts', 'pn_load_more_posts');
add_action('wp_ajax_nopriv_pn_load_more_posts', 'pn_load_more_posts');