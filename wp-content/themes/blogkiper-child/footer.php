          </div>
        </main>

        <!-- footer -->
        <footer class="g-footer" data-blur-content>
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script> 
          $('body').show();
          // $('.version').text(NProgress.version);  
          NProgress.start();
          setTimeout(function () {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>


    </body>
</html>
