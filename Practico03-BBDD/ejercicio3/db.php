<?php

/**
 * @return PDO da acceso a base de datos 'pagos'.
 * 
 */
function conection()
{
    return new PDO('mysql:host=localhost;' . 'dbname=pagos;charset=utf8', 'root', '');
}

/**
 * @return $pagos retorna todo el contenido de la tabla 'pago'.
 *    
 */
function get_pagos()
{
    $db = conection();
    $query = $db->prepare("SELECT * FROM pago");
    $query->execute();
    $pagos = $query->fetchAll(PDO::FETCH_OBJ);

    return $pagos;
}

/**
 *        Ingresa un nuevo pago. 
 * 
 */
function nuevo_pagoDB($deudor, $cuota, $couta_capital, $fecha)
{
    $db = conection();
    $query = $db->prepare('INSERT INTO pago (id_deudor, deudor, cuota, cuota_capital, fecha) VALUES (NULL, ?, ?, ?, ?)');
    
    $query->execute([$deudor, $cuota, $couta_capital, $fecha]);

}
