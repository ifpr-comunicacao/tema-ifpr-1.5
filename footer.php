<footer class="footer">
	<div class="footer-menu">
		<?php dynamic_sidebar('footer'); ?>
	</div>

	
	<?php // Barra Brasil
	// get_template_part("gov/barra", "footer");?>
<div class="footer-ifpr">
	<div>
<svg xmlns="http://www.w3.org/2000/svg" id="marca-ifpr-footer" data-name="Camada 2" viewBox="0 0 196.27 54.26"><defs><style>.cls-1{fill:#fff}.cls-5,.cls-8{letter-spacing:0}</style></defs><g id="Layer_1" data-name="Layer 1"><text style="font-family:OpenSans-Bold,&quot;Open Sans&quot;;font-size:15.3px;font-weight:700;fill:#fff" transform="translate(44.19 37.88)"><tspan x="0" y="0" style="letter-spacing:0">I</tspan><tspan x="5.08" y="0" style="letter-spacing:0">NS</tspan><tspan x="26.01" y="0" class="cls-8">TIT</tspan><tspan x="48.84" y="0" class="cls-5">U</tspan><tspan x="60.44" y="0" class="cls-8">T</tspan><tspan x="69.32" y="0" class="cls-5">O F</tspan><tspan x="93.96" y="0" class="cls-8">EDER</tspan><tspan x="132.59" y="0" class="cls-5">A</tspan><tspan x="143.18" y="0" style="letter-spacing:0">L</tspan></text><text style="font-family:OpenSans,&quot;Open Sans&quot;;font-size:11.8px;fill:#fff" transform="translate(44.47 51.07)"><tspan x="0" y="0">Paraná</tspan></text><path d="M14.79.55h8.84c.59 0 1.07.48 1.07 1.07v8.84c0 .59-.48 1.07-1.07 1.07h-8.84c-.59 0-1.07-.48-1.07-1.07V1.62c0-.59.48-1.07 1.07-1.07Z" class="cls-1"/><rect width="10.98" height="10.98" x="26.9" y=".55" class="cls-1" rx="1.07" ry="1.07"/><path d="M27.97 26.9h8.84c.59 0 1.07.48 1.07 1.07v8.84c0 .59-.48 1.07-1.07 1.07h-8.84c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM1.62 13.72h8.84c.59 0 1.07.48 1.07 1.07v8.84c0 .59-.48 1.07-1.07 1.07H1.62c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM14.79 13.72h8.84c.59 0 1.07.48 1.07 1.07v8.84c0 .59-.48 1.07-1.07 1.07h-8.84c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM1.62 26.9h8.84c.59 0 1.07.48 1.07 1.07v8.84c0 .59-.48 1.07-1.07 1.07H1.62c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM14.79 26.9h8.84c.59 0 1.07.48 1.07 1.07v8.84c0 .59-.48 1.07-1.07 1.07h-8.84c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM1.62 40.09h8.84c.59 0 1.07.48 1.07 1.07V50c0 .59-.48 1.07-1.07 1.07H1.62c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM14.79 40.09h8.84c.59 0 1.07.48 1.07 1.07V50c0 .59-.48 1.07-1.07 1.07h-8.84c-.59 0-1.07-.48-1.07-1.07v-8.84c0-.59.48-1.07 1.07-1.07ZM12.08 6.04c0 3.34-2.7 6.04-6.04 6.04S0 9.38 0 6.04 2.7 0 6.04 0s6.04 2.71 6.04 6.04" class="cls-1"/></g></svg>		
<?php dynamic_sidebar('address'); ?>
	</div>
	<?php dynamic_sidebar('footer-ifpr'); ?>
</footer>
<!-- Voltar ao topo -->
<a href="#0" class="cd-top js-cd-top"><i class="fas fa-arrow-up"></i> <?php _e('Topo', 'ifpr_theme'); ?></a>
<?php
wp_footer();
