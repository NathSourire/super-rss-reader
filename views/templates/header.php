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

    <nav class="navbar navbar-expand-lg border">
        <div class="container-fluid">
            <a class="navbar-brand" href="/controllers/home-controller.php">
                <img src="/public/assets/img/Gaming3-removebg.png" alt="Logo Gaming responsive" id="logoResponsive">
                <img src="/public/assets/img/Gaming-removebg.png" alt="Logo Gaming desktop" id="logoDesktop">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <img src="/public/assets/img/menu.png" alt="menu burger" id="imgBurgerMenu">
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navFontSize">
                        <?php
                        if (isset($_COOKIE['selected_actuality'])) {
                            $selectedIndices = explode(',', $_COOKIE['selected_actuality']);
                            foreach ($selectedIndices as $index) {
                                if (isset(ACTUALITY[$index])) {
                                    $item = ACTUALITY[$index];
                                    $name = $item[0];
                                    $url = $item[1];
                        ?>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/controllers/pages-controller.php?subject=<?= $url ?>"><?= $name ?></a>
                                    </li>

                        <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>

                <div class="d-flex justify-content-around" id="gapChangeThemeGear">
                    <button class="btn" id="theme-btn">Changer de thème</button>
                    <a href="/controllers/parameters-controller.php ">
                        <img src="/public/assets/img/gear.png" alt="gear parameter">
                    </a>
                </div>

            </div>
            <div class="d-flex justify-content-end">
                <button class="btn" id="theme-btn">Changer de thème</button>
                <a href="/controllers/parameters-controller.php ">
                    <img src="/public/assets/img/gear.png" alt="gear parameter">
                </a>
            </div>
        </div>
        </div>
    </nav>