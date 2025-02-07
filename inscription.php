<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - TheGoodPlan</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<?php include "header.html" ?>

    <main class="cadre">
        <h1>S'inscrire</h1>
        <p>Déjà un compte ? <a href="connexion.php" class="blue-link">Se connecter</a></p>
        <form>
            <label for="name">Nom et Prénom *</label>
            <input type="text" id="name" placeholder="Nom et prénom" required>

            <label for="email">E-mail *</label>
            <input type="email" id="email" placeholder="E-mail" required>

            <label for="password">Mot de passe *</label>
            <input type="password" id="password" required>

            <label for="confirm-password">Confirmer le mot de passe *</label>
            <input type="password" id="confirm-password" required>

            <button type="submit">S'inscrire</button>
        </form>
    </main>

    <?php include "footer.html" ?>
</body>
</html>
