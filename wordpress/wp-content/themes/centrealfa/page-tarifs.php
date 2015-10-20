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
         while(have_posts()):the_post();?>
       <?php the_content(); ?>
        <?php endwhile;endif;?>
       <ul class="tarif layout">
       <?php $args = array( 'post_type' => 'tarifs' );
       $the_query = new WP_Query( $args );

       if ( $the_query->have_posts() ) :
         while ( $the_query->have_posts() ) : $the_query->the_post();?><li class="tarif__item layout__item u-1/2">
           <div class="tarif__container">
             <h2 class="tarif__title"><?php the_title();?></h2>
             <p class="tarif__prix"><?php echo(get_field('premier_prix'));?></p>
             <?php if(!is_null(get_field('deuxieme_prix'))):?><p class="tarif__prix"><?php echo(get_field('deuxieme_prix'));?></p><?php endif;?>
             <?php if(!is_null(get_field('troisieme_prix'))):?><p class="tarif__prix"><?php echo(get_field('troisieme_prix'));?></p><?php endif;?>
             <?php if(strlen(get_field('remarque'))):?><p class="tarif__rem"><?php echo(get_field('remarque'));?></p><?php endif;?>
            </div>
         </li><?php endwhile;endif;?>
     </ul>
     </div>
   </div>
 </div>
<?php get_footer();?>
