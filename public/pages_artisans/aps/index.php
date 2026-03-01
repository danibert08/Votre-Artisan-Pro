<?php
    session_start();

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    } 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        $host = $_SERVER['HTTP_HOST'];
        $canonical_url = $protocol . "://" . $host . "/";
    ?>
    <link rel="canonical" href="<?= $canonical_url; ?>" />
    <title><?= "APS : travaux d'installation d'eau et de gaz"; ?></title>
    <link rel="stylesheet" href="/pages_artisans/css/reset.css" class="css">
    <link rel="stylesheet" href="/pages_artisans/css/style.css" class="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body id="body" class="orange">
    <div class="container">
        <nav class="navbar navbar-top">      
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#services1">Services</a></li>
                <!--<li><a href="#services2">Services2</a></li>-->
                <li><a href="#whoami">Qui suis-je</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>     
        <header>
                  
                    <!--     Header Hero and logo  -->

            <div id="accueil" class="en-tete">
                <div class="en-tete__hero">
                    <img class="en-tete__hero_hero-img" src="<?= "pages_artisans/aps/images/hero/h1.jpeg"; ?>"  alt="" >
                </div>
                <!--<div class="en-tete__logo">
                    <img class="en-tete__logo_logo-img" src="/pages_artisans/maquette/images/logo/logo.jpeg"  alt="">
                </div>-->
            </div>

                    <!--     Header  Title, Commercial Name, City  -->

            <div class="en-tete__title limelight-regular">
                <h1 class="en-tete__title_metier ">
                    Plombier
                </h1>
                <h2 class="en-tete__title_enseigne">
                    ATELIER DU PLOMBIER SABLAIS
                </h2>
                <h2 class="en-tete__title_commune">
                    Les Sables D'olonne
                </h2>
            </div>                   
        </header>
        <main>

            <!--     Header contact Tel and Mail witha button -->

            <div class="en-tete__contact">
                <div class="button" >
                    <img class="en-tete__contact_icone" src="/pages_artisans/icones/telephone.svg" alt=""> 
                    <a class="en-tete__contact-text" href="tel:+33745063458">             
                        07 62 91 26 81 
                    </a>
                </div>
            </div>

                                <!--      SERVICES SECTION     -->

            <section id="services1" class="services">
                <h2 class="services__title limelight-regular">Mes services</h2>

                                <!--       Services  N°1   -->

                <div  class="services__lambda">
                    <h2  class="services__lambda_title">PLOMBERIE EAU ET GAZ</h2>
                    <p class="services__lambda_text">
Besoin d'une installation fiable ou d'un dépannage urgent ? Spécialisé dans les travaux d'installation d'eau et de gaz, je mets mon savoir-faire au service de vos projets de construction et de rénovation.
De la conception de votre salle de bain à la pose de réseaux de gaz complexes, j’assure une exécution rigoureuse respectant les normes de sécurité les plus strictes. Mon objectif est simple : vous garantir des installations durables, une consommation optimisée et une tranquillité d'esprit totale.
Mes domaines d'intervention :
Plomberie sanitaire : Installation, robinetterie, chauffe-eau et traitement de l'eau.
Réseaux de gaz : Pose de conduites, raccordements et mise en conformité.
Chauffage : Optimisation de vos circuits d'eau chaude.                    </p>

                                <!--     Main1 Pictures     -->

                    <p class="services__lambda_photos">
                        <img class="photo photo1" src="/pages_artisans/aps/images/photos1/m1.jpeg" width="100" alt="">                    
                        <img class="photo photo2" src="/pages_artisans/aps/images/photos1/m2.jpeg"  width="100" alt="">
                    </p>
                    <p class="services__lambda_photos">
                        <img class="photo photo3" src="/pages_artisans/aps/images/photos1/m3.jpeg"  width="100" alt="">                  
                        <img class="photo photo4" src="/pages_artisans/aps/images/photos1/m4.jpeg" width="100" alt="">
                    </p>
                    <p class="services__lambda_photos">
                        <img class="photo photo5" src="/pages_artisans/aps/images/photos1/m5.jpeg" width="100" alt="">                    
                        <img class="photo photo6" src="/pages_artisans/aps/images/photos1/m6.jpeg" width="100" alt="">
                    </p>
                </div>
                <div class="en-tete__contact">
                <div id="services2" class="button" >
                    <img class="en-tete__contact_icone" src="/pages_artisans/icones/telephone.svg" alt=""> 
                    <a class="en-tete__contact-text" href="tel:+33745063458">             
                        07 45 06 34 58 
                    </a>
                </div>
            </div>

                                <!--     Services N°2     -->

                <!-- <div class="services__lambda">
                    <h2  class="services__lambda_title">Activité 2 2</h2>                  
                    <p class="services__lambda_text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam expedita nam obcaecati repudiandae. Facere temporibus maxime rem, nulla blanditiis ipsa eius? Expedita pariatur, nulla repellendus numuam voluptates tenetur harum, sit vero recusandae voluptatum possimus, quis quisquam maxime inventore incidunt excepturi cumue. Tempora odit ut vero cupiditate architecto! Eaque iste earum 
                    </p> -->

                                <!--     Main2 Pictures    -->

                    <!--<p class="services__lambda_photos">
                        <img class="photo photo11" src="/pages_artisans/maquette/images/photos2/m1.jpeg" width="100" alt="">                        
                        <img class="photo photo12" src="/pages_artisans/maquette/images/photos2/m2.jpeg"  width="100" alt="">
                    </p>
                    <p class="services__lambda_photos">
                        <img class="photo photo13" src="/pages_artisans/maquette/images/photos2/m3.jpeg"  width="100" alt="">                   
                        <img class="photo photo14" src="/pages_artisans/maquette/images/photos2/m4.jpeg" width="100" alt="">
                    </p>
                    <p class="services__lambda_photos">
                        <img class="photo photo15" src="/pages_artisans/maquette/images/photos2/m5.jpeg" width="100" alt="">                       
                        <img class="photo photo16" src="/pages_artisans/maquette/images/photos2/m6.jpeg" width="100" alt="">
                    </p>
                    <p class="services__lambda_photos">
                        <img class="photo photo17" src="/pages_artisans/maquette/images/photos2/m7.jpeg"  width="100" alt="">                   
                        <img class="photo photo18" src="/pages_artisans/maquette/images/photos2/m8.jpeg"  width="100" alt="">
                    </p>
                    <p class="services__lambda_photos">
                        <img class="photo photo19" src="/pages_artisans/maquette/images/photos2/m9.jpeg"  width="100" alt="">                       
                        <img class="photo photo20" src="/pages_artisans/maquette/images/photos2/m10.jpeg" width="100" alt="">
                    </p>                  
                </div>  -->     
            </section>   

                         <!--   Google map. -->

            <div class="map">
                <iframe class="frame-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8621.258051636494!2d-1.7392049463020607!3d46.486753606139445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ca89c864672e765%3A0x1532b26c5b30fd72!2sAtelier%20du%20plombier%20sablais!5e0!3m2!1sfr!2sfr!4v1772378683425!5m2!1sfr!2sfr"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="en-tete__contact">
                <div class="button" >
                    <img class="en-tete__contact_icone" src="/pages_artisans/icones/telephone.svg" alt=""> 
                    <a class="en-tete__contact-text" href="tel:+33745063458">             
                        07 62 91 26 81 
                    </a>
                </div>
            </div>

                                    <!-- PRICE SECTION    -->

            <section id="payment" class="services">
                <h2 class="services__title limelight-regular">Paiement</h2>            
                <div class="services__lambda">
                    <h2 class="services__lambda_title">Tarif</h2>
                    <p class="services__lambda_text">
