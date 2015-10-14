<?php get_header();
 get_template_part( 'pres' ); ?>
 <div class="page-wrap wrapper">
   <div class="main-content layout">
     <div class="layout__item u-3/10 main-content__side">
        <?php get_template_part( 'side' ); ?>
      </div><!--
      --><div class="layout__item u-7/10 main-content__main">
       <h1><?php the_title();?></h1>
       <?php the_content(); ?>
       <div class="clearfix paginate"><a href="" class="paginate__prev button float-left">Public concerné</a><a href="#" class="paginate__next button float-right">Un conte pour les enfants</a></div>
     </div>
   </div>
 </div>
<?php get_footer();?>
