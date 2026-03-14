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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Simple</title>
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/vap/style.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="assets/vap/logo.jpeg" width="500" alt="Logo votre artisan pro, bleu et orange" >
        </div>
    </header>
    <main>

        <div>
            <h1>Votre site professionnel clé en main pour votre activité artisanale</h1><br><br>
            <h2>Nous vous simplifions la tâche :</h2><br><br>
            <p>Vous communiquez les informations et les photos, et nous nous occupons du reste.</p><br>
            <p>Vous n'avez rien d'autre à faire, et votre site sera en ligne dans les 24h (souvent moins)</p><br>
            <br><p>Un site pour votre activité, adapté à tous les écrans, simple, efficace, prêt à l’emploi,
            et optimisé pour le référencement google</p><br><br>
                <p>Choisissez votre thème couleur : </p>
            <div class="choix_theme">
                <div class="themex5">
                    <p><a href="https://purple.preprod.votreartisanpro.fr">Purple</a></p>
                    <p><a href="https://special.preprod.votreartisanpro.fr">Spécial</a></p>
                    <p><a href="https://souris.preprod.votreartisanpro.fr">Souris</a></p>
                    <p><a href="https://cuir.preprod.votreartisanpro.fr">Cuir</a></p>
                    <p><a href="https://ocean.preprod.votreartisanpro.fr">Océan</a></p>
                </div>
                <div class=themex5>
                    <p><a href="https://lagon.preprod.votreartisanpro.fr">Lagon</a></p>
                    <p><a href="https://feuillage.preprod.votreartisanpro.fr">Feuillage</a></p>
                    <p><a href="https://terre.preprod.votreartisanpro.fr">Terre</a></p>
                    <p><a href="https://mauve.preprod.votreartisanpro.fr">Mauve</a></p>
                    <p><a href="https://ciel.preprod.votreartisanpro.fr">Ciel</a></p>
                </div>
            </div>
            <p>**************</p><br>
            <p><u>Tarif unique sans coûts cachés :</u></p><br><br>
            <p>Une seule fois 49€ pour la réalisation.</p><br>
            <p>Puis seulement 12,99€/mois pour l'hébergement, la maintenance,les mises a jour et les petites modifications.</p><br>
            <p>**************</p>
        </div>



        <!--<button>Je crée mon site maintenant</button>-->
        <!--    ******FORMULAIRE DE CONTACT *******-->


        <form id="contact" class="form-container" novalidate>
            <h2>Demande d'informations</h2>
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="prenom" placeholder="Votre prénom" required>
            </div>
            <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="text" id="tel" name="tel" placeholder="0612345678" minlength="10" maxlength="10" required>
                </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>
            </div>

            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" placeholder="Sujet" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Votre message" required></textarea>
            </div>

            <!-- Honeypot anti-spam -->
            <input type="text" name="website" id="website" style="display:none">

            <button type="submit">Envoyer</button>

            <div id="form-response"></div>
        </form>
    </main>
<script src="/assets/vap/form.js"></script>
            
</body>
</html>
