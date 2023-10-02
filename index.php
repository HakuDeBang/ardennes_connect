<?php
require('controller/homeController.php');
require('controller/userController.php');

if ($_GET['action']) {
    switch($_GET['action']) {
        case 'home':
            homePage();
            break;
        case 'login':
            loginPage();
            break;
        default:
    }
} else {
    homePage();
}