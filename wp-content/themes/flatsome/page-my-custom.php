<?php
/**
 * Template name: Page - My Custom
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.18.0
 */

  // get_header("header1"); 
  get_template_part('custom-header');

?>

<?php  do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>

		<?php endwhile; // end of the loop. ?>

</div>

<?php  do_action( 'flatsome_after_page' ); ?>

<?php  
    // get_footer(); 
    get_template_part('custom-footer');

?>
