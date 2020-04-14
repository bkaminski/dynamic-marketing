<nav class="navbar navbar-expand-lg fixed-top shadow">
	<div class="container">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); 
			echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/04/dmi-header-logo.png' ) . '" width="223" alt="The DMI Group Logo">'; ?>
		</a>
		<button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#dmiNav" aria-controls="dmiNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars fa-2x"></i>
		</button>
		<div class="collapse navbar-collapse text-uppercase" id="dmiNav">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => '',
				'container_class'   => '',
				'container_id'      => '',
				'menu_class'        => 'navbar-nav ml-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
			
		</div>
	</div>
</nav>
