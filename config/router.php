<?php

/**
 * / pattern
 * 
 * /
 * \n
 * 
 * /^\/contact\/{0,1}$/
 * 
 */
$router = [
    [
        "url" => "/^\/$/",
        "view" => BASE_VIEW_DIR . "home/home.php",
    ],
    [
        "url" => "/^\/about$/",
        "view" => BASE_VIEW_DIR . "home/about.php",
    ],
    [
        "url" => "/^\/dj$/",
        "view" => BASE_VIEW_DIR . "home/dj.php",
    ],
    [
        "url" => "/^\/login$/",
        "view" => BASE_VIEW_DIR . "home/login.php",
    ],
    [
        "url" => "/^\/inscription$/",
        "view" => BASE_VIEW_DIR . "home/inscription.php",
    ],
    [
        "url" => "/^\/payement$/",
        "view" => BASE_VIEW_DIR . "home/payement.php",
    ],
    [
        "url" => "/^\/profile\?id=[0-9]{1,}$/",
        "view" => BASE_VIEW_DIR . "home/profile.php",
    ],
    [
        "url" => "/^\/editProfil\?id=[0-9]{1,}$/",
        "view" => BASE_VIEW_DIR . "home/editProfil.php",
    ],
    [
        "url" => "/^\/dashDj\?id=[0-9]{1,}$/",
        "view" => BASE_VIEW_DIR . "home/dashDj.php",
    ],
    [
        "url" => "/^\/reservationDj\?id=[0-9]{1,}$/",
        "view" => BASE_VIEW_DIR . "home/reservationDj.php",
    ],
    [
        "url" => "/^\/contact$/",
        "view" => BASE_VIEW_DIR . "home/contact.php",
    ],
    [
        "url" => "/^\/formulaire\?id=[0-9]{1,}$/",
        "view" => BASE_VIEW_DIR . "home/formulaire.php",
    ],
    [
        "url" => "/^\/calendrier\?id=[0-9]{1,}$/",
        "view" => BASE_VIEW_DIR . "home/calendrier.php",
    ],
    [
        "url" => "/^\/formulaires\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "reservation/formulaire.php",
    ],
    [
        "url" => "/^\/accept\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "reservation/accept.php",
    ],
    [
        "url" => "/^\/pricing$/",
        "view" => BASE_VIEW_DIR . "home/pricing.php",
    ],
    [
        "url" => "/^\/updateInfo\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "modification/info.php",
    ],
    [
        "url" => "/^\/updatePdp\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "modification/pdp.php",
    ],
    [
        "url" => "/^\/updatePhoto\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "modification/photo.php",
    ],
    [
        "url" => "/^\/updateCouverture\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "modification/couverture.php",
    ],
    [
        "url" => "/^\/updatefaq\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "modification/faq.php",
    ],
    [
        "url" => "/^\/calendriers\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "reservation/calendrier.php",
    ],
    [
        "url" => "/^\/register$/",
        "view" => BASE_CONTROLLER_DIR . "auth/register.php",
    ],
    [
        "url" => "/^\/messages$/",
        "view" => BASE_CONTROLLER_DIR . "admin/message.php",
    ],
    [
        "url" => "/^\/auth$/",
        "view" => BASE_CONTROLLER_DIR . "auth/login.php",
    ],
    [
        "url" => "/^\/logout$/",
        "view" => BASE_CONTROLLER_DIR . "auth/logout.php",
    ],

    [
        "url" => "/^\/delete_users\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "delete/delete.php",
    ],
    [
        "url" => "/^\/delete_reservation\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "reservation/delete.php",
    ],
    [
        "url" => "/^\/editProfil\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "modification/editProfil.php",
    ],
    [
        "url" => "/^\/payement\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "payement/payement.php",
    ],
    [
        "url" => "/^\/accept\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "reservation/accept.php",
    ],
    [
        "url" => "/^\/Dash$/",
        "view" => BASE_VIEW_DIR . "admin/Dash.php",
    ],

    [
        "url" => "/^\/messageDash$/",
        "view" => BASE_VIEW_DIR . "admin/message.php",
    ],
    [
        "url" => "/^\/table$/",
        "view" => BASE_VIEW_DIR . "admin/table.php",
    ],
    [
        "url" => "/^\/abonnement$/",
        "view" => BASE_VIEW_DIR . "admin/abonnement.php",
    ],
    [
        "url" => "/^\/inscrire$/",
        "view" => BASE_VIEW_DIR . "admin/inscrire.php",
    ],
    [
        "url" => "/^\/information$/",
        "view" => BASE_VIEW_DIR . "admin/information.php",
    ],
    [
        "url" => "/^\/create-account$/",
        "view" => BASE_VIEW_DIR . "admin/create-account.php",
    ],
    [
        "url" => "/^\/desactive\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "payement/desactive.php",
    ],
    [
        "url" => "/^\/active\?id=[0-9]{1,}$/",
        "view" => BASE_CONTROLLER_DIR . "payement/active.php",
    ],

];
$uri = $_SERVER["REQUEST_URI"];
foreach ($router as $route) {
    if (preg_match($route["url"], $uri)) {
        require $route["view"];
        break;
    }
}
