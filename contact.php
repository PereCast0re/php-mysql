<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <?php include('header.php') ?>

    <h1>Contactez nous</h1>
    <form action="submit_contact.php" method="GET">
        <div>
        <label for='email' >Email </label>
            <br>
            <input class="contact_element" type='text' id='email' name='email' required>
            <p class="txtprevention">Nous ne revendrons pas votre email</p>
        </div>
        <div>
            <label for='message'>Votre Message</label>
            <br>
            <textarea class="contact_element" id='message' name='message' rows="5" placeholder="Exprimez vous" required></textarea>
        </div>
        <button class="btn_contact" type="submite">Envoyer</button>
    </form>

    <?php include('footer.php') ?>
</body>
</html>