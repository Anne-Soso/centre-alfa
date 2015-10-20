<?php get_header();?>
<div class="pres pres--accueil">
  <div class="pres__wrapper wrapper">
    <div class="pres__text"><?php bloginfo('description');?>
      <div class="pres__tel">Téléphonez au <?php echo get_option('phone_contact');?></div>
    </div>
    <form action="#" method="get" class="form pres__form">
      <label for="keywords" class="form__label pres__label pres__label--accueil">Votre Recherche</label><!--
      --><input type="text" id="keywords" name="keywords" class="form__text pres__input pres__input--accueil"><!--
      --><input type="submit" value="Rechercher" class="form__submit button pres__submit pres__submit--accueil">
    </form>
  <!-- <?php get_search_form( true ); ?> -->
  </div>
</div>
<div class="wrapper">
  <div class="layout">
    <section class="news layout__item u-2/3">
      <h2>Actualités du Centre</h2>
      <ul>
        <?php $args = array( 'post_type' => 'news' );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();?>
          <li class="news__item layout">
            <time class="news__date layout__item u-1/4"><?php the_time('d/m/y');?></time><!--
            --><div class="layout__item u-3/4"><?php the_content();?></div>
          </li>
        <?php endwhile;endif;?>
      </ul>
    </section><!--
    --><a href="<?php echo get_permalink( get_page_by_path( 'inscription-au-groupe-tabalfa' ) );?>"class="layout__item tabalfa button u-2/7 float-right">
      S'inscrire au groupe Tabalfa
    </a>
  </div>
  <section class="map">
    <h2>Où nous trouver ?</h2>
    <address class="map__address"><?php echo get_option('adresse');?></address>
    <div id="contactMap" class="map__container"></div>
  </section>
  <script type="text/javascript">
    var addressRdv="<?php echo get_option('adresse');?>";
    var markerMap="<?php echo get_template_directory_uri(); ?>"+'/img/marker-map.svg';
  </script>
</div>
<?php get_footer();?>
