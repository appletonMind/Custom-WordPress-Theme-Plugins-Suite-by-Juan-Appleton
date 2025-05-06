<?php 


function init_template()
{
    //imagen destacada
    add_theme_support('post-thumbnails');
    //titulo para seo
    add_theme_support('title-tag');
    // Tamaños de imagen personalizados
    add_image_size('custom-size-small', 400, 400, true); // Tamaño pequeño
    add_image_size('custom-size-large', 1280, 720, true); // Tamaño grande
    add_image_size('miniaturas', 600, 600, true); // miniaturas
    add_theme_support('custom-logo', array(
      'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    ));

    register_nav_menus(
        array(
            'menuprincipal' => esc_html__( 'Hauptnavigation', 'appletonseoagenture' ),
            'submenu' => esc_html__( 'SubMenu', 'appletonseoagenture' ),
            'redessociales' => esc_html__( 'RedesSociales - Navigation', 'appletonseoagenture' ),
            'menuprincipalsoloclick' => esc_html__( 'Hauptmenü nur ein click Navigation', 'appletonseoagenture' ),
        )
    );
}

add_action('after_setup_theme', 'init_template');

function registrar_sidebar()
{
    register_sidebar(array(
        'name' => 'Pie de página',
        'id'  => 'footer',
        'description' => 'Zona de Widgets para pie de página',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ));
}

add_action('widgets_init', 'registrar_sidebar');

function hinzufuengecss(){
  wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', false, '1.1', 'all');
    wp_enqueue_style( 'haut', get_template_directory_uri() . '/assets/css/principal.css', false, '1.1', 'all');
    wp_enqueue_style( 'paginainicio', get_template_directory_uri() . '/assets/css/paginainicio.css', ["haut"], '1.1', 'all');
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', ["paginainicio","haut"], '1.1', 'all');
    wp_enqueue_style( 'kontakt', get_template_directory_uri() . '/assets/css/kontakt.css', ["paginainicio","haut"], '1.1', 'all');
    wp_enqueue_style( 'style', get_stylesheet_uri(), ["haut"] );
    wp_enqueue_script('haupt', get_template_directory_uri() . '/assets/js/haupt.js' ,'','',true);
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu/menumovil.js' ,'','',true);

    //nur diese  css und js erscheinen in mitarbeiter werden
//     $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; $url_blog = strpos(strval($url), "/mitarbeiter-werden");
// if( $url_blog ) {
// wp_enqueue_style("mitarbeiterwerden", get_template_directory_uri() . '/assets/css/mitarbeiter-werden.css',array(),'1.0.0');
// wp_enqueue_script('miterbeiterwerdenjs', get_template_directory_uri() . '/assets/js/anderejs/arbeitet.js' ,'','',true);

//   global $post;
//   $custom_field_value = get_post_meta( $post->ID, 'arrow_list', true );
//   $image_url = wp_get_attachment_url( $custom_field_value );
//   wp_localize_script( 'miterbeiterwerdenjs', 'custom_field', $image_url );
// }

$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; 
$url_ueberuns = strpos(strval($url), "/ueber-uns") !== false; // Corrección aquí
$url_blogs = strpos(strval($url), "/blog-seo-agenture") !== false || strpos(strval($url), "/blogs") !== false;

// Corrección del error tipográfico en la asignación de $url_webserivices
$url_webserivices = strpos(strval($url), "/webdesign-in-buchs-st-gallen") !== false; 

if( $url_ueberuns ) {
    wp_enqueue_style( 'ueberuns', get_template_directory_uri() . '/assets/css/ueberuns.css', false, '1.1', 'all');
}

if( $url_blogs ) {
    wp_enqueue_style( 'blogs', get_template_directory_uri() . '/assets/css/blog.css', false, '1.1', 'all');
}

if($url_webserivices){ // Corrección aquí
    wp_enqueue_script('carrucelmovimiento', get_template_directory_uri() . '/assets/js/carrucelmovimiento.js' ,'','',true);
}


};

add_action("wp_enqueue_scripts", "hinzufuengecss");



    //Gutenberg deaktivieren

// add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
// function disable_gutenberg_editor()
// {
// return false;
// }


// add_filter("use_block_editor_for_post_type", "disable_gutenberg_for_posts_and_pages", 10, 2);
// function disable_gutenberg_for_posts_and_pages($use_block_editor, $post_type)
// {
//     // Verificar si el tipo de entrada es 'page'
//     if ($post_type === 'page') {
//         $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : false);
//         if ($post_id && $post_id == 44) {
//             return $use_block_editor; // Mantener Gutenberg activado para la página con ID 44
//         } else {
//             return false; // Desactivar Gutenberg para todas las demás páginas
//         }
//     } elseif ($post_type === 'post') {
//         return true; // Mantener Gutenberg activado para el tipo de entrada 'post'
//     }
//     return $use_block_editor; // Mantener el estado actual para otros tipos de entrada
// }

add_filter("use_block_editor_for_post_type", "disable_gutenberg_for_posts_and_pages", 10, 2);

function disable_gutenberg_for_posts_and_pages($use_block_editor, $post_type)
{
    // Verificar si el tipo de entrada es 'page' o 'post'
    if ($post_type === 'page' || $post_type === 'post') {
        $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : false);
        // Array con las IDs de página y post donde se mantendrá activado Gutenberg
        $allowed_ids = array(44, 401, 407, 421, 388, 424, 418, 404, 410, 415);
        // Verificar si el ID de la página o post actual está en el array de IDs permitidas
        if ($post_id && in_array($post_id, $allowed_ids)) {
            return true; // Mantener Gutenberg activado para las páginas y posts permitidos
        } else {
            return false; // Desactivar Gutenberg para todas las demás páginas y posts
        }
    }
    return $use_block_editor; // Mantener el estado actual para otros tipos de entrada
}


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');


  //   $post_id = 22;
  //  $meta_key = 'parrafo-1';
  //   $meta_value = 'Trisolutions';
  // update_post_meta($post_id, $meta_key, $meta_value);


//cunston fields

remove_action('wp_head', '_wp_render_title_tag', 1); // Eliminar la acción que genera la etiqueta title de WordPress
remove_action('wp_head', 'wp_robots', 1); // Eliminar la acción que genera la etiqueta meta robots de WordPress

function custom_meta_description() {
  if (is_single() || is_page()) {
      global $post;
      // Obtener los valores de los campos personalizados
      $meta_title = get_field('meta_title', $post->ID);
      $titleseo = get_field('titleseo', $post->ID);
      $meta_description = get_field('beschreibungfurseo', $post->ID);
      $follow_no_follow = get_field('follow_no_follow', $post->ID);
      $keywordsseo = get_field('keywordsseo', $post->ID);
      $canonicalurl = get_field('canonicalurl', $post->ID);

      // Construir el meta título
      $title = '';
      if (!empty($meta_title)) {
          $title = $meta_title;
      } elseif (!empty($titleseo)) {
          $title = $titleseo;
      } else {
          // Si no hay un meta título personalizado, usar el título de la publicación
          $title = get_the_title($post->ID);
      }

      // Salida del meta título
      echo '<title>'.esc_html($title).'</title>';

      // Construir la etiqueta meta description
      $description = '';
      if (!empty($meta_description)) {
          $description = $meta_description;
      } else {
          // Si no hay una descripción personalizada, usar el contenido del campo post_content como la meta descripción
          $description = strip_tags($post->post_content);
          $description = str_replace("\n", "", $description);
          $description = substr($description, 0, 155);
      }

      // Salida de la etiqueta meta description
      echo '<meta name="description" content="' . esc_attr($description) . '">';

      // Agregar la etiqueta meta robots solo una vez para cada entrada individual o página
      static $robots_added = false;
      if (!$robots_added) {
          // Agregar la etiqueta meta robots solo si follow_no_follow está presente
          if ($follow_no_follow !== '') {
              $robots_content = $follow_no_follow ? 'follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large' : 'noindex, nofollow';
              echo '<meta name="robots" content="' . esc_attr($robots_content) . '">';
          }
          $robots_added = true;
      }

      // Agregar la etiqueta meta keywords si está presente
      if (!empty($keywordsseo)) {
          echo '<meta name="keywords" content="' . esc_attr($keywordsseo) . '">';
      }

      // Agregar la etiqueta canonical si canonicalurl está presente
      if (!empty($canonicalurl)) {
          echo '<link rel="canonical" href="' . esc_url($canonicalurl) . '">';
      }
  } elseif (is_home()) {
      echo '<meta name="description" content="'.get_bloginfo( "description" ).'">';
  } elseif (is_category()) {
      echo '<meta name="description" content="Archivo de la categoría: ' . single_cat_title('', false) . '">';
  } elseif (is_tag()) {
      echo '<meta name="description" content="Archivo de la etiqueta: ' . single_tag_title('', false) . '">';
  }
}
add_action('wp_head', 'custom_meta_description');


// function remove_dashicon_style() {
//   wp_deregister_style('dashicons');
// }
// add_action('wp_enqueue_scripts', 'remove_dashicon_style');


add_action('wp_enqueue_scripts', 'agregar_custom_field_js');

function agregar_custom_field_js() {
    // Obtener el ID de la página actual
    $current_page_id = get_the_ID();

    // Verificar si la página actual tiene uno de los IDs específicos
    if (in_array($current_page_id, array(401, 407, 421, 388, 424, 418, 404, 410, 415))) {
        // Obtener el ID del campo personalizado 'iconservices' para la página actual
        $custom_field_id = get_post_meta($current_page_id, 'iconservices', true);

        // Obtener la URL de la imagen asociada al ID del campo personalizado 'iconservices'
        $custom_field_url = wp_get_attachment_url($custom_field_id);

        // Enqueue el script JavaScript solo si se encontró una URL para la imagen
        if (!empty($custom_field_url)) {
            // Enqueue el script JavaScript
            wp_enqueue_script('mi_script', get_template_directory_uri() . '/assets/js/crearimagen.js', array(), null, true);

            // Pasar la URL de la imagen al script JavaScript
            wp_localize_script('mi_script', 'custom_field_url', $custom_field_url);
        }
    }
}
