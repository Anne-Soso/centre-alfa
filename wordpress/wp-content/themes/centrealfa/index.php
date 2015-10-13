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
  </div>
</div>
<div class="wrapper">
  <section class="news layout">
    <h2 class="layout__item">Actualités du Centre</h2>
    <ul class="layout__item u-2/3">
      <li class="news__item">
        <time class="news__date">13/10/2015</time>Nous sommes désormais au complet pour les stages concernant l'année scolaire 2015-2016. Bonne chance à tous les étudiants dans la poursuite de leur recherche !
      </li>
      <li class="news__item">
        <time class="news__date">10/10/2015</time>Notre antenne de Réduction des risques "Accueil Drogues" a déménagé au 22 de la rue Florimont (Liège) où une permanence est assurée, comme par le passé : du lundi au vendredi de 13h à 17h
      </li>
      <li class="news__item">
        <time class="news__date">30/09/2015</time>Vous vous posez des questions au sujet de votre consommation d'alcool, ou celle d'un proche ?&nbsp;<a href="http://aide-alcool.be">aide-alcool.be</a>
      </li>
    </ul>
  </section>
  <section class="map">
    <h2>Où nous trouver ?</h2>
    <address class="map__address"><?php echo get_option('adresse');?></address>
    <div id="contactMap" class="map__container"></div>
  </section>
</div>
<?php get_footer();?>
