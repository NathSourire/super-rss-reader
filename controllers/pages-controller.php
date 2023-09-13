<?php
require __DIR__ . '/../config/constant.php';

$actualityCookie = $_COOKIE['actuality'] ?? null;
if ($actualityCookie !== null) {
    $actualityData = json_decode($actualityCookie, true);
}


$subjectLink = $_GET['subject'];




include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/pages.php';
include __DIR__ . '/../views/templates/footer.php';
