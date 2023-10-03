<?php
require('src/controller/homeController.php');
require('src/controller/userController.php');

if (isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'home':
            homePage();
            break;
        case 'login':
            loginPage();
            break;
        case 'loginTreatment':
            loginTreatment();
            break;
        default:
    }
} else {
    homePage();
}