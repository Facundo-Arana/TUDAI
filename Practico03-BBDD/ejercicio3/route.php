<?php
require_once('funcionesPagos.php');


if (isset($_GET['action'])) {

    $arregloURL = explode("/", $_GET['action']);

    switch ($arregloURL[0]) {
        case 'pagos':
            echo listar_pagos();
            break;
        case 'nuevo':
            nuevo_pago();
            break;
        default:echo "<h1>aca paso algo trambólico</h1>";
    }
} else
    echo ("<h1>aca paso algo trambólico</h1>");
