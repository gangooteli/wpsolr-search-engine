<?php
if ( 'type' === $selected_val ) {
	$all_post_types = get_post_types();
	$post_types     = array( 'attachment' );
	foreach ( $all_post_types as $post_type ) {
		if ( 'attachment' !== $post_type && 'revision' !== $post_type && 'nav_menu_item' !== $post_type ) {
			array_push( $post_types, $post_type );
		}
	}

	foreach ( $post_types as $post_type ) {
		?>
		<div class="wdm_row" style="top-margin:5px;">
			<div class='col_left'>
				<?php echo $license_manager->show_premium_link( OptionLicenses::LICENSE_PACKAGE_PREMIUM, sprintf( '%s label', ucfirst( $post_type ) ), true ); ?>
			</div>
			<?php
			$facet_label = ( ! empty( $selected_facets_item_labels[ $selected_val ] ) && ! empty( $selected_facets_item_labels[ $selected_val ][ $post_type ] ) )
				? $selected_facets_item_labels[ $selected_val ][ $post_type ] : '';
			?>
			<div class='col_right'>
				<input type='text'
				       name='wdm_solr_facet_data[<?php echo WPSOLR_Option::OPTION_FACET_FACETS_ITEMS_LABEL; ?>][<?php echo $selected_val; ?>][<?php echo $post_type; ?>]'
				       value='<?php echo esc_attr( $facet_label ); ?>'
					<?php echo $license_manager->get_license_enable_html_code( OptionLicenses::LICENSE_PACKAGE_PREMIUM ); ?>
				/>
				<p>
					Will be shown on the front-end (and
					translated in WPML/POLYLANG string
					modules).
					Leave empty if you wish to use the
					current facet
					name "<?php echo $post_type; ?>".
				</p>

			</div>
			<div class="clear"></div>
		</div>
	<?php }
} ?>