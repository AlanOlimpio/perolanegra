<?php 

function pn_cores_customizer($wp_customize){

	// Settings
	$wp_customize->add_setting('pn_cor_primaria', array('default'=>'#f1f1f1'));
	$wp_customize->add_setting('pn_cor_contraste', array('default'=>'#000000'));
	$wp_customize->add_setting('pn_cor_hover', array('default'=>'#cccccc'));
		
	// Sections
	$wp_customize->add_section('pn_cores_section', array(
		'title' => __('Cores do Tema'),
		'priority' => '3',
	));

	// Controllers
	$wp_customize->add_control(
	new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_cor_primaria',
		array(
			'label' =>__('Cor Primária'),
			'section' =>'pn_cores_section',
			'secttings'=>'pn_cor_primaria',
			 )

		)
	);
	
		$wp_customize->add_control(
		new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_cor_contraste',
		array(
			'label' =>__('Cor Contraste'),
			'section' =>'pn_cores_section',
			'secttings'=>'pn_cor_contraste',
			 )

		)
	);

	$wp_customize->add_control(
	new Wp_Customize_Color_Control(
		$wp_customize,
		'pn_cor_hover',
		array(
			'label' =>__('Cor hover'),
			'section' =>'pn_cores_section',
			'secttings'=>'pn_cor_hover',
			)

		)
	);
	



}

