<?php

$actualityCookie = $_COOKIE['actuality'] ?? null;
if ($actualityCookie !== null) {
    $actualityData = json_decode($actualityCookie, true);
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';
