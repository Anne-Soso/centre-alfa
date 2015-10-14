  <?php wp_footer();?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=false"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <footer class="page-footer">
    <div class="wrapper">
      <h2 class="hidden-title">Pied de page</h2>
      <nav>
        <h3 class="hidden-title">Navigation secondaire</h3>
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container'=>' ',
          'menu_class'=> 'page-footer__list',
        ) ); ?>

      </nav>
      <p class="page-footer__right">Designed by <a href="http://as-pirlet.be">as-pirlet.be</a></p>
    </div>
  </footer>
  </body>
</html>
