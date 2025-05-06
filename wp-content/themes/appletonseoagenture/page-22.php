<?php
get_header()
?>
<?php
// Inicia el bucle de WordPress
if (have_posts()) :
    while (have_posts()) : ?>
<main id="main">
<section id="ersteinhalt" class="inicio">
    <div class="alletextenersteinhalt">
        <div class="ersteabsatz">
            <p class="fondo"><?php the_field('anfangsabsatz')?></p>
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
    <a href="#" class="buttom">Angebot anfordern</a>
   </div>
       
    </div>
    <?php if(!wp_is_mobile()){?>
    <div class="imgersteinhalt">
        <?php the_post_thumbnail("full", ["class" => 'unaprueba']); ?>
    </div>
    <?php };?>
</section>

<section id="Kunden">

<?php 
$alleKunden = [
    'post_type' => "kunden_apple",
    'posts_per_page' => 6
];

$ergebnisKunde = new WP_Query($alleKunden);

while ($ergebnisKunde->have_posts()) : $ergebnisKunde->the_post();?>

<div class="containkundeindividuelle">
    <?php
if(has_post_thumbnail()){
    the_post_thumbnail("full",["class" => 'bildekunden']);
}
?>
</div>
<?php endwhile;
wp_reset_postdata();?>
</section>

<hr class="separator" />

<section id="services">
<div class="allestextenueberservices">
  <?php
// Obtener el grupo de campos
// Holen Sie sich die Feldgruppe
$inhalt2services = get_field('inhalt2services');

// Verificar si el grupo de campos tiene contenido
//Überprüfen, ob die Feldgruppe Inhalt hat
if ($inhalt2services) {
    // Obtener el título del servicio
    $titleservices = $inhalt2services['titleservices'];

    // Obtener la descripción inicial del servicio
    //Holen Sie sich die anfängliche Servicebeschreibung
    $beschreibungservicesinicial = $inhalt2services['beschreibungservicesinicial'];
    $wirarbeitenwirapzankleine = $inhalt2services['wirarbeitenwirapzankleine'];
    $wirarbeitenwirbilder = $inhalt2services['wirarbeitenwirbilder'];
    $wirarbeitenwirbildertitle = $inhalt2services['wirarbeitenwirbildertitle'];
    $wirarbeitenwirtitle = $inhalt2services['wirarbeitenwirtitle'];
    $wirarbeitenwirbeschreibung = $inhalt2services['wirarbeitenwirbeschreibung'];

    // Imprimir el contenido usando las variables obtenidas
     //Drucken Sie den Inhalt mit den erhaltenen Variablen aus
    ?>
    <div class="allestextenueberservices">
        <h2><?php echo esc_html($titleservices); ?></h2>
        <p><?php echo esc_html($beschreibungservicesinicial); ?></p>
    </div>
    <?php
}
?>

</div>

<div class="unseredienstleistungen">
<?php 
$alledients = [
    'post_type' => "dients_apple",
    'posts_per_page' => -1
];
$counter = 0;

$ergebnisalledients = new WP_Query($alledients);

while ($ergebnisalledients->have_posts()) : $ergebnisalledients->the_post();?>
<div class="containadienstelungenindividuelle <?php echo ($counter % 4 < 2) ? 'hellefarbe' : 'dunklefarbe'; ?>">
    <div class="bildeservices">
    <?php
if(has_post_thumbnail()){
    the_post_thumbnail("full",["class" => 'bildekunden']);
}
?>
    </div>

    <div class="textenservices">
        <h3><?php the_title() ?></h3>
        <?php the_content() ?>
    </div>

    <?php 
    $urlpost = get_post_meta(get_the_ID(), 'urlservices', true);
    if (!empty($urlpost)) {
        echo '<div class="buttonservices"><a href="' . esc_url($urlpost) . '">' . get_field("nameurlsercvices") . '</a></div>';
    }
    $counter++;
?>


</div>

