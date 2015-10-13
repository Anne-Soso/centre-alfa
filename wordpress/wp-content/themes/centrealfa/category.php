<?php get_header();?>
<section>
  <h2>Les supers articles du <em>mini blog</em></h2>
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

<?php get_footer();?>
