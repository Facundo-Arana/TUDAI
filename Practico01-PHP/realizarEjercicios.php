<?php
// este es el router
require_once('index.php');
require_once('ejercicios/formularios.php');
require_once('ejercicios/resoluciones.php');
require_once('calculadora/pi.php');
require_once('calculadora/calculadora.php');
require_once('calculadora/operaciones.php');
require_once('calculadora/about.php');

if (($_GET["action"]) == "") {
    cargar_index();
} else {
    $ejercicios = explode("/", $_GET["action"]);
    switch ($ejercicios[0]) {
            /**
         *          Ejercicio 1
         */
        case 'ejercicio1':
            if (empty($ejercicios[1]))
                formulario_1();
            else
                resolucion_1();
            break;
            /**
             *      Ejercicio 2
             */
        case 'ejercicio2':
            if (empty($ejercicios[1]))
                formulario_2();
            else
                resolucion_2();
            break;
            /**
             *      Ejercicio 3
             */
        case 'ejercicio3':
            if (empty($ejercicios[1]))
                formulario_3();
            else
                resolucion_3();
            break;
            /**
             *      Ejercicio 4
             */
        case 'ejercicio4':
            if (empty($ejercicios[1]))
                formulario_4();
            else
                resolucion_4();
            break;
            /**
             *      Ejercicio 5
             */
        case 'ejercicio5':
            if (empty($ejercicios[1]))
                formulario_5();
            else
                resolucion_5();
            break;
            /**
             *      Ejercicio 6
             */
        case 'ejercicio6':
            ejercicio_6();
            if (isset($ejercicios[1])) {
                switch ($ejercicios[1]) {
                    case 'calculadora':
                        if (isset($_GET['resolver']))
                            operar();
                        else
                            calculadora();
                        break;
                    case 'about':
                        if (isset($ejercicios[2])) {
                            showDeveloper($ejercicios[2]);
                        } else
                            getAbout();
                        break;
                    case 'pi':
                        getPi();
                        break;
                }
            }
            break;
            /**
             *      Ejercicio 7
             */
        case 'ejercicio7':
            ejercicio_7();
            break;
            /**
             *      Ejercicio 8
             */
        case 'ejercicio8':
            ejercicio_8();
            break;
            /**
             *      Ejercicio 9
             */
        case 'ejercicio9':
            ejercicio_9();
            break;
        default:
            abrir_html("error");
            echo "parametro no esperado por el route";
            cerrar_html();
    }
}
