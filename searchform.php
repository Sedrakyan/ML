<?php
/**
 * Template for displaying search forms in ML
 *
 * @package WordPress
 * @subpackage ML
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) );
$search = new WP_Widget_Search();
$settings = $search->get_settings();
if (!$settings[2]['title']) {
echo '<h2 class="widget-title">Search</h2>';
}

?>
<form role="search" method="get" class="search-form blog-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentyseventeen' ); ?></span>
        <span class="screen-reader-text">Search for:</span>
        <input type="text"  value="<?php echo get_search_query(); ?>" name="s">
    <button class="button button-default" data-text="Search" type="submit"><span>Search</span></button>
</form>
