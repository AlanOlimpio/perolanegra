<?php 

function pn_blog_customizer ( $wp_customize) {

// Settings
$wp_customize->add_setting('pn_comentarios_hidden', array('default' => ''));
$wp_customize->add_setting('pn_posts_relaciondos', array('default' => ''));
$wp_customize->add_setting('pn_tipos_de_paginacao', array('default' => ''));


//Sections

$wp_customize->add_section('pn_opcoes_do_blog', array (
	'title' => 'Opções do Blog',
	'priority' => 2,
	'description' => __( 'Posts em grid, para utilizar copie e Shortecode e colole no lugar desejado.<br/> Shortecode: [pn_post_grid] ', 'perolanegra' )

));

// Controllers

$wp_customize->add_control(

	new WP_Customize_Control(
		$wp_customize,
		'pn_comentarios_hidden',
		array(
			'label' => 'Mostrar Comentários.',
			'section' => 'pn_opcoes_do_blog',
			'settings' => 'pn_comentarios_hidden',
			'type' => 'checkbox',
			'choices' =>  array(
				'yes' => 'Sim'
			)
		 )
     )

 );



$wp_customize->add_control(

	new WP_Customize_Control(
		$wp_customize,
		'pn_posts_relaciondos',
		array(
			'label' => 'Mostrar Posts Relacionados.',
			'section' => 'pn_opcoes_do_blog',
			'settings' => 'pn_posts_relaciondos',
			'type' => 'checkbox',
			'choices' =>  array(
				'yes' => 'Sim'
			)
		 )
     )

 );
$wp_customize->add_control(

	new WP_Customize_Control(
		$wp_customize,
		'pn_tipos_de_paginacao',
		array(
			'label' => 'Tipos de Páginação.',
			'section' => 'pn_opcoes_do_blog',
			'settings' => 'pn_tipos_de_paginacao',
			'type' => 'select',
			'choices' =>  array(
				'value1' => __( 'Padrão do Wordpress' ),
    			'value2' => __( 'Numérica' ),
    			'value3' => __( 'Ajax com o Botão' )
    			)
		 )
     )

 );

}

