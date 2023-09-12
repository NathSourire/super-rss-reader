<?php

require_once __DIR__ . '/../config/constant.php';

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    //récuperation de la date anniversaire nettoyage et validation
    $actuality = filter_input(INPUT_POST, 'actuality', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
    foreach ($actuality as $key => $value) {
        if (!array_key_exists($value, ACTUALITY)) {
            $errors['actuality'] = 'Veuillez entrer un language valide';
        }
    }
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/user-choice.php';
include __DIR__ . '/../views/templates/footer.php';
