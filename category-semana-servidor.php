<?php
/**
 * Template Name: Semana do Servidor - Foz
 */
?>
<!DOCTYPE html>
<?php get_template_part("head");
get_template_part("gov");
get_header();
?>
<body <?php body_class(); ?>>
		<div class="container content pt-0 semana-servidor">
			<div class="row">
				<section class="menu-semana col-12 px-0 mb-3">
					<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() ) :?>
					<figure class="col-12 px-0 mb-0 semana-hero">
						<?php the_post_thumbnail('full',array( 'class' => 'img-fluid'));?>
					</figure>
						<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
					<?php wp_nav_menu( array(
			'container' => 'nav',
			'container_class' => 'nav-semana',
			'menu_class' => 'nav',
			'echo' => true,
			'fallback_cb' => '',
			'items_wrap' => '<ul class="%2$s flex-nowrap">%3$s</ul>',
			'item_spacing' => 'preserve',
			'walker' => '',
			'theme_location' => 'nav-semana' ) ); ?>
					</section>
				<section class="col-12 semana-content">
					<div class="row">
			<?php $query = new WP_Query( array( 'category_name' => 'semana-servidor' ) );
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
						$title = get_the_title();
						$noAccTitle = remove_accents($title);?>
			<article id="<?php echo sanitize_title_with_dashes( $noAccTitle ) ?>" class="col-12 mb-5">
				<div class="semana-container">
			<h2><span><?php the_title(); ?></span></h2>
			<div class="semana-post">
				<?php the_content(); ?>
			</div>
					</div>
			</article>
		<?php endwhile; else :
			get_template_part( 'partials/content', 'none' );
		endif; ?>

					</div>
					</section>
	<?php get_footer(); ?>
				<?php get_template_part("sidebar-left"); ?><!-- start sidebar -->
			</div>
		</div>
	</body>
</html>
