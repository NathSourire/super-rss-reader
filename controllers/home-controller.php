<?php
require __DIR__ . '/../config/constant.php';
$actualityCookie = $_COOKIE['actuality'] ?? null;
if ($actualityCookie !== null) {
    $actualityData = json_decode($actualityCookie, true);
}
$subject1 = $actualityData[0];
$subject2 = $actualityData[1];
$subject3 = $actualityData[2];
$subjects = ACTUALITY;




include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';
