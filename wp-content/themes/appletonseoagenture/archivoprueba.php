<?php
get_header()
?>
<?php

while (have_posts()) : the_post(); ?>

    <div class="contenidoinicial organizarelotrocontenido" id="headerinicio">

    <div class="encerrarimagen">
    <div class="imagenponermitad"  >
<img src="<?php echo get_field('ejemploimagennomas') ?>" alt="ejemplo de imagen">
    </div> </div>

        <div class="letracontenido organizarletracontenido">
            <div class="imagenylista">

<div class="eltitulo eltitulootrapagina">
            <h1 class="tituloprincipalpaginashome organizarotrotitulo"><?php the_title() ?></h1>

        </div>
                <div class="encerrarlogoytexto">
                <ul>
                    <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" />
                        <?php
                        //si quieres mostrar como echo utilizas the_field pero si quieres solo obtener el valor solo utiliza get_field para obtener el valor añadirlo a una variable pero no  mostrarla en pantalla
                        the_field("startliste1")
                        ?></li>
                    <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php $texto2lista = get_post_meta(get_the_ID(), 'startliste2', true);
                                                                                                                                if (!empty($texto2lista)) {
                                                                                                                                    echo esc_html($texto2lista);
                                                                                                                                };

                                                                                                                                ?></li>
                    <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" />
                        <?php $texto3lista = get_post_meta(get_the_ID(), 'startliste3', true);
                        if (!empty($texto3lista)) {
                            echo esc_html($texto3lista);
                        };

                        ?></li>
                </ul>

                <?php
$imagenlogoallado1 = get_field('logoimagenprimeraparte');
$imagenlogoallado2 = get_field('logoimagensegundaparte');
$imagenlogoallado3 = get_field('logoimagenterceraparte');

if($imagenlogoallado1 || $imagenlogoallado2 || $imagenlogoallado3) {
    ?>
    <div class="organizarseriedeimagenes">
        <?php if($imagenlogoallado1) { ?>
            <img src="<?php echo esc_url($imagenlogoallado1); ?>" alt="por ahora cualquiercosa" class="tamanologos" />
        <?php } ?>
        <?php if($imagenlogoallado2) { ?>
            <img src="<?php echo esc_url($imagenlogoallado2); ?>" alt="por ahora cualquiercosa" class="tamanologos" />
        <?php } ?>
        <?php if($imagenlogoallado3) { ?>
            <img src="<?php echo esc_url($imagenlogoallado3); ?>" alt="por ahora cualquiercosa" class="tamanologos" />
        <?php } ?>
    </div>
    <?php
}
?>
                
                </div>
               
                <div class="textoinicial acomodardisplay">
                <p class="iniciotextobtn iniciolaotrapagina "><?php the_field('anfangstextersteteil') ?></p><span class="spanboton inicioenotrapagina" onclick="mostrartodoeltexto()">...lesen mehr</span>
                <p style="margin-top: 10px;" class="ocultartextos ocultarenotrapagina">
                    <?php the_field('anfangstextzweiterteil') ?>
                </p>

            </div>

            <div class="botoncitocontactarme">
                <button>Kontaktiere uns!</button>
            </div>

            </div>

           
        </div>
    </div>

    <!-- titulos cheveres -->

    <?php if(wp_is_mobile()){ ?>

        <div class="segundocontenido soloversionmobile" id="projektManagement"  style="background-image: url(<?php echo get_field('bilder_projektManagement') ?>);">

<div class="tituloprincipalpaginashome nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('mobile_version_mit_farbigem_titel'); } ?>;"><?php the_field('uberschrift') ?></div>


</div>

   <?php }else{ ?>
    

    <div class="encerrar2imagenes">


    <div class="fondoblancoimagentitulos">

<div class="tituloprincipalpaginashome nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('schriftfarbe_des_titels_ProjektManagement'); } ?>;"><?php the_field('uberschrift') ?></div>


    </div>

    <div class="segundocontenido arreglarimagensegundocontenido" id="projektManagement"  style="background-image: url(<?php echo get_field('bilder_projektManagement') ?>);"></div>


    </div>
    <?php } ?>

   

    <!-- terminartituloscheveres -->

    <div class="segundoconteidodiv segundoconteidodivarreglo">
        <div class="primerparragocontenido backgrounddivfarbe">

            <h3 class="tituloseccion2"><?php the_field('untertitel_1') ?></h3>
            <p><?php the_field('Beschreibung_untertitel_1') ?></p>
            <ul>
            <?php
