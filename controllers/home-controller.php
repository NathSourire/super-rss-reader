<?php
require __DIR__ . '/../config/constant.php';
if (isset($_COOKIE['selected_actuality'])) {
    $selectedIndices = explode(',', $_COOKIE['selected_actuality']);
}
if (isset($_COOKIE['articleCount'])) {
    $selectedCount = $_COOKIE['articleCount'];
}


$subjects = ACTUALITY;





include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';
