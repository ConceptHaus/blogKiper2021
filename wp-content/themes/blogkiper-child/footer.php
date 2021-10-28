          </div>
        </main>

        <!-- footer -->
        <footer class="g-footer" data-blur-content>
          <div class="container">
            <div class="row align-items-center">

              <div class="col-12">
                <div class="g-footer__box">
              <?php
                wp_nav_menu( array(
                  'items_wrap'     => '<ul class="g-footer__box g-footer__box--items">%3$s</ul>',
                  'theme_location' => 'menu-footer',
                  'container'       => '',
                  'container_class' => '',
                  'container_id'    => '',
                  'before'          => '',
                  'after'           => '',
                ));
              ?>
                </div><!-- end.g-footer__box -->
              </div><!-- end.col-* -->
              <div class="col-12">
                <div class="g-footer__box">
                  <div class="g-footer__box g-footer__box--brand">
                    <p class="desclink">
                      Todos los Derechos Reservados <?php echo date('Y'); ?>
                    </p>
                  </div><!-- end.g-footer__box--brand -->
                </div><!-- end.g-footer__box -->
              </div><!-- end.col-* -->
              
            </div><!-- end.row -->
          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

    </body>
</html>