if( have_rows('wir_lieben_projekte') ):
  while( have_rows('wir_lieben_projekte') ): the_row(); ?>
                <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_1'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_2'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_3'); ?></li>
                <?php endwhile;
endif;?>
            </ul>


        </div>

        <div class="primerparragocontenido">

            <h3 class="tituloseccion2"><?php the_field('untertitel_2') ?></h3>
            <p><?php the_field('Beschreibung_untertitel_2') ?></p>
            <ul>
            <?php  if( have_rows('wir_erzielen_wirkung') ):
  while( have_rows('wir_erzielen_wirkung') ): the_row(); ?>
                <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_1'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_2'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_3'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_4'); ?></li>
            </ul>

            <?php endwhile;
endif;?>
        </div>

    </div>

    <!-- tercer Contenido -->

    <div class="segundocontenido tercerconenidoimagen" id="trainingsUndCoaching" style="background-image: url(<?php echo get_field('bild_trainings_und_coachings') ?>);">

        <div class="tituloprincipalpaginashome nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('schriftfarbe_des_titels_trainings_und_coachings'); } ?>;" ><?php the_field('uberschrift_Trainings_und_coachings') ?></div>


    </div>

    <div class="segundoconteidodiv">
        <div class="primerparragocontenido">

            <h3 class="tituloseccion2"><?php the_field('untertitel_1_Trainings_und_coachings') ?></h3>
            <p><?php the_field('Beschreibung_untertitel_1_Trainings_und_coachings') ?></p>
            <ul>
            <?php  if( have_rows('wir_vernetzen') ):
  while( have_rows('wir_vernetzen') ): the_row(); ?>
                <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /> <?php echo get_sub_field('textliste_1'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_2'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_3'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_4'); ?></li>
            </ul>
            <?php endwhile;
endif;?>

        </div>

        <div class="primerparragocontenido backgrounddivfarbe">

            <h3 class="tituloseccion2"><?php the_field('untertitel_2_Trainings_und_coachings') ?></h3>
            <p><?php the_field('Beschreibung_untertitel_2_Trainings_und_coachings') ?></p>
            <ul>
            <?php  if( have_rows('wie_befaehigen') ):
  while( have_rows('wie_befaehigen') ): the_row(); ?>
                <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_1'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_2'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_3'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_4'); ?></li>
            </ul>
            <?php endwhile;
endif;?>

        </div>

    </div>

    <!-- fin tercer contenido -->

    <!-- cuarto contenido -->

    <div class="segundocontenido cuartocontenido" id='teamTrisolutions' style="background-image: url(<?php echo get_field('das_trisolutions_team_bilder') ?>); background-size:cover;">

        <div class="tituloprincipalpaginashome cambiarcolor nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('das_trisolutions_team_schriftfarbe_des_titels'); } ?>;" ><?php the_field('das_trisolutions_team_title') ?></div>


    </div>

    <div class="parrafoteam">
        <p>
           <?php the_field('beschreibung_untertitel_das_trisolutions_team') ?>
        </p>
    </div>

    <div class="todolosusuariosdelteam">

        <?php

        $argsarbeiter = [

            'post_type' =>  "arbeitere_tri",
            'posts_per_page' => -1

        ];

        $resultadoarbeitere = new WP_Query($argsarbeiter);

        while ($resultadoarbeitere->have_posts()) : $resultadoarbeitere->the_post(); ?>

            <div class="contenedordetodo">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail("full", ["class" => 'unaprueba']);
                }
                ?>
                <?php

                //      $field_value = get_post_meta( get_the_ID(), 'positioninderfirma', true );
                // if ( ! empty( $field_value ) ) {
                //     echo '<p>' . esc_html( $field_value ) . '</p>';
                // } 
                ?>
                <p><?php the_title() ?></p>
                <div class="glow-wrap">
    <i class="glow"></i>
  </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div>

    <!-- din contenido 4  -->

    <!-- inicio 5 contenido -->

    <div class="segundocontenido quintocontenido" id="befaehigung" style="background-image: url(<?php echo get_field('unsere_befahigung_bilder') ?>); " >

        <div class="tituloprincipalpaginashome cambiarcolorotro nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('unsere_befahigung_text_color'); } ?>;" ><?php the_field('uberschrift_unsere_befaehigung') ?></div>


    </div>

    <div class="segundoconteidodiv segundoconteidodivarreglo">
        <div class="primerparragocontenido backgrounddivfarbe">

            <p class="subirfuente"><?php the_field('untertitel_1_unsere_befaehigung') ?></p>
            <ul>

            <?php  if( have_rows('folgende_zertifizierungen') ):
  while( have_rows('folgende_zertifizierungen') ): the_row(); ?>

                <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_1'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_2'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_3'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_4'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_5'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_6'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_7'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_8'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_9'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_10'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_11'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_12'); ?></li>
                <?php endwhile;
