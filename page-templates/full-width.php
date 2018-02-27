<?php
/* Template Name: Full Width */
    get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

		    <?php
            // Start the loop
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                        the_content();
                endwhile;
            endif;
          ?>

		</main><!-- #main -->
	</div><!-- #primary -->

  <?php get_footer(); ?>