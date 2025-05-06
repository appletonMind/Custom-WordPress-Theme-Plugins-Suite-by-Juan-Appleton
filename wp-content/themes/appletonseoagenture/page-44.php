<?php get_header(); ?>

<?php 
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
<main class="containerprincipal containerprincipalpreise"> 

<section id="ersteinhalt" class="inicio">
        <div class="alletextenersteinhalt alletextenauchpreise">
            <div class="ersteabsatz">
                <p class="fondo">Unsere preise</p>
            </div>
            <div class="title">
                <?php the_title('<h1>', '</h1>'); ?>
                <div class="dreisachen">
                   <p> <?php the_field('beschreibungpreise') ?> </p>
                </div>
            </div>

            <div class="buttominicio">
            <a href="#" onclick="smoothScroll('#formularcompletomitinformation')" class="buttom">Fordere dein Angebot an</a>
   </div>

        </div>
    </section>

    <section class="contenidopleiscompleto">
        <?php the_content() ?>
    </section>

    <section id="formularcompletomitinformation" class="formularcompletomitinformation preiseformular">
 
 <div class="contenidocompletoinformacion">

 <h2><?php the_field('title_information')  ?></h2>
 <div class="informacioncontacto">

 <h3><?php the_field('title_information_unternemen') ?></h3>
 <p><?php the_field('plz') ?></p>
 <p><?php the_field('ort') ?></p>
<a class="colorlinkkontak" href="mailto:<?php echo the_field('email') ?>"><?php the_field('email') ?></a>
<a href="https://api.whatsapp.com/send/?phone=41<?php the_field('telefon')?>&text&type=phone_number&app_absent=0" target="_blank">(+41) <?php the_field('telefon') ?></a>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5425.531795971862!2d9.474422299999997!3d47.162439199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479b31c65ff98027%3A0x1fa351054f7f85bd!2sGroffeldstrasse%203%2C%209470%20Buchs!5e0!3m2!1sde!2sch!4v1713130113658!5m2!1sde!2sch" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

 </div>

 </div>

 <div class="formulariocompleto formulariocompletopreise">
 <?php echo do_shortcode('[contact-form-7 id="e29fabf" title="preises"]') ?>

 </div>

 </section>



</main>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>