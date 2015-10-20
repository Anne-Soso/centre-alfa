<?php get_header();
 get_template_part( 'pres' ); ?>
 <div class="page-wrap wrapper">
   <div class="main-content layout">
     <div class="layout__item u-3/10 main-content__side">
        <?php get_template_part( 'side' ); ?>
      </div><!--
      --><div class="layout__item u-7/10 main-content__main">
       <h1><?php the_title();?></h1>
       <?php if(have_posts()):
         while(have_posts()):the_post();
         ?>
       <?php the_content(); ?>
     <?php endwhile;endif;?>
     <div class="job">
     <?php $args = array( 'post_type' => 'jobs' );
     $the_query = new WP_Query( $args );

     if ( $the_query->have_posts() ) :
       while ( $the_query->have_posts() ) : $the_query->the_post();?>
       <h2 class="subtitle job__title"><?php the_title();?></h2>
       <p class="job__type">
         Type d'engagement : <?php echo(get_field('type')->name);?>
       </p>
       <div><?php the_content();?></div>
       <h3>Conditions requises</h3>
       <div><?php echo(get_field('conditions_requises'));?></div>

     <?php endwhile;
      else:?>
      <p>Nous n'avons aucune offre pour le moment.</p>
      <?php endif;?>
     </div>
   </div>
 </div>
 </div>
<?php get_footer();?>
