<?php 

function pn_colunas_widgets ( $wp_customize) {

// Settings
$wp_customize->add_setting('pn_colunas_widgets', array('default' => 'value1'));
$wp_customize->add_setting('pn_img_bg_footer', array('default' => ''));
$wp_customize->add_setting('pn_bg_color_footer', array('default'=>'#000000'));
$wp_customize->add_setting('pn_color_footer', array('default'=>'#ffffff'));
$wp_customize->add_setting('pn_color_a_footer', array('default'=>'#ffffff'));
$wp_customize->add_setting('pn_color_a_hover_footer', array('default'=>'#ffffff'));

//Sections

$wp_customize->add_section('pn_colunas_widgets', array (
	'title' => 'Opções do Footer',
	'priority' => 5,
	'description' => __( 'Numeros de colunas Widgets ', 'perolanegra' )

));

// Controllers


$wp_customize->add_control(

	new WP_Customize_Control(
		$wp_customize,
		'pn_colunas_widgets',
		array(
			'label' => 'Colunas Widgets.',
			'section' => 'pn_colunas_widgets',
			'settings' => 'pn_colunas_widgets',
			'type' => 'select',
			'choices' =>  array(
				'value1' => __( '1 col 100%' ),
    			'value2' => __( '2 col 50%' ),
    			'value3' => __( '3 col 33.3%' ),
    			'value4' => __( '4 col 25%' )
    			)
		 )
     ));

	$wp_customize->add_control( 
	new WP_Customize_Upload_Control( 
	$wp_customize, 
	'pn_img_bg_footer', 
	array(
		'label'      => __( 'Background imagem', 'perolanegra' ),
		'section'    => 'pn_colunas_widgets',
		'settings'   => 'pn_img_bg_footer',
	) ) 
);


	$wp_customize->add_control(
	new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_bg_color_footer',
		array(
			'label' =>__('Cor Background', 'perolanegra' ),
			'section' =>'pn_colunas_widgets',
			'secttings'=>'pn_bg_color_footer',
			)

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_color_footer',
		array(
			'label' =>__('Cor texto', 'perolanegra' ),
			'section' =>'pn_colunas_widgets',
			'secttings'=>'pn_color_footer',
			)

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_color_a_footer',
		array(
			'label' =>__('Cor link', 'perolanegra' ),
			'section' =>'pn_colunas_widgets',
			'secttings'=>'pn_color_a_footer',
			)

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_color_a_hover_footer',
		array(
			'label' =>__('Cor link hover', 'perolanegra' ),
			'section' =>'pn_colunas_widgets',
			'secttings'=>'pn_color_a_hover_footer',
			)

		)
	);

}