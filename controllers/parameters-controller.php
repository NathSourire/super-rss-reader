<?php


require_once __DIR__ . '/../config/constant.php';



if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $actuality = filter_input(INPUT_POST, 'actuality', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];

    foreach ($actuality as $key => $value) {
        if (!array_key_exists($key, ACTUALITY)) {
            $errors['actuality'] = 'Faites votre choix !';
        }
    }
    if (isset($_POST['actuality'])) {
        $selectedActuality = $_POST['actuality'];
        $selectedActualityAsString = implode(',', $selectedActuality);


        setcookie('selected_actuality', $selectedActualityAsString, time() + 3600, '/');
    }

    $nbArticles = filter_input(INPUT_POST, 'nbArticles', FILTER_SANITIZE_NUMBER_INT);
    if ($nbArticles == 6 || $nbArticles == 9 || $nbArticles == 12) {

        setcookie('articleCount', $nbArticles, time() + 3600, '/');
    } else {
        $errors['nbArticlesErrors'] = 'Choix incorrect';
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';
