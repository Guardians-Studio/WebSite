<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("head.php"); ?>
        <link rel="stylesheet" href="../css/contact.css">
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
                    <label for="name">Nom :</label>
                    <input type="text" name="name">
                </p>
                <p>
                    <label for="email">Email : </label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label for="message">Message :</label>
                    <br>
                    <textarea name="message" cols="50" rows="20"></textarea>
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