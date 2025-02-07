<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié - TheGoodPlan</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <?php include "header.html" ?>

    <main class="cadre">
        <h1>Mot de passe oublié</h1>
        <p>Entrez votre adresse e-mail pour recevoir un lien de réinitialisation.</p>
        <form>
            <label for="email">E-mail *</label>
            <input type="email" id="email" placeholder="E-mail" required>

            <button type="submit">Envoyer le lien</button>
        </form>

        <p><a href="connexion.php">Retour à la connexion</a></p>
    </main>

    <?php include "footer.html" ?>
</body>

</html>