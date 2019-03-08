<?php
/* Template Name: Front Page
*
*
*/
get_header();
 ?>
 <!-- main -->
 <main>
   <div class="slider">
     <?php if(has_post_thumbnail()) {
       the_post_thumbnail();
     } ?>

     <div class="sliderText">
       <?php if (have_posts()): while (have_posts()) : the_post();
         // code... ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
       <?php endif; ?>

      
     </div>
   </div>
 </main>
 <!-- main end -->


<?php get_footer(); ?>
