<?php 

function pn_social_customizer($wp_customize){

	// Settings
	$wp_customize->add_setting('pn_facebook', array('default'=>''));
	$wp_customize->add_setting('pn_instagram', array('default'=>''));
	$wp_customize->add_setting('pn_snapchat', array('default'=>''));
	$wp_customize->add_setting('pn_pinterest', array('default'=>''));
	$wp_customize->add_setting('pn_twitter', array('default'=>''));
	$wp_customize->add_setting('pn_linkedin', array('default'=>''));
	$wp_customize->add_setting('pn_googleplus', array('default'=>''));
	$wp_customize->add_setting('pn_youtube', array('default'=>''));

	// Sections
	$wp_customize->add_section('pn_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => '1',
		'description' => __( 'Links das Mídias Sociais, para utilizar copie e Shortecode e colole no lugar desejado.<br/> Shortecode: [redes_sociais] ', 'perolanegra' )

	));

	// Controllers
	$wp_customize->add_control(
	new Wp_Customize_Control(
		$wp_customize,
		'pn_facebook',
		array(
			'label' =>'Link do Facebook',
			'section' =>'pn_social_section',
			'secttings'=>'pn_facebook',
			'type'=>'text'
			 )

		)
	);
		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_instagram',
		array(
			'label' =>'Link do Instagram',
			'section' =>'pn_social_section',
			'secttings'=>'pn_instagram',
			'type'=>'text'
			 )

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_snapchat',
		array(
			'label' =>'Link do snapchat',
			'section' =>'pn_social_section',
			'secttings'=>'pn_snapchat',
			'type'=>'text'
			 )

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_pinterest',
		array(
			'label' =>'Link do Pinterest',
			'section' =>'pn_social_section',
			'secttings'=>'pn_pinterest',
			'type'=>'text'
			 )

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_twitter',
		array(
			'label' =>'Link do Twitter',
			'section' =>'pn_social_section',
			'secttings'=>'pn_twitter',
			'type'=>'text'
			 )

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_linkedin',
		array(
			'label' =>'Link do Linkedin',
			'section' =>'pn_social_section',
			'secttings'=>'pn_linkedin',
			'type'=>'text'
			 )

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_googleplus',
		array(
			'label' =>'Link do Google Plus',
			'section' =>'pn_social_section',
			'secttings'=>'pn_googleplus',
			'type'=>'text'
			 )

		)
	);

		$wp_customize->add_control(
		new Wp_Customize_Control(
		$wp_customize,
		'pn_youtube',
		array(
			'label' =>'Link do Youtube',
			'section' =>'pn_social_section',
			'secttings'=>'pn_youtube',
			'type'=>'text'
			 )

		)
	);


}

