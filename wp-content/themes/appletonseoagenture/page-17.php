<?php get_header()?>

<?php  if (have_posts()) :
    while (have_posts()) : ?>

<main class="kontaktmain">
<section class="titleprincipal" id='kontakt'>
   <div class="contenidocompletotitulos">

<p class="fondo">KONTAKTIERE UNS</p>
<div class="contenidoparrafo">
      <div class="tituloycontenidokontakt">
<h1 class="tituloprincipalpaginashome acomodarizquieroda">
  <?php the_title()?>
    </h1>
</div>

   <div class="buttominicio">
    <a href="#" class="buttom">Kontaktieren Sie mich jetzt</a>
   </div>
</div>


 </section>

 <div class="imagenfull" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');"></div>


 <section id="formularcompletomitinformation" class="formularcompletomitinformation">
 
 <div class="contenidocompletoinformacion">

 <h2><?php the_field('title_information')  ?></h2>
 <div class="informacioncontacto">

 <h3><?php the_field('title_information_unternemen') ?></h3>
 <p><?php the_field('plz') ?></p>
 <p><?php the_field('ort') ?></p>
<a class="colorlinkkontak" href="mailto:<?php echo the_field('email') ?>"><?php the_field('email') ?></a>
<a href="https://api.whatsapp.com/send/?phone=41<?php the_field('telefon')?>&text&type=phone_number&app_absent=0" target="_blank">(+41) <?php the_field('telefon') ?></a>

 </div>

 </div>

 <div class="formulariocompleto">
 <?php echo do_shortcode('[contact-form-7 id="02acc86" title="Kontaktformular 1"]') ?>

 </div>

 </section>





</main>
<?php
the_post();
endwhile;
endif; 
?>
<?php get_footer()?>
