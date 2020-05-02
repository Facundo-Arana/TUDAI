<?php
require_once('db.php');

function listar_pagos()
{
    $urlSite = 'http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/";

    $html = '<html lang="en">
    <head>
        <base href="' . $urlSite . '">
        <title>Pagos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>

    
    <div class="conteiner">
        <h1>Trabajo Practico BBDD</h1>
        
        <form action="nuevo" method="POST">
            <h2>agregar nuevo pago</h2>
            <div>
                <label>nombre    </label>
                <input type="text" name="deudor" placeholder="Nombre">
            </div>    
            <div>
                <label>numero de cuota</label>
                <select name="cuota">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div>
                <label>monto</label>
                <input type="number" name="capital" placeholder="monto">
            </div>
            <div>
                <label></label>
                <input type="submit">
            </div>
        </form>';

    $html .= '<table class="tabla">';
    $html .= '<tr><td colspan="6"><h2>pagos registrados</h2></td></tr>';
    $html .= "<tr>";
    $html .= "<td></td>";
    $html .= "<td>Deudor</td>";
    $html .= "<td>cuota</td>";
    $html .= "<td>monto</td>";
    $html .= "<td>fecha de pago</td>";
    $html .= "<td></td>";
    $html .= "</tr>";

    $pagos = get_pagos();
    foreach ($pagos as $pago) {
        $html .= "<tr>";
        $html .= "<td>" . $pago->id_deudor . "</td>";
        $html .= "<td>" . $pago->deudor . "</td>";
        $html .= "<td>" . $pago->cuota . "</td>";
        $html .= "<td>" . $pago->cuota_capital . "</td>";
        $html .= "<td>" . $pago->fecha . "</td>";
        $html .= '<td><a href="eliminar/' . $pago->id_deudor . '">eliminar</a></td>';
        $html .= "</tr>";
    }
    $html .= '</table>';
    $html .= '</div>
    </body>
    </html>';

    return $html;
}

function nuevo_pago()
{   
    $deudor = $_POST['deudor'];
    $cuota = $_POST['cuota'];
    $cuota_capital = $_POST['capital'];
    $fecha = date("Y") . "-" . date("m") . "-" . date("d");

    if (!empty($deudor) && !empty($cuota) && !empty($cuota_capital)) {
        nuevo_pagoDB($deudor, $cuota, $cuota_capital, $fecha);
        header("Location: pagos");
    } else {
        echo '<h1>ERROR! Faltan datos!</h1>';
    }
}
