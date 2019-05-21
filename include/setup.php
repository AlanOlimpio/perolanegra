<?php

// Theme Style and JavaScript Header

function pn_thema_styles () {

    wp_enqueue_script('theme_js',get_template_directory_uri().'/assets/js/script.js', array('jquery'),'1.0', true);
    wp_enqueue_style('w3_css',get_template_directory_uri().'/assets/css/w3.css');	
    wp_enqueue_style('theme_css',get_template_directory_uri().'/assets/css/theme.css');

}

// Theme Style and JavaScript Footer

function pn_prefix_add_footer_styles() {
    
    wp_enqueue_style('fonts_theme',get_template_directory_uri().'/assets/css/fonts.css');
    wp_enqueue_style('font_awesome_css',get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css');
	
};

// Theme Setap Functions

function pn_after_setup(){

    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'audio'));
    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri().'/assets/images/headers/mac-img.jpg',
        'width' => 1200,
        'height' => 800,
        'flex-width' => true,
        'flex-height' => true
    ));

	register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'perolanegra'),
            'menu_mobile' => __('Mobile Menu', 'perolanegra')
    ));   
    
    register_default_headers(array(
        'header1' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/mac-img.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/mac-img.jpg',
            'description' => 'Header 1'
    ),
         'header2' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/access-apple-apple-devices.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/access-apple-apple-devices.jpg',
            'description' => 'Header 2'
    ),
          'header3' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/tablet.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/tablet.jpg',
            'description' => 'Header 3'
        ),
    ));
}

// Add class specific in certain menu

function pn_add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if(( $args->theme_location == 'primary' ) || ( $args->theme_location == 'menu_mobile' )) {
      // add the desired attributes:
      $atts['class'] = 'w3-bar-item w3-button';
    }
    return $atts;
}

// Create as theme sidebar