endif;?>
            </ul>

            

        </div>

        <div class="primerparragocontenido organizardivmitad">
            <p class="subirfuente" ><?php the_field('untertitel_2_unsere_befaehigung') ?></p>
            <ul>

            <?php  if( have_rows('wir_bringen_folgende_backgrounds_mit') ):
  while( have_rows('wir_bringen_folgende_backgrounds_mit') ): the_row(); ?>

                <li> <img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_1'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_2'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_3'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_4'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_5'); ?></li>
                <li><img class="miniarrow" src="<?php echo get_field('arrow_list') ?>" alt="icon" /><?php echo get_sub_field('textliste_6'); ?></li>
                <?php endwhile;
endif;?>

            </ul>
        </div>

    </div>

    <!-- final 5 contenido -->

    <!-- inicio contenido 6 -->

    <div class="segundocontenido sextocontenido" id="kunden" style="background-image: url(<?php echo get_field('das_trisolutions_kunden_bilder') ?>);">

        <div class="tituloprincipalpaginashome cambiarcolor nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('schriftfarbe_des_titels_untitels_kunde'); } ?>;" ><?php the_field('unsere_aktuellen_kunden')?>
        </div>

    </div>

    <div class="alleinhalte">

        <div class="containsallerclients">

            <?php

            $argumentokunde = [
                'post_type' => "Kunden_tri",
                'posts_per_page' => -1
            ];

            $resultadokunde = new WP_Query($argumentokunde);

            while ($resultadokunde->have_posts()) : $resultadokunde->the_post();
            ?>

                <div class="containsindividuellkunden">

                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail("full", ["class" => 'unaprueba']);
                    } ?>
                    <div class="textonombre">
                        <p><?php
                            //  the_title() 
                            ?></p>
                    </div>

                </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>

        <div class="endtext">
            <h4 style="color:<?php if(function_exists('the_field')){echo get_field('schriftfarbe_des_titels'); } ?>;" ><?php the_field('beschreibung_unsere_aktuellen_kunden') ?></h4>
        </div>

    </div>

 <!-- fin contenido 6 -->

 <!-- inicio contenido 7 -->

 <div class="segundocontenido sextocontenido" id="kunden" style="background-image: url(<?php echo get_field('siebtes_inhaltsbild') ?>);">

<div class="tituloprincipalpaginashome cambiarcolor nuevoarreglotitulo" style="color:<?php if(function_exists('the_field')){echo get_field('siebte_inhaltsfarbe'); } ?>;" ><?php the_field('siebter_Inhaltstitel')?>
</div>

</div>

<div class="alleinhalte sectimocontenidodiv">

<div class="endtext">
    <h4 style="color:<?php if(function_exists('the_field')){echo get_field('siebte_beschreibung_der_inhaltsfarbe'); } ?>;" ><?php the_field('siebte_inhaltsbeschreibung') ?></h4>
</div>

<div class="containsallerclients unserepartner">

    <?php

    $argumentokunde = [
        'post_type' => "partner_tri",
        'posts_per_page' => -1
    ];

    $resultadokunde = new WP_Query($argumentokunde);

    while ($resultadokunde->have_posts()) : $resultadokunde->the_post();
    ?>

        <div class="containsindividuellpartner ">

            <?php if (has_post_thumbnail()) {
                the_post_thumbnail("full", ["class" => 'unaprueba']);
            } ?>
            <div class="textonombre">
                <p><?php
                    //  the_title() 
                    ?></p>
            </div>

        </div>

    <?php
    endwhile;
    wp_reset_postdata();
    ?>

</div>



</div>


<?php endwhile;

?>

<?php
get_footer();
?>