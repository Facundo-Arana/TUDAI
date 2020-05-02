<?php
require_once('model/university_model.php');
require_once('controller/universityController.php');
require_once('view/view.php');


$urlSite = 'http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/";

$home = new view();

if (empty($_GET['action']) || ($_GET['action'] == 'home')) {
    $home->principalView($urlSite);
    die;
}

$controller = new universityController();

$actions = explode("/", $_GET['action']);

switch ($actions[0]) {

    case 'nueva_carrera':
        $controller->nueva_carrera($urlSite);
        break;



    case 'eliminar_carrera':
        $controller->eliminar_carrera($actions[1], $urlSite);
        break;



    case 'nueva_materia':
        $controller->nueva_materia($urlSite);
        break;



    case 'eliminar_materia':
        $controller->eliminar_materia($actions[1], $urlSite);
        break;



    case 'ver_materias_por_carrera':
        $controller->ver_materias_por_carrera($actions[1], $urlSite);
        break;



    case 'carreras_menores':
        $controller->ver_carreras_menores($urlSite);
        break;


    default:
        $home->errorView($urlSite);
}
