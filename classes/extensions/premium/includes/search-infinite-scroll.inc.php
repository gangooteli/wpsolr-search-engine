<div class="wdm_row">
	<div class='col_left'>
		<?php echo $license_manager->show_premium_link( OptionLicenses::LICENSE_PACKAGE_PREMIUM, 'Activate the "Infinite scroll" pagination', true ); ?>
	</div>
	<div class='col_right'>
		<input type='checkbox'
		       name='wdm_solr_res_data[<?php echo 'infinitescroll' ?>]'
		       value='infinitescroll'
			<?php echo $license_manager->get_license_enable_html_code( OptionLicenses::LICENSE_PACKAGE_PREMIUM ); ?>
			<?php checked( 'infinitescroll', isset( $solr_res_options['infinitescroll'] ) ? $solr_res_options['infinitescroll'] : '?' ); ?>>

		This feature loads the next page of results automatically when visitors
		approach
		the bottom of search page.
	</div>
	<div class="clear"></div>
</div>
