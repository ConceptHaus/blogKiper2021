<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Kiper_Child
 */

?>

										<div id="post-<?php the_ID(); ?>" class="col-12">
                      <div class="boxBlog boxBlog--bigimg">
                      <?php 
											$image = get_field('cover_img');
											if( !empty( $image ) ): ?>
                        <div class="boxBlog__image">
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												</div>
											<?php endif; ?>
												<div class="boxBlog__tags">
													<nav class="tagger">
														<?php the_tags('', '', ''); ?>
													</nav><!-- end.tagger -->
												</div><!-- end.boxBlog__tags -->
                        <div class="boxBlog__desc">
                          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                          <div class="boxBlog__divider"></div>
                          <div class="rte">
													<?php
													the_content(
														sprintf(
															wp_kses(
																/* translators: %s: Name of current post. Only visible to screen readers */
																__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blogkiper' ),
																array(
																	'span' => array(
																		'class' => array(),
																	),
																)
															),
															wp_kses_post( get_the_title() )
														)
													);

													wp_link_pages(
														array(
															'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogkiper' ),
															'after'  => '</div>',
														)
													);
													?>
                          </div>
                          <div class="boxBlog__date">
                            <p class="fecha"><i class="fa fa-calendar"></i> <?php the_time( 'F j, y' ); ?></p>
                          </div>
                        </div>
                      </div>
                    </div><!-- #post-<?php the_ID(); ?> -->
