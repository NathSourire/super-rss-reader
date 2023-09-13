<?php

require_once __DIR__ . '/../config/constant.php';


if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $actuality = filter_input(INPUT_POST, 'actuality', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];

    foreach ($actuality as $key => $value) {
        if (!array_key_exists($key, ACTUALITY)) {
            $errors['actuality'] = 'Faites votre choix !';
        }
    }
    $datastr = json_encode($actuality);
    setcookie('actuality', $datastr, time() + 365 * 24 * 3600, '/');
}




include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/user-choice.php';
include __DIR__ . '/../views/templates/footer.php';
