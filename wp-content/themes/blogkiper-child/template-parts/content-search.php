<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Kiper_Child
 */

?>

										<div class="col-12 col-md-6 col-lg-4">
                      <div class="boxBlog">
                        <div class="boxBlog__image">
                        <?php if(has_post_thumbnail()) : ?>
                          <?php echo the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                          <a href="<?php the_permalink(); ?>" class="boxBlog__link">Leer más</a>
                        </div>
                        <div class="boxBlog__desc">
                          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                          <div class="boxBlog__divider"></div>
                          <div class="rte">
                            <?php the_excerpt(); ?>
                          </div>
                          <div class="boxBlog__date">
                            <p class="fecha"><i class="fa fa-calendar"></i> <?php the_time( 'F j, y' ); ?></p>
                          </div>
                        </div>
                      </div>
                    </div><!-- #post-<?php the_ID(); ?> -->
