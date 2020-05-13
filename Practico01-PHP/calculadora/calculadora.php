<?php
function operar()
{
    $numero_1 = $_POST['operando1'];
    $numero_2 = $_POST['operando2'];
    if ((is_numeric($numero_1)) && (is_numeric($numero_2))) {
        switch ($_POST['operador']) {
            case 'sumar':
                echo suma($numero_1, $numero_2);
                break;
            case 'restar':
                echo resta($numero_1, $numero_2);
                break;
            case 'multiplicar':
                echo multiplicacion($numero_1, $numero_2);
                break;
            case 'dividir':
                if ($numero_2 != 0)
                    echo division($numero_1, $numero_2);
                else
                    echo "no esta contemplada la division por el numero 0";
                break;
        }
    }else
        echo "escribi bien no seas manco";
}
