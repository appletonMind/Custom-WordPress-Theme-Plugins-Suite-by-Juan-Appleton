<footer>
    <div class="containerfooter">

    <div class="informacion1">
        <div class="titulofooter">
            <p>AppletonMarketing Agenture</p>
        </div>

        <div class="informacionadicional">
            <p>Holbeinstrasse 44</p>
            <p>9470 Buchs</p>
            <p>0782046411</p>
         <a href="mailto:info@trisolutions.ch" class="email"><p>info@appletonmarketing.ch</p></a>   
        </div>

    </div>

    <div class="informacion2">
    <p class="linksfooter">Hilfelinks</p>
 <ul>
    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'kontakt' ) ) );  ?>" class="contact-btn">Kontakt</a></li>
    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'datenschutzerklaerung' ) ) );  ?>" class="contact-btn">Agb</a></li>
    <!-- <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'Impresum' ) ) );  ?>" class="contact-btn">Cookie-Richtlinie</a></li> -->
 </ul>
    </div>

    <div class="informacion4">
        <div class="titleredsocial">
            <p>Soziale Netzwerke</p>
        </div>
<div class="redesSocialesfooter">
<a href="#">instagram</a>
<a href="#">Facebook</a>
<a href="#">linkedin</a>
</div>
    
</div>

    <div class="informacion3">

    <?php 
    $new_string = substr(get_bloginfo("name"), 0, strpos(get_bloginfo("name"), " ")) . "";

    ?>

    <p>&#169 <?php echo date('Y')." ". $new_string; ?>  Alle Rechte vorbehalten</p>
        
    </div>

  

        
    </div>


<button id="scroll-btn" class="hidden">^</button>

</footer>

<?php wp_footer();//funcion para inyectar alguna informacion mandada desde function.php es necesario para cargar la barra admin y javascript persobalizados ?>

</div>
</body>
</html>