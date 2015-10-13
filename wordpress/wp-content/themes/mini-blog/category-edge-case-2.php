<?php get_header();?>
<section>
  <h2>Les supers articles du <em>mini blog</em> stockés dans edge case 2</h2>
  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="<?php the_ID();?>">
          <h3><?php the_title();?></h3>
          <div class="content">
            <?php the_content();?>
          </div>
        </article>
      <?php endwhile; ?>
  <?php endif; ?>
</section>
<section>
  <h2>Les articles de admin</h2>
  <?php
  $args = array( 'author_name' => 'Anne-soso' );

  // On crèe un autre contexte que celui de la page dans laquelle la boucle se trouve
  $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();?> <!-- creation du contexte sur the post -->
          <article>
            <h3><?php the_title();?></h3>
            <div class="content">
              <?php the_content();?>
            </div>
          </article>

      <?php endwhile;
  else:
      _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
  endif;
  wp_reset_postdata();

  ?>
</section>
<?php get_footer();?>
