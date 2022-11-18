<?php
/*
Template Name: Capa de Seção
Template Post Type: Page
*/
?>
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
					<div class="<?php echo get_post_meta(get_the_ID(), 'class', true); ?>col-md-9 page">
						<?php if (has_post_thumbnail()) : ?>
							<?php $img_top = $post->img_size; ?>
							<?php $img_pos = $post->position; ?>
							<figure <?php if ($img_top) : echo 'class="' . $img_top .' '. $img_pos .' "';
									else : echo 'class="sm'.' '.$img_pos.'"';
									endif; ?>>
								<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
							</figure>
						<?php endif; ?>
						<?php get_template_part("helpers\menu-contextual"); ?>
						<?php get_template_part("nav"); ?>
						<h1 class="class=" page__title""><?php the_title(); ?></h1>
				<?php
				the_content();
			endwhile;
		else :
			get_template_part('partials/content', 'none');
		endif;
				?>
				<?php
				$mypages = get_pages(array('sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $posts[0]->ID)); ?>
				<ul class="menu__pag-raiz"><?php foreach ($mypages as $page) { ?>
						<?php $icon = get_post_meta($page->ID, 'icon', true);
												if (!$icon) {
													$icon = '<span class="ifpr-icon"></span>';
												} ?>
						<?php $class = get_post_meta($page->ID, 'class', true); ?>
						<li class="page-root-item <?php echo $class; ?>"><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $icon; ?> <span class="menu__item"><?php echo $page->post_title; ?></span> <i class="fas fa-angle-right"></i></li></a>
					<?php } ?>
				</ul>
					</div>
					<?php get_footer(); ?>
				</div>
			</div>
</body>

</html>