<div class="wdm_row">
	<div class='col_left'>
		<?php echo $license_manager->show_premium_link( OptionLicenses::LICENSE_PACKAGE_PREMIUM, 'Search template', true ); ?>
		<?php echo WPSOLR_Help::get_help( WPSOLR_Help::HELP_SEARCH_TEMPLATE ); ?>
	</div>
	<div class='col_right'>
		<select name="wdm_solr_res_data[search_method]">
			<?php
			$options = array(
				array(
					'code'     => 'use_current_theme_search_template',
					'label'    => 'Use my current theme search template (no ajax, no \'Did you mean\', widget facets, widget sort)',
					'disabled' => $license_manager->get_license_enable_html_code( OptionLicenses::LICENSE_PACKAGE_PREMIUM ),
				),
				array(
					'code'  => 'ajax',
					'label' => 'Use WPSOLR custom search templates with Ajax (full WPSOLR features)'
				),
				array(
					'code'  => 'ajax_with_parameters',
					'label' => 'Use WPSOLR custom search templates with Ajax and show parameters in url (full WPSOLR features)'
				)
			);
			foreach ( $options as $option ) {
				$selected = $solr_res_options['search_method'] == $option['code'] ? 'selected' : '';
				$disabled = isset( $option['disabled'] ) ? $option['disabled'] : '';
				?>
				<option
					value="<?php echo $option['code'] ?>"
					<?php echo $selected ?>
					<?php echo $disabled ?>>
					<?php echo $option['label'] ?>
				</option>
			<?php } ?>

		</select>

		<br/><br/>
		To display your search results, you can choose among:<br/>
		<b>- Full integration to your theme, but less Solr features:</b> <br/>
		Use your own theme's search templates customized with Widget 'WPSOLR
		filters'.<br/>
		<b>- Full Solr features, but less integration to your theme:</b><br/>
		Use WPSOLR's custom search templates with your own css.<br/>
	</div>
	<div class="clear"></div>
</div>

