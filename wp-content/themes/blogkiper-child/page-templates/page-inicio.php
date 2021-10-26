<?php
/*
* Template Name: Blog Template
* @package Blog_Kiper_Child
*/
get_header();
global $post;
?>      

<?php if(have_posts()): while(have_posts()) : the_post(); ?>
      <article class="bg-gen"> 
        <section class="blogSec">
          <div class="blogSec__main">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-9">
                  <?php echo do_shortcode('[ajax_load_more id="listBlogPost" container_type="div" css_classes="ctAjax" post_type="blog-post" posts_per_page="9" scroll="false" transition_container_classes="row" progress_bar="true" progress_bar_color="000000" button_label="Mostrar más"]'); ?>
                </div><!-- end.col-* -->
                <div class="col-md-3">
                  <div class="popularesCt">
                    <h2>¡Hola!</h2>
                    <hr>
                    <h5>Post Populares</h5>
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $blogsmall = array(
    'post_type'   => 'blog-post',
    'tax_query' => array(
      array(
          'taxonomy' => 'populares',
          'field' => 'slug',
          'terms' => 'mas-populares',
      ),
    ),
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order'       => 'ASC',
   );
   $inn = 0;
   $blogsmall = new WP_Query( $blogsmall );
?>
<?php if($blogsmall->have_posts()) : while($blogsmall->have_posts()) : $blogsmall->the_post(); ?>
                    <div class="boxBlog boxBlog--small">
                      <div class="boxBlog__image">
                        <?php if(has_post_thumbnail()) : ?>
                          <?php echo the_post_thumbnail('blog-small'); ?>
                        <?php else: ?>
                          <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                          <a href="<?php the_permalink(); ?>" class="boxBlog__link">Leer más</a>
                      </div>
                      <div class="boxBlog__desc">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      </div><!-- end.boxBlog__image -->
                    </div><!-- end.boxBlog -->
                    <?php $inn ++; endwhile; ?>
<?php else : ?>
                      <div class="blogSec__notfound">
                        <h3>Ooops!</h3>
                        <p>No se encontaron datos en Blog</p>
                      </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
                    <hr>
                    <div class="popularesCt__news">
                      <h2>Únete a nuestro newsletter</h2>
                      <div class="formNews">
                        <?php echo do_shortcode('[contact-form-7 id="34" title="Newsletter form"]'); ?>
                      </div>
                    </div>
                  </div><!-- end.popularesCt -->
                </div><!-- end.col-* -->
              </div><!-- end.row --> 
            </div><!-- end.container --> 
          </div><!-- end.blogSec__main -->
          <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/graphic.svg" alt="Grafico Kiper" class="graphic">
        </section>

      </article><!-- end.article inicio -->
<?php endwhile; else: ?>

<?php endif; ?>

<?php
get_footer();