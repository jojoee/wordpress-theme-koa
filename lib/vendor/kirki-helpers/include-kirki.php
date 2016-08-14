<?php

if ( ! class_exists( 'Kirki' ) ) {

	if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Kirki_Installer_Control' ) ) {
		/**
		 * A simple control that will render the installer <iframe>.
		 * We'll apply some CSS in order to move the section to the top
		 * as well as style the section & the iframe.
		 */
		class Kirki_Installer_Control extends WP_Customize_Control {
			public $type = 'kirki-installer';
			public function render_content() { ?>
				<style>
				li#accordion-section-kirki_installer { background:#f3f3f3; margin:-15px 0; }
				li#accordion-section-kirki_installer .accordion-section-title,li#accordion-section-kirki_installer .customize-section-title { display: none; }
				li#accordion-section-kirki_installer ul.accordion-section-content { display: block; position: relative; left: 0; margin-top: 0 !important; padding-top: 0; padding-bottom: 0; }
				#customize-controls li#accordion-section-kirki_installer .description { font-size: 1em; }
				#customize-control-kirki_installer { margin-bottom: 0; }
				iframe#kirki-customizer-installer { margin-left: -15px; height: 158px; }
				</style>
				<?php $plugins   = get_plugins(); ?>
				<?php $installed = false; ?>
				<?php foreach ( $plugins as $plugin ) : ?>
					<?php if ( 'Kirki' == $plugin['Name'] || 'Kirki Toolkit' == $plugin['Name'] ) : ?>
						<?php $installed = true; ?>
					<?php endif; ?>
				<?php endforeach; ?>

				<?php if ( ! $installed ) : ?>

					<script>
					var installerStyles = '<style>#plugin-information-tabs,#plugin-information-content {display:none !important;}</style>';
					jQuery('iframe#kirki-customizer-installer').load( function() {
						jQuery('iframe#kirki-customizer-installer').contents().find("head").append( installerStyles );
					});
					</script>
					<iframe id="kirki-customizer-installer" src="<?php echo admin_url( 'plugin-install.php?tab=plugin-information&amp;plugin=kirki' ); ?>"></iframe>
				<?php else : ?>
					<hr>
					<p><?php printf( __( 'The plugin is installed but not activated. Please <a href="%s">activate it</a>.', 'textdomain' ), admin_url( 'plugins.php' ) ); ?></p>
				<?php endif;
			}
		}

	}

	if ( ! function_exists( 'kirki_installer_register' ) ) {
		/**
		 * Registers the section, setting & control for the kirki installer.
		 */
		function kirki_installer_register( $wp_customize ) {
			// Add the section/
			// You can add your description here.
			// Please note that the title will not be displayed.
			$wp_customize->add_section( 'kirki_installer', array(
				'title'       => '',
				'description' => esc_attr__( 'If you want to take full advantage of the options this theme has to provide, please install the Kirki plugin.', 'textdomain' ),
				'priority'    => -10,
				'capability'  => 'install_plugins',
			) );
			// Add the setting. This is required by WordPress in order to add our control.
			$wp_customize->add_setting( 'kirki_installer', array(
				'type'              => 'theme_mod',
				'capability'        => 'install_plugins',
				'default'           => '',
				'sanitize_callback' => '__return_true',
			));
			// Add our control. This is required in order to show the section.
			$wp_customize->add_control( new Kirki_Installer_Control( $wp_customize, 'kirki_installer', array(
				'section' => 'kirki_installer',
			) ) );

		}
		add_action( 'customize_register', 'kirki_installer_register' );
	}
}
