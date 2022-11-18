<?php
/*
Template Name: Página do Servidor - Artigo
Template Post Type: post, page
*/
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body>
		<?php
		get_template_part("gov");
		get_header();
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- start .content -->
		<div id="page" class="container content">
			<!-- start .row -->
			<div class="row">
				<!-- start sidebar-left -->
				<?php get_template_part("sidebar-left"); ?>
				<!-- start .article -->
				<div class="<?php echo $post->class; ?> col-md-9 article">

					<div class="topo-servidor">
						<a class="d-flex" href="<?php echo get_home_url(); ?>/servidor/">
							<i class="fas fa-chevron-left mr-2"></i><span class="d-none d-sm-block">capa</span>
						</a>
          				<p class="topo-servidor__title"><?php _e( 'P&aacute;gina do Servidor', 'ifpr_theme' ); ?></p>
        			</div>

					<!-- Começo do menu -->
            		<?php
					$page_servidor = get_page_by_path('servidor', OBJECT, 'page');
					if($page_servidor){
						$page_servidor_id = $page_servidor->ID;
					} else{
						echo "<p class='alert alert-danger'>" ._e('A p&aacute;gina do Servidor n&atilde;o existe ou deve ter o slug', 'ifpr_theme'). " <b>servidor</b></p>";
					}
            		$mypages = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $page_servidor_id ) ); ?>
          			<ul class="nav-servidor">
					  <?php foreach( $mypages as $page ){?>
						<?php
						$icon = $page->icon;
						if(!$icon){
							$icon = '<span class="ifpr-icon"></span>';
						}?>
						<?php $class = $page->class; ?>
						<li class="nav-servidor__item <?php echo $class; ?>">
							<a href="<?php echo get_page_link( $page->ID ); ?>">
								<?php echo $icon; ?> <?php echo $page->post_title; ?>
							</a>
						</li>
						<?php } ?>
          			</ul>
					<!-- Fim do menu -->

					<?php
					get_template_part("nav");
					$top_bkg = $post->title_bkg;
					if (!$top_bkg){ $top_bkg = 'bkg-grey pt-3';} ?>
					<article>
					<div class="article-top <?php echo $top_bkg; ?> col-12 mr-1">
						<?php
						$icon = $post->icon;
						if(!$icon){
							$icon = '';
						}?>
						<h1 class="article-top__title"><?php echo $icon ?> <?php the_title(); ?></h1>
							<?php if ( ! has_excerpt() ) {
								echo '';
							} else { ?>
								<p class="article-top__subtitle">
								<?php echo get_the_excerpt(); ?>
								</p>
							<?php } ?>
					</div>
					<?php
					the_content();
					$update = $post->update;
					if (!$update): ?>
						<p class="badge badge-secondary">
							Atualizado em <?php echo the_modified_date() ;?>
						</p>
					<?php endif; ?>
					<?php endwhile; else :
						get_template_part( 'partials/content', 'none' );
					endif; ?>
</article>
				</div>
				<!-- end .article -->
				<?php get_footer(); ?>
			</div>
			<!-- end .row -->
		</div>
		<!-- end .content -->
	</body>
</html>
