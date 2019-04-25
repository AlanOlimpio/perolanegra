<?php 
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/blog.php';
require get_template_directory().'/include/customizer/cores.php';
require get_template_directory().'/include/customizer/smtp.php';
require get_template_directory().'/include/customizer/footer.php';
function pn_customize_register($wp_customize){

	pn_social_customizer($wp_customize);
	pn_blog_customizer($wp_customize);
	pn_cores_customizer($wp_customize);
	pn_colunas_widgets($wp_customize);
	pn_config_customizer_smtp($wp_customize);

}

