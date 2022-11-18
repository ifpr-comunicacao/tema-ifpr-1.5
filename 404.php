<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<div id="page" class="container content">
			<div class="row">
				<?php get_template_part("sidebar-left"); ?><!-- start sidebar -->
				<div id="content2" class="col-md-9">
					<?php get_template_part("nav"); ?>
					<h1  class="display-1"><?php _e('Erro 404', 'ifpr_theme'); ?></h1>
					<h2 class="m-0">
						<?php _e( 'Essa p&aacute;gina n&atilde;o existe ou mudou de endere&ccedil;o.', 'ifpr_theme' ); ?>
					</h2>

					<?php
					//pega url
					$url = "http://". $_SERVER['HTTP_HOST'];
					$url.= "/";
					$url.= $_SERVER['REQUEST_URI'];
					//separa url
					$parts = Explode('/', $url);
					$keywords = $parts[count($parts) - 1]; 
					?>

					<?php
					//resultado da busca pelo termo nao encontrado
					$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' ); //para paginacao
					$args = array( 's' => $keywords, 'orderby' => 'date', 'paged' => $current_page);
					$search_query = new WP_Query( $args );
					if( $search_query->have_posts() ) : ?>
					<div class="alert alert-success mt-2 mb-2" role="alert"><?php _e('Veja algumas sugest&otilde;es que podem ser o que voc&ecirc procura:', 'ifpr_theme'); ?></div>
					<ul class="arquivo-noticias__lista fa-ul">
						<?php
						while( $search_query->have_posts() ) : $search_query->the_post(); ?>
						<li>
							<span class="fa-li" ><i class="fas fa-angle-right"></i></span>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&#124;<?php the_time('j F, Y'); ?>
							<?php the_excerpt(); ?>
						</li>
						<?php 
						endwhile; ?>
						
					</ul>

					<!-- Paginacao -->
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
						<?php echo bootstrap_pagination($search_query); ?>
						</div>
					</div>
					<!-- Fim Paginacao -->

					<?php else :
						get_template_part( 'partials/content', 'none' );
					endif; ?>

				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
