<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php 
			get_template_part("gov");
			get_header(); 
		?>
		<!-- #Page Container Content -->
		<div id="page" class="container content">
			<!-- Row -->
			<div class="row">
				
				<!-- Sidebar -->
				<?php get_template_part("sidebar-left"); ?>
				
				<!-- #Content2 -->
				<div id="content2" class="col-md-9">
					
					<!-- Breadcrumb -->
					<?php get_template_part("nav"); ?>

					<!-- Content entry -->
					<h1>
						<i class="fas fa-newspaper"></i>
						<?php _e( 'Publica&ccedil;&otilde;es sobre ', 'ifpr_theme' ); the_category( ', ' ); ?>
					</h1>
					<ul class="arquivo-noticias__lista fa-ul">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<span class="fa-li" >
									<i class="fas fa-angle-right"></i>
								</span>
								<?php the_time('j F, Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						<?php endwhile; ?>
					</ul>
					<!-- Fim Content entry -->

					<div class="row">
						<!-- Paginacao -->
						<div class="col-12 d-flex justify-content-center">
							<?php echo bootstrap_pagination(); ?>
						</div>
						<!-- Fim Paginacao -->
						<!-- Filtro mensal -->
						<section class="noticias-arquivo-lista col-12 mb-3">
							<select class="custom-select" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
							<option value=""><?php echo esc_attr( __( 'Selecione o m&ecirc;s' ) ); ?></option>
							<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
							</select>
						</section>
						<!-- Fim Filtro mensal -->
					</div>

					<?php else :
						get_template_part( 'partials/content', 'none' );
					endif; ?>

				</div>
				<!-- Fim #Content2 -->

				<!-- Footer -->
				<?php get_footer(); ?>

			</div>
			<!-- Fim Row -->
		</div>
		<!-- Fim #Page Container Content -->
	</body>
</html>