Afin de vous proposer un **devis précis et au prix juste**, je me déplace directement sur place pour évaluer votre projet. Cette visite me permet d’analyser les lieux et de prendre les mesures nécessaires, d'évaluer les éventuelles contraintes techniques, afin d’établir une estimation détaillée et sans surprise.<br><br>
                        Chaque chantier étant unique, ce rendez-vous est essentiel pour vous garantir un tarif maîtrisé, adapté à vos besoins et à votre budget. Mon engagement : transparence, conseils personnalisés et respect du prix annoncé.
                    </p>  
                </div>
            </section>                       

                                <!--     WHO AM I SECTION     -->

            <section id="whoami" class="services">
                <h2 class="services__title limelight-regular">Qui suis-je</h2>            
                <div class="services__lambda">
                    <h2 class="services__lambda_title">Florian</h2>
                    <p class="services__lambda_text">
Installé depuis 3 ans aux Sables d'Olonne, je mets mon dynamisme et mon expertise au service de vos installations d'eau et de gaz. À 25 ans, je représente une nouvelle génération d'artisans : connectés, réactifs et formés aux dernières normes de sécurité et d'efficacité énergétique.
Que ce soit pour une urgence, une rénovation ou une mise en conformité gaz, je m'engage à vous fournir un travail soigné, durable et transparent.                    </p>  
                </div>
            </section>
            <div class="en-tete__contact">
                <div class="button" >
                    <img class="en-tete__contact_icone" src="/pages_artisans/icones/telephone.svg" alt=""> 
                    <a class="en-tete__contact-text" href="tel:+33745063458">             
                        07 62 91 26 81
                    </a>
                </div>
            </div>

                                <!--    ******FORMULAIRE DE CONTACT *******-->


            <form id="contact" class="form-container">
                <h2>Contactez-nous</h2>
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" placeholder="Sujet">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Votre message" required></textarea>
                </div>
                <!-- Honeypot anti-spam -->
                <input type="text" name="website" id="website" style="display:none">

                <button class="button" type="submit">Envoyer</button>

                <div id="form-response"></div>
            </form>

                                <!--   SOCIAL MEDIA ICONS SECTION -->
                  
            <div class="socialmedia">
                <p class="socialmedia-title">Pour me suivre :</p>
                <div class="socialmedia-icons">
                    <a class="socialmedia-link insta"  href="https://www.instagram.com/ypria_beauty?igsh=MWw1ZDdpdHQ1NjJnOQ==">             
                        <img class="socialmedia-img" src="/pages_artisans/icones/icons8-instagram-48.svg"  alt=""> 
                    </a>
                    <a class="socialmedia-link tictac"  href="https://www.tiktok.com/@ypria_?_r=1&_t=ZN-93t81PboCjD">             
                        <img class="socialmedia-img" src="/pages_artisans/icones/icons8-tic-tac-50.svg" alt=""> 
                    </a>
                    <a class="socialmedia-link fbook"  href="https://www.facebook.com/share/14VhSsPpgAV/?mibextid=wwXIfr">             
                        <img class="socialmedia-img" src="/pages_artisans/icones/icons8-facebook-48.svg"  alt=""> 
                    </a>
                </div>
            </div> 
            <nav class="navbar navbar-bottom">
                <ul class="nav-links">
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#services1">Services 1</a></li>
                    <li><a href="#services2">Services 2</a></li>
                    <li><a href="#whoami">Qui suis-je</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </main>
        <footer class="footer-nav">
            <a class="mentions-link" href="/pages_artisans/maquette/mentions_legales.php">Mentions légales</a>
        </footer>
    </div>
    <script src="pages_artisans/maquette/theme.js" module="javascript" ></script>
    <script src="/assets/vap/form.js"></script>
</body>
</html>
