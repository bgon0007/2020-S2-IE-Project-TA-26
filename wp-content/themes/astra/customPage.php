<?php /*Template Name: CustompageT1 */
$q = $_REQUEST["q"];

if($q ==""){

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

}
?>

<?php if ( astra_page_layout() == 'left-sidebar' && $q == "" ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' && $q == "" ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php if ( $q == "" ) : ?>

<?php get_footer(); ?>

<?php endif ?>



<?php







$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") { 

	global $wpdb;
$result = $wpdb->get_results("SELECT SoilType FROM wp_recommendation WHERE Suburb = '".$q."'");

    foreach($result as $row) {
           echo $row->SoilType.'</br>'; 
          
        }
 
}

// Output "no suggestion" if no hint was found or output correct values
//echo $hint === "" ? "no suggestion" : $hint;
?>