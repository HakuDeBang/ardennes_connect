<?php
require_once('src/model/AlertMessage.php');
require_once('src/model/User.php');
require('src/controller/homeController.php');
require('src/controller/userController.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'home':
            homePage();
            break;
        case 'login':
            if (!isset($_SESSION['user']))
                loginPage();
            break;
        case 'loginTreatment':
            if (!isset($_SESSION['user']))
                loginTreatment();
            break;
        default:
    }
} else {
    homePage();
}
