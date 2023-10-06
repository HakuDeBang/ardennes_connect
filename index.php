<?php
session_start();

require_once('src/model/AlertMessage.php');
require_once('src/model/User.php');
require_once('src/model/Quiz.php');
require_once('src/model/Map.php');
require('src/controller/homeController.php');
require('src/controller/userController.php');
require('src/controller/quizController.php');
require('src/controller/mapController.php');
require('src/controller/listController.php');

// var_dump($_SESSION['user']);

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'home':
            homePage();
            break;
        case 'event':
            evenement();
            break;
        case 'pageEvent':
            pageEvent();
            break;
        case 'quizz':
            quizzPage();
            break;
        case 'map':
            mapPage();
            break;
        case 'list':
            if (isset($_GET['filter'])) {
                listPage($_GET['filter']);
            } else {
                listPage();
            };
            break;
        case 'profil':
            if (isset($_SESSION['user']))
                profil();
            break;
        case 'scanner':
            if (isset($_SESSION['user']))
                qrcode();
            break;
        case 'coupon':
            if (isset($_SESSION['user']))
                coupon();
            break;
        case 'login':
            if (!isset($_SESSION['user']))
                loginPage();
            break;
        case 'loginTreatment':
            if (!isset($_SESSION['user']))
                loginTreatment();
            break;
        case 'logOut':
            logOut();
            break;
        case 'fetchCompany_tag':
            $data = file_get_contents("php://input");
            if (isset($data)) {
                filteredList_by_tag($data);
            } else {
                return false;
            }
            break;
        case 'fetchCompany_search':
            $data = file_get_contents("php://input");
            if (isset($data)) {
                filteredList_by_search($data);
            } else {
                return false;
            }
            break;
        default:
    }
} else {
    homePage();
}