function pn_widgets(){
 	register_sidebar(array(
 		'name' => __('Meu Primeiro Sidebar', 'perolanegra'),
 		'id' => 'pn_sidebar',
 		'description' => __('Sidebar para o tema', 'perolanegra'),
 		'before_title' => '<h4 class="widget_title">',
 		'after_title' => '</h4>',
 		'before_widget' => '<li id="%1$s" class="widget_li %2$s">',
 		'after_widget' => '</li>'
 		 ));
    if(get_theme_mod('pn_colunas_widgets') == 'value1'){
        register_sidebar(array(
        'name' => __('1º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_um',
        'description' => __('Coluna 1', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
    }elseif(get_theme_mod('pn_colunas_widgets') == 'value2'){
        register_sidebar(array(
        'name' => __('1º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_um',
        'description' => __('Coluna 1', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));

        register_sidebar(array(
        'name' => __('2º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_dois',
        'description' => __('Coluna 2', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
    }elseif(get_theme_mod('pn_colunas_widgets') == 'value3'){
        
        register_sidebar(array(
        'name' => __('1º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_um',
        'description' => __('Coluna 1', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
        
        register_sidebar(array(
        'name' => __('2º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_dois',
        'description' => __('Coluna 2', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
        register_sidebar(array(
        'name' => __('3º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_tres',
        'description' => __('Coluna 3', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
    }elseif(get_theme_mod('pn_colunas_widgets') == 'value4'){   
        
        register_sidebar(array(
        'name' => __('1º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_um',
        'description' => __('Coluna 1', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
        
        register_sidebar(array(
        'name' => __('2º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_dois',
        'description' => __('Coluna 2', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
        register_sidebar(array(
        'name' => __('3º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_tres',
        'description' => __('Coluna 3', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         ));
        
        register_sidebar(array(
        'name' => __('4º Coluna', 'perolanegra'),
        'id' => 'widgets_coluna_quatro',
        'description' => __('Coluna 4', 'perolanegra'),
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="widget_rodape %2$s">',
        'after_widget' => '</div>'
         )); 
    }
 }

// Post excerpt character number

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}

//  Adding class sub-menu

function pn_change_submenu_class($menu) {  
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu w3-dropdown-content w3-bar-block" /',$menu);  
    return $menu;  
}  

// Adding template class


function pn_add_active_class($classes, $item) {
    if( $item->menu_item_parent == 0 && in_array( 'menu-item-has-children', $classes )) {
    $classes[] = "w3-dropdown-hover w3-mobile mobileDropdown dropbtn";
}

  return $classes;
}

// Adding class in post links

function posts_link_attributes() {
    return 'class="previous-next w3-light-grey"';
}
// Configuration by sending SMTP mail
function pn_mailer_config(PHPMailer $mailer){
	$mailer->isSMTP();
	$mailer->IsHTML(true);
	$mailer->Host = get_theme_mod('pn_host_customizer_smtp');
	$mailer->SMTPAuth = get_theme_mod('pn_auth_customizer_smtp');
	$mailer->Port = get_theme_mod('pn_port_customizer_smtp');
	$mailer->Username = get_theme_mod('pn_username_customizer_smtp');
	$mailer->Password = get_theme_mod('pn_password_customizer_smtp');
}

// E-mail Setup
function pn_contact_form_send(){
    if(isset($_POST['gd_name'])){$gd_name = esc_attr($_POST['gd_name']);}else{die('error');}
    if(isset($_POST['gd_email'])){$gd_email = esc_attr($_POST['gd_email']);}else{die('error');}
    if(isset($_POST['gd_subject'])){$gd_subject = esc_attr($_POST['gd_subject']);}else{$gd_subject='';}
    if(isset($_POST['gd_message'])){$gd_message = esc_attr($_POST['gd_message']);}else{die('error');}
    if(!isset($_POST['name']) || (isset($_POST['name']) && $_POST['name'])){die('error');}
    $headers = 'From: ' . get_theme_mod('pn_username_customizer_smtp') . "\r\n" .
        'Reply-To: '.$gd_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $message = "Nome: $gd_name - $gd_email \r\n";
	$message .= " \r\n<br/><hr/>";
	$message .= "E-mail: $gd_email \r\n";
	$message .= " \r\n<br/><hr/>";
    $message .= "Assunto: $gd_subject \r\n";
    $message .= " \r\n<br/><hr/>";
    $message .= "Mensagem: \r\n";
    $message .= "$gd_message \r\n";
    $message .= " \r\n<br/><hr/>";
    $message .= "<br/>Este e-mail foi enviado do seu <b>web site</b>\r\n";
    wp_mail( get_theme_mod('pn_recipient_customizer_smtp') , 'Contato pelo web Site :: '.$gd_subject, $message, $headers );
    echo "Sua mensagem foi enviada com sucesso.<br/> Obrigado ".$gd_name ;
    die();
}

// Create the sample page by activating the Theme

if (isset($_GET['activated']) && is_admin()){
  
    $new_page_title = 'Página de exemplo do Tema Pérola Negra';
    require get_template_directory().'/template_parts/page-exemple-theme.php';
    $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
  
}

// Adds example menu when activating theme if it does not exist

function pn_menu_theme_activation_function ($oldname, $oldtheme = false) {
/* Create header and footer menus */
  $menus = array(
    'Menu de exemplo do thema'  => array(
      '/#up-top'  => 'HOME', 
      '/#about'  => 'ABOUT', 
      '/#team'  => '<i class="fa fa-user"></i> TEAM', 
      '/#work'  => '<i class="fa fa-th"></i> WORK', 
      '/#pricing'  => '<i class="fa fa-usd"></i> PRICING',
      '/#contact'  => '<i class="fa fa-envelope"></i> CONTACT', 
    )
);
foreach($menus as $menuname => $menuitems) {
  $menu_exists = wp_get_nav_menu_object($menuname);
  // If it doesn't exist, let's create it.
  if ( !$menu_exists) {
    $menu_id = wp_create_nav_menu($menuname);
    foreach($menuitems as $slug => $item) {
      wp_update_nav_menu_item(
      $menu_id, 0, array(
            'menu-item-title'  => $item,
            'menu-item-url' => get_site_url() . $slug,
            'menu-item-object-id'  => get_page_by_path($slug)->ID,
            'menu-item-type' => 'custom',
            'menu-item-status'  => 'publish'
        )
      );
    }
  }
 }
}