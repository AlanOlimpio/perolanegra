<?php 

function pn_config_customizer_smtp($wp_customize){

	// Settings
	$wp_customize->add_setting('pn_host_customizer_smtp');
	$wp_customize->add_setting('pn_auth_customizer_smtp');
	$wp_customize->add_setting('pn_port_customizer_smtp');
	$wp_customize->add_setting('pn_username_customizer_smtp');
	$wp_customize->add_setting('pn_password_customizer_smtp');
	$wp_customize->add_setting('pn_recipient_customizer_smtp');
		
	// Sections
	$wp_customize->add_section('pn_config_smtp_section', array(
		'title' => __('Configuração de SMTP'),
		'priority' => '3',
		'description' => __('Essa configuração de e-mail foi testada com a conta do gmail. Também foi necessário configurar a conta do e-mail permitindo que ela seja usada por aplicativo menos seguro. <a href="https://myaccount.google.com/lesssecureapps" target="_blank">Acesso a app menos seguro
 Gmail</a>', 'directorist' ),
	));

	// Controllers
	$wp_customize->add_control(
	new  WP_Customize_Control(
		$wp_customize,
		'pn_host_customizer_smtp',
		array(
			'label' =>__('Host:'),
			'section' =>'pn_config_smtp_section',
			'secttings'=>'pn_host_customizer_smtp',
			'input_attrs' => array(
            'placeholder' => __( 'smtp.gmail.com', 'directorist' ),
			 )
			 )
           
		)
	);
	
	$wp_customize->add_control(
	new  WP_Customize_Control(
		$wp_customize,
		'pn_auth_customizer_smtp',
		array(
			'label' =>__('Autenticação'),
			'section' =>'pn_config_smtp_section',
			'secttings'=>'pn_auth_customizer_smtp',
			'type' => 'select',
			'choices' =>  array(
				'true'   => __( 'Sim' ),
    			'false' => __( 'Não' ),
			 )
			 )

		)
	);
	
	$wp_customize->add_control(
	new  WP_Customize_Control(
		$wp_customize,
		'pn_port_customizer_smtp',
		array(
			'label' =>__('Porta:'),
			'section' =>'pn_config_smtp_section',
			'secttings'=>'pn_port_customizer_smtp',
			'input_attrs' => array(
            'placeholder' => __( '587', 'directorist' ),
			 )
			 )

		)
	);
	
	
	$wp_customize->add_control(
	new  WP_Customize_Control(
		$wp_customize,
		'pn_username_customizer_smtp',
		array(
			'label' =>__('E-mail:'),
			'section' =>'pn_config_smtp_section',
			'secttings'=>'pn_username_customizer_smtp',
			'input_attrs' => array(
            'placeholder' => __( 'seu-email@gmail.com', 'directorist' ),
			 ))

		)
	);
	
	$wp_customize->add_control(
	new  WP_Customize_Control(
		$wp_customize,
		'pn_password_customizer_smtp',
		array(
			'label' =>__('Senha:'),
			'section' =>'pn_config_smtp_section',
			'secttings'=>'pn_password_customizer_smtp',
			'type' => 'password',
			'input_attrs' => array(
            'placeholder' => __( '******', 'directorist' ),
			 )
			 )

		)
	);

	$wp_customize->add_control(
	new  WP_Customize_Control(
		$wp_customize,
		'pn_recipient_customizer_smtp',
		array(
			'label' =>__('Destinatário:'),
			'section' =>'pn_config_smtp_section',
			'secttings'=>'pn_recipient_customizer_smtp',
			'input_attrs' => array(
            'placeholder' => __( 'destinatario@gmail.com', 'directorist' ),
			 ))

		)
	);
}