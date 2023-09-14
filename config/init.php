<?php

if (isset($_COOKIE['selected_actuality'])) {
    $selectedIndices = explode(',', $_COOKIE['selected_actuality']);
}