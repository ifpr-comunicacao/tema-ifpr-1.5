<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<div id="page" class="container content">
			<div class="row">
				<?php get_template_part("sidebar-left"); ?><!-- start sidebar -->
				<div id="content2" class="col-md-9">
					<?php get_template_part("nav"); ?>
					<h1 class="page__title"><i class="fas fa-newspaper"></i> <?php _e('Avisos de ', 'ifpr_theme' );?><?php the_time('F, Y'); ?></h1>
					<ul class="arquivo-noticias__lista fa-ul">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li><span class="fa-li" ><i class="fas fa-angle-right"></i></span><?php the_time('j F, Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					</ul>
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
							<?php echo bootstrap_pagination(); ?>
						</div>
					</div>

					<?php else :
						get_template_part( 'partials/content', 'none' );
					endif; ?>

				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
