<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
        <link href="css/style.css" rel="stylesheet">

        <?php
        require_once 'functions/auth.php';
        ?>  
    </head>
 
    <body>
    
        <header>

            <?php include_once("nav.php"); ?>

        </header>
     
    <main>
        <section class="hero">

            <div class="hero__content">
                
                <h1>Labo<br>Infrastrucures et Réseaux</h1>
                <p style="color: black;">YDAYS</p>
            </div>
            
        </section>
        <section class="moovie">
            
            <div class="moovie_item">
                <img src="img/infrastructure.jpg" alt="cover">
            </div>
            <div class="moovie_item">
                <p>Le Laboratoire Infrastructures et Réseaux de Paris YNOV Campus représente une magnifique opportunité de mettre en valeur vos compétences à contribution ou simplement de vous perfectionner avec les membres !</p>
            </div>
            <div class="moovie_item">
                <p>Les projets associés :<br><br>
                    -La plateforme de bug bounty<br>
                    -Création d'une monnaie virtuelle<br>
                    -La plateforme de supervision
                </p>
            </div>
            <div class="moovie_item">
                <img src="img/cable.jpg" alt="cover">
            </div>
            
        </section>
        <section class="about__section">

            <div class="left-part">
                <p>Situé dans le locaux du campus YNOV Paris, le laboratoire systèmes et réseux est voué à acceuillir des tests d'étudiants, appronfondir des notions vu en cours avec le membres du labo et découvrir des solutions professionnelles grâce aux partenariats. Le Labo offre la cadre technologique nécessaire au projets mis en place.<br><br>
                Ouvert aux étdiants technique, le laboratoire représente également un cadre propice au étudiants voulant apportés des contributions diverses.</p>
            </div>
            <div class="right-part">
                <img src="img/reunion.jpg" alt="img">
            </div>

        </section>
    </main>
    
    <!-- footer -->
            <?php include_once("footer.php"); ?>
    
    </body>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>

<script src="js/main.js"></script>
</html>