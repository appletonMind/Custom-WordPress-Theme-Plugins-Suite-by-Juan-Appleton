<?php get_header(); ?>

<?php 
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
<main class="containerblogs">      
    <section id="ersteinhalt" class="inicio">
        <div class="alletextenersteinhalt">
            <div class="ersteabsatz">
                <p class="fondo">Der Blog von Appletonagentur</p>
            </div>
            <div class="title">
                <?php the_title('<h1>', '</h1>'); ?>
                <div class="dreisachen">
                    <span class="texto1span">Seo</span> °
                    <span class="texto1span">Marketing</span> °
                    <span class="texto1span">Agentur</span>
                </div>
            </div>
        </div>
    </section>

    <section class="beitraghier">
        <?php
        // Configuración de la paginación
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Obtener la página actual
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6, // Mostrar 6 publicaciones por página
            'paged' => $paged, // Página actual
            'order' => 'DESC'
        );

        $blog_posts = new WP_Query($args);

        if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) :
                $blog_posts->the_post();
        ?>
                <div class="beitragindividual">
                    <article>
                    <a href="<?php the_permalink(); ?>" class="post-link"> <!-- Enlace a la publicación -->
                        <div class="bildermitag">
        <?php the_post_thumbnail("full", ["class" => 'bilderblogs']); ?>
        <?php
$tags = get_the_tags();
if ($tags) {
    echo '<div class="post-tags">';
    foreach ($tags as $tag) {
        echo '<span class="tag">' . $tag->name . '</span>';
    }
    echo '</div>';
}
?>
</div>
<div class="textenblogs">
<span><?php echo get_the_date(); ?></span>
<h2><?php the_title(); ?></h2>
<div><?php echo wp_trim_words(get_the_content(),20, '...'); ?></div>
</div>

<div class="authorblogs">
<?php
// Obtener el grupo de campos
// Holen Sie sich die Feldgruppe
$authorbeitrag = get_field('author');

// Verificar si el grupo de campos tiene contenido
//Überprüfen, ob die Feldgruppe Inhalt hat
if ($authorbeitrag) {
    // Obtener el título del servicio
    $authorbilder = $authorbeitrag['authorbilder'];
    $autor_name = $authorbeitrag['autor_name'];
    $author_hobby = $authorbeitrag['author_hobby'];
    ?>

    <img src="<?php echo esc_url($authorbilder) ?>" alt="<?php echo esc_html( $autor_name ) ?> ">
    <div class="nameundhobby">
        <span class="name"><?php echo esc_html($autor_name) ?></span>
        <span class="hobbie"><?php echo esc_html($author_hobby) ?></span>
    </div>


<?php }; ?>
</div>
</a>
                    </article>
                </div>
        <?php
            endwhile;

            // Paginación
            echo "<div class='pagination'>";
            echo paginate_links(array(
                'total' => $blog_posts->max_num_pages // Número total de páginas
            ));
            echo "</div>";

            wp_reset_postdata(); // Restablecer los datos del post
        else :
            echo 'No se encontraron entradas.';
        endif;
        ?>
    </section>
</main>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>
