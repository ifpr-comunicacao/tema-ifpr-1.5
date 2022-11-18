<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
	<?php
	// Barra Brasil
	// get_template_part("gov/barra", "header");
	get_header();
	?>

	<!-- Container Content -->
	<div class="container bg-white d-flex">
		<!-- Nonmodal -->
		<?php dynamic_sidebar('nonmodal-rodape'); ?>
	</div>
	<div class="container content">
		<!-- Row -->
		<div class="row">
			<!-- Sidebar 1 -->
			<?php get_template_part("sidebar-left"); ?>

			<!-- Noticias -->
			<section class="noticias col-md-9 col-lg-6 pt-3">
				<!-- Banner Inicio -->
				<?php dynamic_sidebar('banner-inicio');
				//Inicio Loop
				if (have_posts()) :
					the_post();
				?>

					<!-- Noticia Destaque -->
					<section class="destaque">
						<?php
						if (has_post_thumbnail()) :
							the_post_thumbnail('full', array('class' => 'img-fluid'));
						endif;
						?>
						<p class="destaque__tag"><?php the_tags("", "", ""); ?></p>
						<h1 class="destaque__titulo"><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h1>
						<?php the_excerpt(); ?>
					</section>
					<!-- Fim Noticia Destaque -->

					<!-- Noticia Complementar -->
					<section class="noticias-complementares row">
						<?php
						$i = 1;
						while ($i <= 4) : the_post(); // Qtd Noticia Secundaria
						?>
							<section class="col-lg-6">
								<p class="complementares__tag"><?php the_tags("", "", ""); ?></p>
								<h3 class="complementares__titulo"><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?></a></h3>
								<?php the_excerpt(); ?>
							</section>
						<?php $i++;
						endwhile; ?>
					</section>

					<section class="noticias-complementares row">
						<div class="col-md-12 mais-noticias">
							<h3><i class="fas fa-newspaper"></i> <?php _e('Not&iacute;cias', 'ifpr_theme'); ?></h3>
							<ul class="mais-noticias__lista">
								<?php
								$i = 1;
								while ($i <= 5) : the_post(); // Qtd Noticia Lista
								?>
									<li><i class="fas fa-angle-right"></i><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?> </a></li><!-- quantidade de noticias no campo mais noticias -->
								<?php
									$i++;
								endwhile;
								?>
							</ul>
							<?php wp_get_archives(array('type' => 'monthly', 'limit' => 1, 'format' => 'custom', 'before' => '<i class="fas fa-plus-square"></i> Mais notícias: ')); ?>
						</div>
					</section>
					<!-- Fim Noticia Complementar -->

					<!-- Sem noticia -->
				<?php else : ?>
					<div class="row">
						<?php get_template_part('partials/content', 'none'); ?>
					</div>
				<?php endif; ?>


				<!-- Sidebar Centro-->
				<div class="row">
					<?php dynamic_sidebar('centro'); ?>
				</div>

				<!-- Like box Facebook -->
				<div class="row">
					<div class="widget-fb col-md-12">
						<?php
						// var in /partials/meta-head.php
						global $fb_likebox; ?>
						<h3><i class="fab fa-facebook-square"></i> O IFPR no Facebook</h3>
						<iframe class="fb-likebox" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $fb_likebox; ?>%2F&tabs&width=560&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="560" height="154" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media">
						</iframe>
					</div>
				</div>
				<!-- Fim Like box Facebook -->

				<!-- Conexao IFPR -->
				<div class="row">
					<div class="conexao col-md-12">
						<h3><i class="fas fa-tv"></i> <?php _e('Conex&atilde;o IFPR', 'ifpr_theme'); ?></h3>
						<div class="row">
							<?php dynamic_sidebar('video01'); ?>
							<?php dynamic_sidebar('video02'); ?>
						</div>
						<p class="mt-3 badge-link">
							<?php _e('Acesse nosso canal ', 'ifpr_theme'); ?>
							<a href="https://www.youtube.com/conexaoifpr/">
								<span class="badge badge-ifpr"> <?php _e('Conex&atilde;o IFPR', 'ifpr_theme'); ?></span>
							</a>
							<?php _e(' para assistir mais v&iacute;deos.', 'ifpr_theme'); ?>
						</p>
					</div>
				</div>
				<!-- Fim Conexao IFPR -->

			</section>
			<!-- Fim Noticias -->

			<!-- Sidebar Right -->
			<?php get_template_part("sidebar-right"); ?>

			<!-- Footer -->
			<?php get_footer(); ?>

		</div>
		<!-- Fim Row -->
	</div>
	<!-- Fim Container Content -->
	<?php get_template_part("cookies"); ?>
</body>

</html>