<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php  if (have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>

  <?php  $seo_data = get_post_meta( $post->ID, 'seo', true ); ?>

  <title>KDK |
    <?php if (!empty($seo_data['seo_title'] )) {
  echo $seo_data['seo_title'] ;
  } else { the_title(); }?>
</title>
  <meta name="title" content="KDK <?php if (!empty($seo_data['seo_title'] )) {
  echo $seo_data['seo_title'] ;
  } else { the_title(); }?>" />
  <meta name="description" content="<?php if (!empty( $seo_data['seo_desc'] )) {
  echo $seo_data['seo_desc'];
  } ?>" />
  <meta name="keywords" content="<?php if (!empty( $seo_data['seo_key'] )) {
  echo $seo_data['seo_key'];
  } ?>" />
  <?php  endwhile; ?>
  <?php  endif; ?>
  <meta name="author" content="mega sistem" />
  <meta name="owner" content="KDK Kimya " />
  <meta name="copyright" content="(c) 2019" />

   <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Spectral+SC" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
<?php wp_head(); ?>

</head>

<body>
  <header>
    <div class="menu-top">
      <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
      </div>
      <div class="hamburgerMenu">
        <a href="javascript:void(0)" onclick="openNav()" id="hambBtn"><span></span></a>
        <a href="javascript:void(0)" onclick="closeNav()" id="hambBtnClose"><span></span></a>

      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

      <div class="lang">
        <a href="<?php  echo cs_get_option('langlink') ?>">
          Tr
        </a>
        <a href="<?php  echo cs_get_option('langling') ?>">
          En
        </a>
      </div>
    </div>
    <div class="menu-right">
    <ul class="socialMenu">
      <?php $f = cs_get_option('f'); ?>
      <?php $t = cs_get_option('t'); ?>
      <?php $l = cs_get_option('l'); ?>
      <?php $i = cs_get_option('i'); ?>
      <?php $email = cs_get_option('mail'); ?>

      <?php if (!empty($f)): ?>
      <li><a href="<?php echo $f ?>">Facebook</a></li>
      <?php endif; ?>
      <?php if (!empty($t)): ?>
      <li><a href="<?php echo $t ?>">Twitter</a></li>
      <?php endif; ?>
      <?php if (!empty($l)): ?>
      <li><a href="<?php echo $l ?>">Linkedin</a></li>
      <?php endif; ?>
      <?php if (!empty($i)): ?>
      <li><a href="<?php echo $i ?>">Instagram</a></li>
      <?php endif; ?>
      <?php if (!empty($email)): ?>
      <li><a href="<?php echo $email ?>">info@</a></li>
      <?php endif; ?>
    </ul>

    </div>
    <div id="menuMobil">
      <?php wp_nav_menu( array( 'theme_location' => 'mobil-menu','container' => false,'items_wrap' => '<ul class="mobilNav">%3$s</ul>', ) ); ?>

      <ul class="socialMenu">
        <?php $f = cs_get_option('f'); ?>
        <?php $t = cs_get_option('t'); ?>
        <?php $l = cs_get_option('l'); ?>
        <?php $i = cs_get_option('i'); ?>
        <?php $email = cs_get_option('mail'); ?>

        <?php if (!empty($f)): ?>
        <li><a href="<?php echo $f ?>">Facebook</a></li>
        <?php endif; ?>
        <?php if (!empty($t)): ?>
        <li><a href="<?php echo $t ?>">Twitter</a></li>
        <?php endif; ?>
        <?php if (!empty($l)): ?>
        <li><a href="<?php echo $l ?>">Linkedin</a></li>
        <?php endif; ?>
        <?php if (!empty($i)): ?>
        <li><a href="<?php echo $i ?>">Instagram</a></li>
        <?php endif; ?>
        <?php if (!empty($email)): ?>
        <li><a href="<?php echo $email ?>">info@</a></li>
        <?php endif; ?>



      </ul>

    </div>
  </header>
