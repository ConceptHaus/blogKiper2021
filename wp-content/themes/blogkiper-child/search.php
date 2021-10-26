<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Blog_Kiper_Child
 */

get_header();
?>

      <article class="bg-gen"> 
        <section class="blogSec">
          <div class="blogSec__main">
            <div class="container">
              <div class="row justify-content-center">
      <?php if ( have_posts() ) : ?>
                <div class="col-12">

                  <div class="page-header">
                    <h1 class="page-title">
                      <?php
                      /* translators: %s: search query. */
                      printf( esc_html__( 'Resultados de: %s', 'blogkiper-child' ), '<span>' . get_search_query() . '</span>' );
                      ?>
                    </h1>
                  </div><!-- .page-header -->

                </div><!-- end.col-* -->
      <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			  the_posts_navigation();

		  else : 

			  get_template_part( 'template-parts/content', 'none' );

		  endif;
		  ?>
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.blogSec__main -->
          <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/graphic.svg" alt="Grafico Kiper" class="graphic">
        </section><!-- end.blogSec -->
      </article><!-- end.bg-gen -->

<?php
get_footer();
