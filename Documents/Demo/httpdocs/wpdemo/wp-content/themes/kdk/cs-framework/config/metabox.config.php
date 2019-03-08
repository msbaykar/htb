<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Custom Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Section 1',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'section_1_text',
          'type'  => 'text',
          'title' => 'Text Field',
        ),
        // end: a field

        array(
          'id'    => 'section_1_textarea',
          'type'  => 'textarea',
          'title' => 'Textarea Field',
        ),

        array(
          'id'    => 'section_1_upload',
          'type'  => 'upload',
          'title' => 'Upload Field',
        ),

        array(
          'id'    => 'section_1_switcher',
          'type'  => 'switcher',
          'title' => 'Switcher Field',
          'label' => 'Yes, Please do it.',
        ),

      ), // end: fields
    ), // end: a section

    // begin: a section
    array(
      'name'  => 'section_2',
      'title' => 'Section 2',
      'icon'  => 'fa fa-tint',
      'fields' => array(

        array(
          'id'      => 'section_2_color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 1',
          'default' => '#2ecc71',
        ),

        array(
          'id'      => 'section_2_color_picker_2',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 2',
          'default' => '#3498db',
        ),

        array(
          'id'      => 'section_2_color_picker_3',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 3',
          'default' => '#9b59b6',
        ),

        array(
          'id'      => 'section_2_color_picker_4',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 4',
          'default' => '#34495e',
        ),

        array(
          'id'      => 'section_2_color_picker_5',
          'type'    => 'color_picker',
          'title'   => 'Color Picker 5',
          'default' => '#e67e22',
        ),

      ),
    ),
    // end: a section

  ),
);

// -----------------------------------------
// Page Side Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => 'seo',
  'title'     => 'Seo Ayarları',
  'post_type' => 'post',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'seo',
      'fields' => array(



        array(
          'id'            => 'seo_title',
          'type'          => 'text',
          'attributes'    => array(
            'placeholder' => 'Sayfa ismi giriniz... Boş bırakırsanız otomatik olarak sayfa adını yazar'
          )
        ),
        array(
          'id'            => 'seo_desc',
          'type'          => 'textarea',
          'attributes'    => array(
            'placeholder' => 'Sayfa Açıklaması giriniz...'
          )
        ),
        array(
          'id'            => 'seo_key',
          'type'          => 'textarea',
          'attributes'    => array(
            'placeholder' => 'Sayfa Anahtar Kelimelerini giriniz... örnek : araba,lastik,jant...',

          )
        ),



      ),
    ),

  ),
);
// -----------------------------------------
// Page Side Metabox Options               -
// -----------------------------------------
$options[]    = array(
  'id'        => 'seo',
  'title'     => 'Seo Ayarları',
  'post_type' => 'page',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'seo',
      'fields' => array(



        array(
          'id'            => 'seo_title',
          'type'          => 'text',
          'attributes'    => array(
            'placeholder' => 'Sayfa ismi giriniz... Boş bırakırsanız otomatik olarak sayfa adını yazar'
          )
        ),
        array(
          'id'            => 'seo_desc',
          'type'          => 'textarea',
          'attributes'    => array(
            'placeholder' => 'Sayfa Açıklaması giriniz...'
          )
        ),
        array(
          'id'            => 'seo_key',
          'type'          => 'textarea',
          'attributes'    => array(
            'placeholder' => 'Sayfa Anahtar Kelimelerini giriniz... örnek : araba,lastik,jant...',

          )
        ),



      ),
    ),

  ),
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'urun_ozellikleri',
  'title'     => 'Ürün Özellikleri',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

        array(
          'id'    => 'gorunum',
          'type'  => 'text',
          'title' => 'Görünüm',
        ),
        array(
          'id'    => 'aktif',
          'type'  => 'text',
          'title' => 'Aktif Madde',
        ),
        array(
          'id'    => 'ph',
          'type'  => 'text',
          'title' => 'PH / Şarj',
        ),
        array(
          'id'    => 'raf',
          'type'  => 'text',
          'title' => 'Raf Ömrü',
        ),

        array(
          'id'    => 'karakter',
          'type'  => 'textarea',
          'title' => 'KAREKTERİSTİK',
        ),
        array(
          'id'    => 'uygulama',
          'type'  => 'textarea',
          'title' => 'UYGULAMA',
        ),





      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
