<?php
/*
* css ve Script linkleri ekleme
*/
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');

  wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);


}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/* admin bar gizleme - admin bar kaldırma */
  show_admin_bar(false);
/* Görsel izin verme */
add_theme_support( 'post-thumbnails' );
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail( array(100,100) );  // Other resolutions
/* Code star framework inc */
require_once dirname( __FILE__ ) .'/cs-framework/cs-framework.php';
/* Menu */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'mobil-menu' => __( 'Mobil Menu' ),
      'footer-menu' => __( 'Footer Menu' )

    )
  );
}
add_action( 'init', 'register_my_menus' );


// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content) {
    global $post;
    if(is_singular() || is_home()){

        // Get current page URL
        $sb_url = urlencode(get_permalink());

        // Get current page title
        $sb_title = str_replace( ' ', '%20', get_the_title());

        // Get Post Thumbnail for pinterest
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url;
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        $bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;
        $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;

       if(!empty($sb_thumb)) {
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
        }
        else {
            $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
        }

        // Based on popular demand added Pinterest too
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
        $timg = '<img src="'.get_bloginfo('stylesheet_directory') . '/images/twitter.svg" alt="twitter icon" >';
        $fimg = '<img src="'.get_bloginfo('stylesheet_directory') . '/images/facebook.svg" alt="facebook icon" >';
        $limg = '<img src="'.get_bloginfo('stylesheet_directory') . '/images/linkedin.svg" alt="linkedin icon" >';
        $wimg = '<img src="'.get_bloginfo('stylesheet_directory') . '/images/whatsapp.svg" alt="whatsapp icon" >';
        $pimg = '<img src="'.get_bloginfo('stylesheet_directory') . '/images/pinterest.svg" alt="pinterest icon" >';
        $simg = '<img src="'.get_bloginfo('stylesheet_directory') . '/images/share.svg" alt="share icon" >';


        // Add sharing button at the end of page/page content
        $content .= '<div class="social-box">';
        $content .= '<span>'.$simg.'</span>';
        $content .= '<a class="sbtn s-twitter" href="'. $twitterURL .'" target="_blank" rel="nofollow">'.$timg.'</a>';
        $content .= '<a class="sbtn s-facebook" href="'.$facebookURL.'" target="_blank" rel="nofollow">'.$fimg.'</a>';
        $content .= '<a class="sbtn s-whatsapp" href="'.$whatsappURL.'" target="_blank" rel="nofollow">'.$wimg.'</a>';
        $content .= '<a class="sbtn s-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank" rel="nofollow">'.$pimg.'</a>';
        $content .= '<a class="sbtn s-linkedin" href="'.$linkedInURL.'" target="_blank" rel="nofollow">'.$limg.'</a>';
        $content .= '</div>';
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
};
// Enable the_content if you want to automatically show social buttons below your post.

 //add_filter( 'the_content', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social','wpvkp_social_buttons');
