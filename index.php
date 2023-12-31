<?php
require_once('src/model/AlertMessage.php');
require_once('src/model/User.php');
require_once('src/model/Quiz.php');
require_once('src/model/Map.php');
require('src/controller/homeController.php');
require('src/controller/userController.php');
require('src/controller/quizController.php');
require('src/controller/mapController.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'home':
            homePage();
            break;
        case 'quizz':
            quizzPage();
            break;
        case 'map':
            mapPage();
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
