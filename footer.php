</main>
      <!-- /.container -->

      <footer class="blog-footer">
        <nav class="navbar navbar-expand navbar-light">
                <div class="container-fluid">
                  <div
                    class="collapse navbar-collapse justify-content-md-center"
                  >
                     <?php 
                        wp_nav_menu(array(
                            'container' => '', // Leaving it empty removes the <div> container.
                            'menu_class'=>'navbar-nav',
                            'theme_location'=>'footer'
                        ));
                    ?>
                  </div>
                </div>
              </nav>
        <p>Copyright © 2015-<?php echo date('Y');?> - <a href="https://ravindernegi.com">ravindernegi.com</a> | Website hosted on <a href="http://www.hostinger.com/RAVINDERNEGI" target="_blank">Hostinger</a></p>
      </footer>
      <?php wp_footer() ?>
    </div>
  </body>
</html>