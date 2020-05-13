<?php
function formulario_1()
{
    abrir_html("Ejercicio 1");
    echo ('
        <form action="ejercicio1/lista/" method="POST" id="form">
            <h2>Crear una lista</h2>                                     
            <input type="number" min="1" name="limite" placeholder="tamaño de lista">
            <label><-- --></label>
            <input type="submit" name="lista" value="crear">
            <label><----></label>
        </form>');
    cerrar_html();
}
function formulario_2()
{
    abrir_html("Ejercicio 2");
    echo ('
        <form action="ejercicio2/resolucion2/" method="POST" >
            <h2>completar todos los campos</h2>
            <input type="text" name="nombre" placeholder="firstname">
            <label><-- --></label>
            <input type="text" name="apellido" placeholder="lastname">
            <label><-- --></label>
            <input type="number" name="edad" placeholder="old">
            <label><-- --></label>
            <input type="submit">
        </form>');
    cerrar_html();
}
function formulario_3()
{
    abrir_html("Ejercicio 3");
    echo ('
        <form action="ejercicio3/resolucion3/" method="POST" >
            <h2>( n°1 * n°2 ) - n°3</h2>
            <input type="number" name="num1" placeholder="num1">
            <label><-- --></label>
            <input type="number" name="num2" placeholder="num2">
            <label><-- --></label>
            <input type="number" name="num3" placeholder="num3">
            <label><-- --></label>
            <input type="submit" value="realizar operacion">
        </form>');
    cerrar_html();
}
function formulario_4()
{
    abrir_html("Ejercicio 4");
    echo ('
        <form action="ejercicio4/resolucion4/" method="POST">
           <h2> IMC (indice de masa corporal)</h2>
            <input type="text" name="peso" placeholder="peso (kg)">
            <label><-- --></label>
            <input type="text" name="altura" placeholder="altura (mts)">
            <label><-- --></label>
            <input type="submit">
        </form>');
    cerrar_html();
}
function formulario_5()
{
    abrir_html("Ejercicio 5");
    echo ('
        <form action="ejercicio5/resolucion5/" method="POST" >
            <h2>tabla de multiplicar</h2>
            <input type="number" min="1" max="30"name="limite" placeholder="limite de tabla">
            <label><-- --></label>
            <input type="submit">
        </form>');
    cerrar_html();
}
function ejercicio_6()
{
    abrir_html("Ejercicio 6");
    echo '
        <ul class="second-nav">
            <li><a href="ejercicio6/calculadora">Calculadora</a></li>
            <li><a href="ejercicio6/pi">El número Pi</a></li>
            <li><a href="ejercicio6/about">About</a></li>
        </ul>';
}
function calculadora()
{
    echo '
        <form action="ejercicio6/calculadora/" method="POST">
            <h2>Calculadora</h2>
            <select name="operador">
                <option> sumar </option>
                <option> restar </option>
                <option> multiplicar </option>
                <option> dividir </option>
            </select>
            <label><-- --></label>
            <input type="text" name="operando1" placeholder="operando 1">
            <label><-- --></label>
            <input type="text" name="operando2" placeholder="operando 2">
            <label><-- --></label>
            <input type="submit" name="resolver">
        </form>
    ';
}
function ejercicio_7()
{
    abrir_html("incompleto");
    echo "tarea 7 pendiente";
    cerrar_html();
}
function ejercicio_8()
{

    abrir_html("incompleto");
    echo "tarea 8 pendiente";
    cerrar_html();
}
function ejercicio_9()
{

    abrir_html("incompleto");
    echo "tarea 9 pendiente";
    cerrar_html();
}