<?php endwhile;
wp_reset_postdata();?>
<div class="buttonservices">
    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) ); ?>" class="buttom">Kontakt jetzt</a>
</div>
</div>

<div class="wiearbeitenwir">

    <img src="<?php echo esc_html($wirarbeitenwirbilder) ?>" alt="<?php echo $wirarbeitenwirbildertitle ?>">
    <div class="textenwiearbeitenwir">
        <p class="fondo"><?php echo esc_html($wirarbeitenwirapzankleine); ?></p>
        <h3><?php echo esc_html($wirarbeitenwirtitle) ?></h3>
        <p><?php echo esc_html($wirarbeitenwirbeschreibung) ?></p>
    </div>

    <div class="listtagarbeiterwir">
        <ul>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Transparenz</span></div><div class="textenbeschreibung"><span> Wir verpflichten uns, in allen unseren Interaktionen und Prozessen transparent zu sein und unseren Kunden einen klaren Einblick in unser Handeln und unsere Ergebnisse zu geben. </span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Kontinuerlichen Kommunikation</span></div><div class="textenbeschreibung"><span> Wir pflegen eine offene und kontinuierliche Kommunikation mit unseren kunden, um sicherzustellen,dass sie in jedem Projektstadium informiert sind und zeitnahes Feedback geben können. </span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Innovation</span></div><div class="textenbeschreibung"><span>Wir suchen ständig nach neuen und kreativen Möglichkeiten,digitale Herausforderunge anzugehen,indem wir aufstrebende Technologien und aktuelle Trends nutzen, um innovative Lösungen für unsere Kunden zu bieten.</span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Zusammenarbeit</span></div><div class="textenbeschreibung"><span>Wir fördern die Zusammenarbeit sowohl innerhalb unseres Teams als auch mit unseren Kunden und erkennen an,dass der Austausch von Ideen und die Zusammenarbeit entscheidend für den Erflog jedes Projekts sind.</span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Kundenorientierung</span></div><div class="textenbeschreibung"><span>Wir verpflichten uns, die Bedürfnisse und Ziele unserer Kunden tiefgreifend zu verstehen und massgeschneiderte Strategien und Lösungen zu entwickeln,die mit ihren Geschäftszielen übereinstimmen.</span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Exzellenz</span></div><div class="textenbeschreibung"><span>Wir streben danach, in allem, was wir tun, Exzellenz zu erreichen, von der strategischen Planung bis zur taktischen Umsetzung, und suchen ständig nach Verbesserungen, um die Erwartungen in jedem Projekt zu übertreffen</span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Greifbare Ergebnisse</span></div><div class="textenbeschreibung"><span>Wir verpflichten uns, unseren Kunden greifbare und messbare Ergebnisse zu liefern, indem wir spezifische Metriken und Klare Ziele verwenden,um den Erflog unserer Strategien und Kampagnen zu beweten.  </span></div></li>
            <li><div class="checkplustitel"><img src="<?php echo esc_html(the_field('check')) ?>" alt="check"> <span>Anpassungsfähigkeit</span></div><div class="textenbeschreibung"><span>Wir erkennen die sich ständig äandernde Natur des digitalen Umfelds an und verpflichten uns,uns schnell an neue Trends, Technologien und Marktanforderungen anzupassen,um die kontinuierliche Wirksamkeit unserer Strategien und Dienstleistungen zu gewährleisten. </span></div></li>
        </ul>
    </div>

</div>

</section>

