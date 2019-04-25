<?php 

	if(get_theme_mod('pn_colunas_widgets') == 'value1'){

		require get_template_directory().'/include/widgets/col-1.php';

	}elseif(get_theme_mod('pn_colunas_widgets') == 'value2'){

		require get_template_directory().'/include/widgets/col-2.php';

	}elseif(get_theme_mod('pn_colunas_widgets') == 'value3'){

		require get_template_directory().'/include/widgets/col-3.php';

	}elseif(get_theme_mod('pn_colunas_widgets') == 'value4'){

		require get_template_directory().'/include/widgets/col-4.php';

	}
 
?>


