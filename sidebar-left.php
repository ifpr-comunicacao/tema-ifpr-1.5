<section class="sidebar col-md-3 d-none d-md-block pt-3 pr-md-0">
	<?php
		if ( is_page_template( array( 'english.php', 'page-english.php', 'post-english.php' ) ) || is_category( 'english' ) ) {
			dynamic_sidebar( 'english' );
		} elseif( is_page_template( array( 'espanhol.php', 'page-espanhol.php', 'post-espanhol.php') ) || is_category( 'espanol' ) ) {
			dynamic_sidebar( 'espanhol' );
		} else {
			if( has_nav_menu( 'nav-translation' ) ) {
				wp_nav_menu(
				array(
					'container' => 'nav',
					'container_class' => 'nav-translation',
					'menu_class' => 'nav',
					'echo' => true,
					'fallback_cb' => '',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'item_spacing' => 'preserve',
					'walker' => '',
					'theme_location' => 'nav-translation'
				));
			}
			dynamic_sidebar( 'esquerda' );
		}
	?>
</section>