<section id="stepallgemein">
    <div class="step">
        <div class="textenstep">
        <p class="fondo">Schritt 1</p>
        <h3>Erstberatung</h3>
        <p>Wir nehmen Kontakt mit Ihnen auf, um Sie und Ihr Unternehmen kennenzulernen. Während dieser Beratung möchten wir Ihre Geschäftsziele, Ihre Zielgruppe, Ihre Produkte oder Dienstleistungen sowie eventuelle spezifische Herausforderungen oder Probleme verstehen, mit denen Sie konfrontiert sind. Diese Informationen ermöglichen es uns, Ihre Situation zu analysieren und eine massgeschneiderte Strategie zu entwickeln, die Ihren Anforderungen entspricht.</p>
        </div>
        <img src="<?php echo esc_url(the_field('schritt_1_bilder')) ?>" alt="schritt 1">
    </div>

    <div class="step stepvolteado">
        <div class="textenstep">
        <p class="fondo">Schritt 2</p>
        <h3>Wettbewerbs- und Marktanalyse</h3>
        <p> Sobald wir ein klares Verständnis für Ihr Unternehmen und Ihre Ziele haben, führen wir eine umfassende Analyse Ihrer Konkurrenz und des Marktes durch, in dem Sie tätig sind. Dies beinhaltet die Identifizierung Ihrer Hauptkonkurrenten, die Analyse ihrer Stärken und Schwächen sowie die Bewertung von Markttrends und -chancen. Diese Analyse hilft uns, Bereiche der Möglichkeiten zu identifizieren und eine Strategie zu entwickeln, die Sie von der Konkurrenz abhebt.</p>
        </div>
        <img src="<?php echo esc_url(the_field('schritt_2_bilder')) ?>" alt="schritt 2">

    </div>

    <div class="step">
        <div class="textenstep">
        <p class="fondo">Schritt 3</p>
        <h3>Entwicklung der Strategie</h3>
        <p>Mit den im Vorfeld gesammelten Informationen beginnen wir mit der Entwicklung einer detaillierten Strategie für Ihr Unternehmen. Dies kann die Festlegung spezifischer Ziele, die Identifizierung relevanter Marketingtaktiken und -kanäle, die Erstellung von Schlüsselbotschaften und die Planung konkreter Aktivitäten umfassen. Wir arbeiten eng mit Ihnen zusammen, um sicherzustellen, dass die vorgeschlagene Strategie Ihren Zielen und Anforderungen entspricht und Ihnen die besten Erfolgsaussichten auf dem Markt bietet.</p>
        </div>
        <img src="<?php echo esc_url(the_field('schritt_3_bilder')) ?>" alt="schritt 3 ">

    </div>

</section>

<section id="kundenmeinung">
    <h2>Unsere Kunden geben ihre Meinung über uns ab.</h2>
    <div class="erhalkunden">
        <?php $allekundenmeinung = [
    'post_type' => "meinung_apple",
    'posts_per_page' => 6
];

$kundenmeinung = new WP_Query($allekundenmeinung);

while ($kundenmeinung->have_posts()) : $kundenmeinung->the_post();?>

<div class="containkundemainungindividuelle">
    
    <div class="bildermeinugnkunde">
    <?php
    if(has_post_thumbnail()){
        the_post_thumbnail("full",["class" => 'bildekundenmainu']);
    }
    ?>
    <div class="textenmeinungkunden">
        <span><?php the_title() ?></span>
        <img src="<?php echo esc_url(the_field('bildermainungkundestarts')) ?>" alt="Bewertungen">
        <span class="nichefirma"><?php the_field('nischefirma') ?></span>
    </div>
    </div>

    <div class="absatz">
        <?php the_content() ?>
    </div>

</div>
<?php endwhile;
wp_reset_postdata();?> 
    </div>
</section>

<section id="angebotanfordern">
    <div class="containangebot">
        <span class="titlespan">Bringen wir deine Website auf das nächste Level?</span>
        <p>Teste unseren Service völlig unverbindlich. Wenn du bleibst, liegt es daran, dass wir wirklich die Ergebnisse liefern, die dein Unternehmen benötigt.</p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'preise' ) ) );  ?>" class="buttom">Angebot anfordern</a>
    </div>
</section>

</main>
     <?php   the_post();
        // Aquí puedes mostrar la información del blog individual, como el título, el contenido, etc.
       
    endwhile;
endif;
?>
<?php
get_footer();
?>