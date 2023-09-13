<?php

require_once __DIR__ . '/../config/constant.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    //récuperation de la date anniversaire nettoyage et validation
    $actuality = filter_input(INPUT_POST, 'actuality', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
    $data = [];
    foreach ($actuality as $key => $value) {
        if (!array_key_exists($value, ACTUALITY)) {
            $errors['actuality'] = 'Veuillez entrer un language valide';
        }
    }
    setcookie('actuality', $value, time() + 365 * 24 * 3600, '/');
}



if (!empty($_COOKIE['actuality'])) {
    echo 'Votre choix est : ' . $_COOKIE['actuality'];
} else {
    echo 'Faites votre choix !';
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/user-choice.php';
include __DIR__ . '/../views/templates/footer.php';
