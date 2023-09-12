<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="/public/assets/js/script.js"></script>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Super RSS Reader</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/public/assets/img/Gaming.png" alt="Logo Gaming" width="90" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/controllers/home-controller.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/controllers/user-choice-controller.php">Faites votre choix</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vos sujet
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sujet 1</a></li>
                            <li><a class="dropdown-item" href="#">Sujet 2</a></li>
                            <li><a class="dropdown-item" href="#">Sujet 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>