<?php
function abrir_html($titulo)
{
    $urlSite = 'http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/";
    if ($titulo == '') {
        $titulo = 'Tp 1';
    }
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="' . $urlSite . '">
        <title>' . $titulo . '</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <h1 id="boton">Trabajo Practico n°1 PHP</h1>
            <nav >
                <ul class="oculto menu" id="nav">
                    <li><a href="ejercicio1" id="ej1">ejercicio 1</a></li>
                    <li><a href="ejercicio2" id="ej2">ejercicio 2</a></li>
                    <li><a href="ejercicio3" id="ej3">ejercicio 3</a></li>
                    <li><a href="ejercicio4" id="ej4">ejercicio 4</a></li>
                    <li><a href="ejercicio5" id="ej5">ejercicio 5</a></li>
                    <li><a href="ejercicio6" id="ej6">ejercicio 6</a></li>
                    <li><a href="ejercicio7" id="ej7">ejercicio 7</a></li>
                    <li><a href="ejercicio8" id="ej8">ejercicio 8</a></li>
                    <li><a href="ejercicio9" id="ej9">ejercicio 9</a></li>
                </ul>
            </nav>
        </header>
        <div class="conteiner">
        ';
}
function cerrar_html()
{
    echo
        '
        </div>
        <script type="text/javascript" src="javascript/navegacion.js"></script>
        </body>
        </html>
        ';
}
function cargar_index()
{
    abrir_html("Tp1");
    cerrar_html();
}
