<!DOCTYPE html>

<head>
    <title>Parcourir</title>
    <link rel="stylesheet" href="/static/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
<?php include "header.html" ?>
    <main class="explore">
        <aside id="panneau">
            <h3 class="inter-bold">Trier par</h3>
            <select>
                <option value="popularite">Popularité</option>
                <option value="date">Date</option>
            </select>
            <br>
            <br>
            <div id="filtrage">
                <h3 class="inter-bold">Filtrer</h3>
                <form>
                    <input type="text" placeholder="Rechercher des mots clés" name="keywords">
                    <label for="duree">Durée:</label>
                    <input type="range" id="duree" name="duree" min="0" max="10">
                    <label for="experience">Expérience:</label>
                    <input type="range" id="experience" name="experience" min="0" max="20">
                    <label><input type="checkbox" checked> Sur Place</label>
                    <label><input type="checkbox"> A Distance</label>
                    <label><input type="checkbox"> Hybride</label>
                </form>
        </aside>
        </div>
        <section class="offres">
        <a href="details-offre.php">
            <div class="offre rouge">
                <div class="offre-head">
                    <h2>Développeur FullStack H/F</h2>
                    <span class="expand"></span>
                    <h3 class="inter-bold italic">Netflix</h3>
                    <img class="logo-rouge" src="/static/netflixIcon.png" width="48">
                </div>
                <h5 class="inter-light sub">17 candidats ont postulé à cette offre • Publiée il y a 13 jours</h5>
                <div class="tags">
                    <span class="localisation fond-rouge"><img src="/static/locIcon.png" width="24px">Paris</span>
                    <span class="duree fond-rouge"><img src="/static/timeIcon.png" width="24px">6 mois</span>
                    <span class="exp fond-rouge"><img src="/static/educationIcon.png" width="24px">Bac +2</span>
                </div>
            </div>
</a>
<a href="details-offre.php">
            <div class="offre jaune">
                <div class="offre-head">
                    <h2>Développeur FullStack H/F</h2>
                    <span class="expand"></span>
                    <h3 class="inter-bold italic">McDonalds</h3>
                    <img class="logo-jaune" src="/static/mcdonaldsIcon.png" width="48">
                </div>
                <h5 class="inter-light sub">17 candidats ont postulé à cette offre • Publiée il y a 13 jours</h5>
                <div class="tags">
                    <span class="localisation fond-jaune"><img src="/static/locIcon.png" width="24px">Paris</span>
                    <span class="duree fond-jaune"><img src="/static/timeIcon.png" width="24px">6 mois</span>
                    <span class="exp fond-jaune"><img src="/static/educationIcon.png" width="24px">Bac +2</span>
                </div>
            </div>
</a>
<a href="details-offre.php">
            <div class="offre vert">
                <div class="offre-head">
                    <h2>Développeur FullStack H/F</h2>
                    <span class="expand"></span>
                    <h3 class="inter-bold italic">Spotify</h3>
                    <img class="logo-vert" src="/static/spotifyIcon.webp" width="48">
                </div>
                <h5 class="inter-light sub">17 candidats ont postulé à cette offre • Publiée il y a 13 jours</h5>
                <div class="tags">
                    <span class="localisation fond-vert"><img src="/static/locIcon.png" width="24px">Paris</span>
                    <span class="duree fond-vert"><img src="/static/timeIcon.png" width="24px">6 mois</span>
                    <span class="exp fond-vert"><img src="/static/educationIcon.png" width="24px">Bac +2</span>
                </div>
            </div>
</a>
        </section>
    </main>
    <?php include "footer.html" ?>
</body>
