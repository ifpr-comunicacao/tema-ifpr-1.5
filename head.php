<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/49103">
		<meta name="Description" content="<?php echo esc_attr__( 'O Instituto Federal do Paran&aacute; oferece Cursos T&eacute;cnicos, Superiores e de P&oacute;s-Gradua&ccedil;&atilde;o p&uacute;blicos, gratuitos e de qualidade', 'ifpr_theme' ); ?>">
		<!-- icon -->
		<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/favicon.gif" rel="shortcut icon" type="image/x-icon">
		<!-- font -->
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
		<?php 
			// Open Graph, FB Admins, Libebox and Analytics
			get_template_part( 'partials/meta', 'head' );
			wp_head();
		?>
	</head>
