<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/assets/css/style_404.css">
    <title>Erreur 404 - Page non trouvée</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6  p-5" id="imgBackground">
                <img class="pacman img-fluid" src="/public/assets/img/pacman.png" alt="image pacman">
                <img class="ghost img-fluid" id="animatedGhost" src="/public/assets/img/fantome-bleu.png" alt="image fantome pacman">
            </div>
            <div class="col-md-6 text-center">
                <h1>Erreur 404 - Page non trouvée</h1>
                <p>Désolé, la page que vous recherchez n'existe pas.</p>
                <a href="/controllers/home-controller.php">
                    <button type="button" class="btn" id="btnReturnSite">Retour vers le site</button>
                </a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    <script defer src="/public/assets/js/script.js"></script>
</body>

</html>