<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de l'offre - TheGoodPlan</title>
    <link rel="stylesheet" href="/static/styles.css">
</head>
<body>
<?php include "header.html" ?>

    <main class="cadre">
        <h1>Création de l’offre</h1>
        <form>
            <label for="description">Descriptif du stage</label>
            <textarea id="description" rows="3"></textarea>

            <label for="duree">Durée du stage</label>
            <input type="text" id="duree">

            <label for="qualite">Qualité requise</label>
            <input type="text" id="qualite">

            <label for="diplome">Diplôme nécessaire</label>
            <input type="text" id="diplome">

            <button type="submit">Enregistrer l’offre</button>
        </form>
    </main>

    <?php include "footer.html" ?>
</body>
</html>
