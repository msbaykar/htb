<?php
/* Template Name: Products Page
*
*
*/
get_header();
?>
<main>
 <div class="productsContainer">
   <div class="productNav">
     <div class="productNavContent">
       <form>
         <input type="text" name="search" value="" id="search" placeholder="Ürün Arayın...">
       </form>
       <div id="productMenuList">
         <a href="#">Ürün listesi</a>
       </div>
     </div>

        <div class="productMenu"id="productsMenu">
          <ul>
            <?php query_posts('showposts=200&orderby=date&cat=3'); ?>

         <?php if (have_posts()): while(have_posts()): the_post(); ?>

               <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
         <?php endwhile; ?>
         <?php endif; ?>


          </ul>
        </div>
   </div>
   <div class="productContent">
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <?php  $meta_data = get_post_meta( $post->ID, 'urun_ozellikleri', true ); ?>

      <div class="productName">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="productSubName">
        <h2><?php the_content(); ?></h2>
      </div>
      <div class="productBlockName">
        ÖZELLİKLER
      </div>
      <!-- productBlockContent -->
      <div class="productBlockContent">
        <div class="productSubblock">
          <span>Görünüm</span>
          <hr>
            <?php echo $meta_data['gorunum']; ?>
        </div>
        <div class="productSubblock">
          <span>Aktif Madde</span>
          <hr>
          <?php echo $meta_data['aktif']; ?>

        </div>
        <div class="productSubblock">
          <span>PH/ŞARJ</span>
          <hr>
          <?php echo $meta_data['ph']; ?>

        </div>
        <div class="productSubblock">
          <span>Raf Ömrü</span>
          <hr>
          <?php echo $meta_data['raf']; ?>

        </div>
      </div>
      <!-- productBlockContent -->
      <div class="productBlockName">
        KAREKTERİSTİK
      </div>
      <div class="productBlockContent">
        <?php echo $meta_data['karakter']; ?>


      </div>
      <div class="productBlockName">
        UYGULAMA
      </div>
      <div class="productBlockContent">
        <?php echo $meta_data['uygulama']; ?>


      </div>

      <div class="infoBlock">
      <p>  Bu dökümanda verilen bütün bilgi ve tavsiyeler yönlendirme amaçlı olup ,fabrika ve imalat şartlarından
doğacak problemlerden dolayı hiçbir sorumluluk kabul edilemez.</p>
<p>Değişik test ve analiz metodlarından dolayı verilen bütün bilgiler yapılan değişikliklere duyarlıdır.
</p>
<p>Ürünleri kullanmadan önce lütfen kullanacağınız ürünlerin MSDS dökümanlarını dikkatle okuyunuz
</p>        </div>



 <?php endwhile; endif; ?>
    </div>
 </div>

</main>

<?php get_footer(); ?>
