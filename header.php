<!-- Header -->
<header class="container">
		
		<!-- Sidebar Esquerdo Mobile -->
		<button class="menu-esquerdo__toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="sidebar__esquerda" aria-expanded="false" aria-label="Menu esquerdo toggle">
			<i class="menu-btn-toggle fas fa-bars"></i>
		</button>
		<!-- Fim Sidebar Esquerdo Mobile -->

		<!-- Marca IFPR -->
		<a href="<?php echo $home_url; ?>" class="marca-ifpr">
			<?php $campus = get_bloginfo(); ?>
			<svg id="marca-ifpr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 230 54" role="img" aria-label="[title + description]">
				<title>Instituto Federal do Paran&aacute;</title>
				<desc>Marca do IFPR</desc>
				<path class="st5" d="M37.4 36.4c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z"/>
				<path class="st5" d="M24.4 10.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z"/>
				<path class="st5" d="M37.4 10.3c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z"/>
				<path class="st5" d="M11.4 23.3c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z"/>
				<path class="st5" d="M24.4 23.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z"/>
				<path class="st5" d="M11.4 36.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z"/>
				<path class="st5" d="M24.4 36.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z"/>
				<path class="st5" d="M11.4 49.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z"/>
				<path class="st5" d="M24.4 49.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z"/>
				<path class="st6" d="M11.9 6c0 3.3-2.7 6-6 6C2.7 11.9 0 9.3 0 6S2.7 0 6 0C9.3 0 11.9 2.7 11.9 6"/>
				<?php
				if ($campus == "Instituto Federal do Paran??"){
					$transformLine1 = "44.1899 38.9971";
					$transformLine2 = "44.4702 52.1841";
				} else {
					$transformLine1 = "43.6553 24.1582";
					$transformLine2 = "43.9331 37.5249";
				}
				?>
				<text transform="matrix(1.0017 0 0 1 <?php echo $transformLine1; ?>)">
					<tspan class="st0">INSTITUTO FEDERAL</tspan>
				</text>
				<text transform="matrix(1.0017 0 0 1 <?php echo $transformLine2; ?>)" class="st1">Paran??</text>
				<?php if ($campus == "Instituto Federal do Paran??"){
					}else{?>
				<text transform="matrix(1.0017 0 0 1 43.9326 50.5059)" class="st2"><?php echo $campus; ?></text>
				<?php }; ?>
			</svg>
		</a>
		<!-- Fim Marca IFPR -->
		
		<!-- Busca -->
		<button class="busca-btn" type="button" data-toggle="collapse" data-target="#busca" aria-controls="busca" aria-expanded="false" aria-label="Busca toggle">
		<i class="fas fa-search text-center busca__icone_mobile align-self-center"></i>
		</button>
		
		<div id="busca" class="header-busca">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<label class="mb-0">
        			<span class="screen-reader-text"><?php echo _x( 'Pesquisar por:', 'label', 'ifpr_theme' ); ?></span>
       				 <input type="search" class="busca__texto_input" 
							placeholder="<?php echo esc_attr_x( 'Pesquisar por', 'placeholder', 'ifpr_theme' ); ?>"
							value="<?php echo get_search_query(); ?>" name="s"
							title="<?php echo esc_attr_x( 'Pesquisar por:', 'label', 'ifpr_theme' ); ?>" />
    			</label>
    			<button type="submit" class="btn busca__botao" value="Submit"><i class="fas fa-search"></i></button>
			</form>
			<p class="busca__link_sei">Documentos institucionais est??o no <a href="https://sei.ifpr.edu.br/sei/modulos/pesquisa/md_pesq_processo_pesquisar.php?acao_externa=protocolo_pesquisar&acao_origem_externa=protocolo_pesquisar&id_orgao_acesso_externo=0"> SEI!</a></p>
		</div>
		<!-- Fim Busca -->

		<?php
			$home_url = null;
				wp_nav_menu( 
					array(
					'container' => 'nav',
					'container_class' => 'nav-superior',
					'menu_class' => 'nav-list',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					'item_spacing' => 'preserve',
					'walker' => '',
					'theme_location' => 'nav-superior' 
				));
		?>
</header>
<!-- Fim Header -->