<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
	<?php get_template_part("gov"); ?>
	<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="container content">
				<div class="row">
					<?php get_template_part("sidebar-left"); ?>
					<!-- start sidebar -->
					<div class="col-md-9 article">
					<?php $img_top = $post->img_size; ?>
					<?php if (!$img_top) : $img_top ="sm"; endif; ?>
						<div class="fig-topo <?php echo $img_top;?>">
							<?php if (has_post_thumbnail()) : ?>
								<figure class="mb-0">
									<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
								</figure>
							<?php endif; ?>
						</div>
						<?php get_template_part("helpers\menu-contextual"); ?>

						<?php $class = $post->class; ?>
						<article <?php if ($class) : ?> class=<?php echo ".$class.";
															endif; ?>>
							<?php get_template_part("nav"); ?>
							<h1 class="page__title"><?php the_title(); ?></h1>
							<?php if (!has_excerpt()) { ?>
								<?php echo ''; ?>
							<?php	} else { ?>
								<p class="page__subtitle"><?php echo get_the_excerpt(); ?></p>
							<?php	}; ?>
							<?php the_content(); ?>
							<div class="crunchify-social">
								<?php
								//social share
								echo ifpr_social_sharing();
								?>
							</div>
					<?php endwhile;
			else :
				get_template_part('partials/content', 'none');
			endif;
					?>
						</article>
					</div>
					<?php get_footer(); ?>
				</div>
			</div>
</body>

</html>