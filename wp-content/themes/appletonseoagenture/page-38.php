<?php
get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <main  class="containerueberuns">
          
        <section id="ersteinhalt" class="inicio">
    <div class="alletextenersteinhalt">
        <div class="ersteabsatz">
            <p class="fondo">Agentur für Marketing und SEO-Webpositionierung</p>
        </div>
        <div class="title">
        <?php the_title('<h1>', '</h1>');?>
        </div>

        <?php if(wp_is_mobile()){?>

            <div class="imgersteinhalt">
        <?php the_post_thumbnail("full", ["class" => 'unaprueba']); ?>
    </div>

            <?php };?>

   <div class="contendtextop">
   <?php  the_content(); ?>
   </div>

   <div class="buttominicio">
    <a href="#" class="buttom">Kontaktiere uns</a>
   </div>
       
    </div>
    <?php if(!wp_is_mobile()){?>
    <div class="imgersteinhalt">
        <?php the_post_thumbnail("full", ["class" => 'unaprueba']); ?>
    </div>
    <?php };?>
</section>

<div class="titleplusparrafo">
    <p class="fondo">Ueber uns</p>
<h2>Unsere Team</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam impedit debitis earum esse incidunt. Incidunt eum perspiciatis saepe natus a quisquam, beatae veniam dignissimos, mollitia ea suscipit obcaecati, illo ipsa.</p>
    </div>

<section id="ueberunsarbeitere" class="ueberunsarbeitere">
    
<?php 
$allearbeitere = [
    'post_type' => "arbeitere_apple",
    'posts_per_page' => 6
];

$ergebnisArbeiter = new WP_Query($allearbeitere);

while ($ergebnisArbeiter->have_posts()) : $ergebnisArbeiter->the_post();?>

<div class="containkundeindividuelle">
    <?php
if(has_post_thumbnail()){
    the_post_thumbnail("full",["class" => 'bildekunden']);
}

?>
<div class="inhaltallesueberuns">
<h3><?php the_title() ?></h3>
<div class="linke">
    <a href="<?php
        $redesociales = get_field('soziale_netzwerke');
        $linkedin = $redesociales['linkedin'];
        echo esc_html($linkedin);
    ?>">
        <img class="logolinkeding" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/icons8-linkedin-96.png' ); ?>" alt="linkedin">
    </a>
</div>
</div>

<div class="position">
    <span><?php the_field('position_in_der_firma') ?> </span>
</div>




</div>
<?php endwhile;
wp_reset_postdata();?>
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

<?php
get_footer();
?>