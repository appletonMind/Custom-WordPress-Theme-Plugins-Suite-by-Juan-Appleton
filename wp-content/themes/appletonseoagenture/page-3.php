<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <main class="containerprincipalservicios containerprincipalagb">

        <div class="title titlearreglar"> <?php the_title('<h1>', '</h1>'); ?></div>

        <section id="inhaltjedeseinzelnendienstes">
                <?php the_content() ?>
            </section>

    </main>

<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>