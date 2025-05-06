<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <main class="containerprincipalservicios">
            <section id="ersteinhalt" class="inicio">
                <div class="alletextenersteinhalt alletextenauchpreise allesservicios">
                    <div class="ersteabsatz">
                        <?php $fieldpfondo = get_field('textoinicialpfondo');
                        if (isset($fieldpfondo)) : ?>
                            <p class="fondo"><?php echo esc_html($fieldpfondo); ?></p>
                        <?php endif; ?>

                    </div>
                    <div class="title">
                        <?php the_title('<h1>', '</h1>'); ?>
                        <div class="dreisachen">
                            <p> <?php the_field('beschreibungservices') ?> </p>
                        </div>
                    </div>

                    <div class="tagsservices">
                        <div class="spanmiticon">
                            <img src="<?php echo get_field('iconservices') ?>" alt="iconservices">
                            <span><?php the_field('tags1services') ?></span>
                        </div>
                        <div class="linevertical"></div>
                        <div class="spanmiticon">
                            <img src="<?php echo get_field('iconservices') ?>" alt="iconservices">
                            <span><?php the_field('tags2services') ?></span>
                        </div>
                        <div class="linevertical"></div>

                        <div class="spanmiticon">
                            <img src="<?php echo get_field('iconservices') ?>" alt="iconservices">
                            <span><?php the_field('tags3services') ?></span>
                        </div>

                    </div>

                    <div class="buttominicio">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'preise' ) ).'/#formularcompletomitinformation' );  ?>" onclick="smoothScroll('#formularcompletomitinformation')" class="buttom">Fordere dein Angebot an</a>
                    </div>

                </div>
            </section>

            <section id="inhaltjedeseinzelnendienstes">
                <?php the_content() ?>
            </section>
            
            <section id="angebotanfordern">
    <div class="containangebot">
        <span class="titlespan">Bringen wir deine Website auf das nächste Level?</span>
        <p>Teste unseren Service völlig unverbindlich. Wenn du bleibst, liegt es daran, dass wir wirklich die Ergebnisse liefern, die dein Unternehmen benötigt.</p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'preise' ) ) );  ?>" class="buttom">Angebot anfordern</a>
    </div>
</section>

        </main>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>