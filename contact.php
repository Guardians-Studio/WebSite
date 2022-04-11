<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("head.php"); ?>
        <link rel="stylesheet" href="css/contact.css">
    </head>

    <body>
        <?php include("header.php"); ?>

        <section class="contact">
            <balise id="Nous Contacter"><h3>Nous Contacter</h3></balise>
            <p>
                Pour nous contacter :
            </p>
            <form method="POST" action="send_email.php">
                <p>
                    <label for="name" >Nom :</label>
                    <input type="text" name="name" placeholder="Votre nom/Pseudo">
                </p>
                <p>
                    <label for="email">Email : </label>
                    <input type="text" name="email" placeholder="Votre Email">
                </p>
                <p>
                    <label for="message">Message :</label>
                    <br>
                    <textarea class="textinput" name="message" placeholder="Ecrire votre message" rows="50" cols="50></textarea>
                    <br>
                </p>
                <p>
                    <input type="submit" name="submit" value="Envoyer le message">
                </p>
            </form>
        </section>
        <?php include("footer.php"); ?>
    </body>
</html>