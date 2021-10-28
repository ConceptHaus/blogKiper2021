<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Kiper_Child
 */

get_header();
?>

<article class="bg-gen"> 
  <section class="blogSec">
    <div class="blogSec__main">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">
<?php if ( have_posts() ) : ?>
  <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

		endwhile; ?>
<?php else : ?>
      <div class="col-12">
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
      </div><!-- end.col-* -->
<?php endif; ?>
            </div><!-- end.row -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
    </div><!-- end.blogSec__main -->
  </section><!-- end.blogSec -->
</article><!-- end.article -->
<?php
get_footer();
