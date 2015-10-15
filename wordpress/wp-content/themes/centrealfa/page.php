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
     </div>
   </div>
 </div>
<?php get_footer();?>
