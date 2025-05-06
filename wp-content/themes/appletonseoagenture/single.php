<?php get_header() ?>


<?php
if (have_posts()) :
while(have_posts()) : the_post();  ?>

<main class="contenedorpost">
<section class="titlepost" id="titlepost">
<div class="ersteabsatz">
                <p class="fondo"><?php the_title() ?></p>
            </div>
<div class="tags">
    <?php
    $tags = get_the_tags();
    if ($tags) {
        foreach ($tags as $tag) {
            echo '<span>' . $tag->name . '</span>';
            
        }
    }
    ?>
</div>
<h1><?php the_title()  ?></h1>
<span><?php echo get_the_date(); ?></span>
<?php  ?>
</section>

<section id="contenidoblog">
<div class="completoblog">
    <?php the_content() ?>
</div>
</section>

<section id="angebotanfordern">
    <div class="containangebot">
        <span class="titlespan">Bringen wir deine Website auf das nächste Level?</span>
        <p>Teste unseren Service völlig unverbindlich. Wenn du bleibst, liegt es daran, dass wir wirklich die Ergebnisse liefern, die dein Unternehmen benötigt.</p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'preise' ) ) );  ?>" class="buttom">Angebot anfordern</a>
    </div>
</section>

<section id="relatedpost">
<?php
// Obtener las categorías del artículo actual
$categories = get_the_category();
$category_ids = array();
foreach ($categories as $category) {
    $category_ids[] = $category->term_id;
}

// Consulta para obtener artículos relacionados basados en las categorías del artículo actual
$related_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3, // Puedes ajustar el número de artículos relacionados que deseas mostrar
    'post__not_in' => array($post->ID), // Excluir el artículo actual
    'category__in' => $category_ids, // Mostrar solo artículos que pertenecen a las mismas categorías
    'orderby' => 'rand', // Ordenar aleatoriamente para variabilidad
);

$related_query = new WP_Query($related_args);

// Mostrar los artículos relacionados si hay alguno
if ($related_query->have_posts()) :
    ?>
    <div class="related-posts">
        <h3>Zusammenhängende Posts</h3>
        <ul>
            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('custom-size-small','post-thumbnail', ['class' => 'bilderblogs']); ?>
                 <?php the_title(); ?>
                 <a href="<?php the_permalink(); ?>" style="color:#6139b8;" >Mehr lesen</a>
                </a></li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif;

// Restablecer datos del post
wp_reset_postdata();
?>

</section>


</main>

<?php
    endwhile;
endif;
?>
<?php get_footer() ?>

