<?php
/* Template Name: News
*
*
*/
get_header();
?>
<main>

 <div class="newsContainer">
    <div class="newsContainerHeader">
      <h1>KDK HABERLER </h1>
      <h2>KDK olarak yaptığımız tüm faaliyetlerimizi ve haberleri bu sayfadan takip edebilirsiniz.</h2>
    </div>
<?php // if (have_posts()): ?>
  <?php //while(have_posts()) : the_post(); ?>
    <?php get_template_part('content','news'); ?>

  <?php // endwhile; ?>
<?php // endif; ?>
 </div>

</main>

<?php get_footer(); ?>
