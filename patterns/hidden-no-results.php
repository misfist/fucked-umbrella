<?php
/**
 * Title: Hidden No Results Content
 * Slug: fucked-umbrella/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'fucked-umbrella' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'fucked-umbrella' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'fucked-umbrella' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'fucked-umbrella' ); ?>","buttonUseIcon":true} /-->
