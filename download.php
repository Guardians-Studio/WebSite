<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("head.php"); ?>
        <link rel="stylesheet" href="css/download.css" />
    </head>

    <body>
        <?php include("header.php"); ?>
        <section>
            <h1>Liens de téléchargements</h1>

            <h1 class="installation-title">Documents officiels : </h1>
            <ul class="links-lists" id="reports-links-section">
                <li><a href="downloads/cahier_des_charges.pdf" class="download-link" download>Cahier des charges</a></li>

                <li><a href="downloads/rapport_soutenance1.pdf" class="download-link" download>Rapport de soutenance 1</a></li>

                <li><a href="downloads/rapport_soutenance2.pdf" class="download-link" download>Rapport de soutenance 2</a></li>
                <!-- 
                <li><a href="downloads/rapport_projet.pdf" class="download-link" download>Rapport de projet</a></li>
                 -->
            </ul>
        </section> 

        <section>
            <h1 class="installation-title">Installateur et manuels : </h1>
            <ul class="links-lists" id="launcher-link-section">
                <li><a href="https://drive.google.com/uc?export=download&id=1qmoIDrFgYGA0LQYhrMdKv7M5m0gKVgqM" class="download-link" target="_blank">Télécharger le jeu</a></li>
                <li><a href="downloads/installation_manual.pdf" class="download-link" download>Télécharger le manuel d'installation</a></li>
                <li><a href="downloads/use_manual.pdf" class="download-link" download>Télécharger le manuel d'utilisation</a></li>
            </ul>
        </section>
        <?php include("footer.php"); ?>

    </body>
</html>

