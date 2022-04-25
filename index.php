<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("head.php"); ?>
        <link rel="stylesheet" href="css/main.css" />
    </head>

    <body>
        <head>
            <?php include("header.php"); ?>
            <link rel="stylesheet" href="css/main.css" />
        </head>

        <section class="summary">
            <h2>Présentation brève du Guardians Studio : </h2>
            <p>
                Nous sommes un groupe d'étudiants de première année de cycle préparatoire de l'école EPITA.
            </p>

            <p>
                Tout a commencé pendant nos révisions de partiels de mi-semestre 1. <br />
                Après avoir travaillé ensemble, nous avons remarqué que nous nous entendions bien et que nous étions efficaces dans les révisions. <br />
                C'est donc ainsi que les prémices du Guardians Studio ont vu le jour.
            </p>

            <p>
                Las de la tendance des jeux à être purement compétitifs, nous nous sommes donnés l'objectif de publier un jeu coopératif pour encourager les joueurs à s'amuser ensemble plutôt que de s'affronter. Ainsi naquit Era Of Guardians: Timeless Village
            </p>

            <h2>Présentation brève de Era Of Guardians: Timeless Village :</h2>
            <p>
                Era Of Guardians: Timeless Village est un RPG qui se joue seul ou en coopération. L'équipe de joueur est amenée, à travers une aventure scénarisée, à évoluer dans différents biomes pour récupérer 4 gemmes et combattre le Gardien du Temps afin de rétablir le cours du temps qui s'est interrompu dans le village d'Hazeltown.
            </p>

            <p>Nous vous invitons à naviguer sur les différentes pages du site pour avoir plus de détails.</p>
        </section>

        <section class="chronologie">
            <h3>Chronologie du projet</h3>
            <p>
                <b>De janvier 2022 à mars 2022</b> : Implémentation des mécaniques des joueurs, des premières interfaces, du multijoueur, de Hazeltown, la première zone de jeu et des premiers ennemis.
            </p>
        
            <p>
                <b>De mars 2022 à avril 2022</b> : Implémentation des quêtes, des nouveaux ennemis. Ajout de Langdale, la deuxième zone de jeu et Turon, la troisième zone de jeu. Amélioration des interfaces et création de cinématiques.
            </p>
        </section>

        <section class="game">
            <balise id="game"><h3>Le jeu</h3></balise>
            <p>
                Voici quelques aperçus de notre jeu : 
                <ul>
                    <li>
                        <img class="game-img" id="game-img1" src="Pictures/langdale_face.webp" alt="Langdale de Face" />
                    </li>
                    <li>
                        <img class="game-img" id="game-img2" src="Pictures/foret_orange.webp" alt="Forêt Orange de Langdale" />
                    </li>
                    <li>
                        <img class="game-img" id="game-img3" src="Pictures/turon_exterieur.webp" alt="Extérieur de Turon" />
                    </li>
                    <li>
                        <img class="game-img" id="game-img4" src="Pictures/turon_interieur.webp" alt="Intérieur de Turon" />
                    </li>
                </ul>
            </p>
        </section>

        <div class="index-footer">
            <section class="contact">
                <balise id="Nous Contacter"><h3>Nous Contacter</h3></balise>
                <p>
                    <a href="contact.php">Pour nous contacter</a>
                </p>
            </section>

            <section class="l'équipe">
                <balise id="L'équipe'"><h3>L'équipe</h3></balise>
                    <p><a href="team.php">Cliquez pour en apprendre plus sur le Guardians Studio</a>
            </section>

            <section class="downloads">
                <h3>Téléchargements</h3>
                <p><a href="download.php">Cliquez pour accéder aux téléchargements</a></p>
            </section>

            <?php include("footer.php"); ?>
        </div>

    </body>
</html>