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
        <?php $args=array('taxonomy'=>'equipes','hide_empty'=>'0','hierarchical'=>1,'orderby'=>'id');$equipes=get_categories($args); ?>
        <?php
        foreach($equipes as $equipe):?>
        <h2 class="subtitle"><?php echo $equipe->name;?></h2>
         <div class="equipe layout">
           <?php
           $args = array( 'post_type' => 'employes' );
           $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
                  <?php $tax_names=array();$taxs_id=get_field('fonction');
                      foreach($taxs_id as $tax_id){
                        array_push($tax_names,get_term($tax_id,'fonction'));
                      }
                    ?>
                    <?php $equipes_names=array();$equipe_ids=get_field('equipes');
                        foreach($equipe_ids as $equipe_id){
                          array_push($equipes_names,get_term($equipe_id,'equipes')->name);
                        }
                        if(in_array($equipe->name,$equipes_names)):
                      ?>

                    <div class="layout__item u-3/10 equipe__item"><img src="<?php echo get_field('photo')?>" alt="" class="equipe__img">
                      <h3 class="equipe__nom"><?php the_title();?></h3>
                      <div class="equipe__poste">
                      <?php foreach($tax_names as $tax_name):?>
                      <?php echo $tax_name->name;?><br>
                      <?php endforeach;?>
                      </div>
                    </div>
           <?php endif;endwhile;endif;?>
         </div>
         <?php endforeach;?>
      </div>
   </div>
 </div>
<?php get_footer();?>
