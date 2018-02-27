<?php
/* Template Name: Two Columns - Right */

get_header();


?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

      <div class="row">
        <div class="columns eight">
          <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
        </div>

        <div class="columns four">
          <?php get_sidebar('sidebar-1'); ?>
        </div>
      </div>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_footer();