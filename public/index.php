<?php

$default_page = "home";

$pages = [
    "home",
    "inscription",
    "profil"
];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $default_page = $_GET['page'];
    }
}

switch ($default_page) {
    case 'home':
        require_once "../pages/home.php";
        break;
    case 'inscription':
        require_once "../pages/inscription.php";
        break;
    case 'inscription':
        require_once "../pages/profil.php";
        break;
    default:
        require_once "../pages/home.php";
        break;
}
