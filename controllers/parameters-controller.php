<?php 
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    // récuperation du nombre d'article nettoyage et validation
    $numberarticles = filter_input(INPUT_POST, 'numberarticles', FILTER_SANITIZE_NUMBER_INT);
    if (empty($numberarticles)) {
        if ($numberarticles != 1 && $numberarticles != 2 && $numberarticles != 3) {
            $errors['$numberarticle'] = 'Veuillez selectionner un seul nombre';
        }
    }
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';