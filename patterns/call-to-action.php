<?php
/**
 * Title: Call to action
 * Slug: fucked-umbrella/cta
 * Categories: featured
 * Keywords: Call to action
 * Block Types: core/buttons
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
		<p class="has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'Seen any
fucked umbrellas? ', 'sample content for call to action', 'fucked-umbrella' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"attributesForBlocks":{"@data-width":"75%","@data-id":"68","@data-form_style":"1","@data-allow_outside_click":"1","@data-post_id":"15"},"className":"wpb-pcf-form-fire","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size wpb-pcf-form-fire has-small-font-size" data-width="75%" data-id="68" data-form_style="1" data-allow_outside_click="1" data-post_id="15"><a class="wp-block-button__link wp-element-button">
				<a class="wp-block-button__link wp-element-button">
				<?php echo esc_html_x( 'Get In Touch', 'sample content for call to action button', 'fucked-umbrella' ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
