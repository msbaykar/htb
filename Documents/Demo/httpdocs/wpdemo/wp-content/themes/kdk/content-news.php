<!--  newsContent -->
<?php query_posts('showposts=5&orderby=date&cat=1'); ?>
<?php if (have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>
    <a class="newsContent" href="<?php the_permalink(); ?>">
      <div class="newsContentText">
       <div class="newsContentTextContent">

         <h3><?php the_title(); ?></h3>
         <p><?php the_content(); ?> </p>
       </div>
       <div class="newsContentInfo">
         <?php the_date(); ?> - <?php the_author(); ?>
       </div>
      </div>

      <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
      <div class="newsContentImg" style="background-image:url(<?php echo $url ?>)">

      </div>

    </a>
    <!--  newsContent -->
  <?php endwhile; ?>
<?php endif; ?>
