<?php
include_once('model/university_model.php');


class view
{
    private $carreras;
    private $materias;




    function __construct()
    {
        $this->carreras = new university_model();
        $this->materias = new university_model();
    }





    /**
     * Muestra la pagina principal con todas las carreras y todas las materias.
     * 
     */

    public function principalView($urlBase)
    {
        $this->home($urlBase);

        $careers = $this->carreras->getAllCarreras();
        $this->mostrar_carreras($careers);

        $matters = $this->materias->getAllMaterias();
        $this->mostrar_materias($matters);

        $this->close_home();
    }






    /**
     * Muestras las materias de una carrera especifica.
     * 
     */
    public function secundaryView($urlBase, $matters)
    {
        $this->home($urlBase);

        $careers = $this->carreras->getAllCarreras();
        $this->mostrar_carreras($careers);

        $this->mostrar_materias($matters);

        $this->close_home();
    }





    /**
     * Muestra las carreras menores a tres años.
     * 
     */
    public function terciaryView($urlBase, $careers)
    {
        $this->home($urlBase);

        $this->mostrar_carreras($careers);

        $matters = $this->materias->getAllMaterias();
        $this->mostrar_materias($matters);

        $this->close_home();
    }

    public function errorView($urlBase)
    {
        $this->home($urlBase);

        $this->error();

        $this->close_home();
    }


    


    /**
     * Muestra un mensaje de error.
     * 
     */
    public function error()
    {
        $html = '<h2 >aca paso algo trambolico</h2>';
        echo $html;
    }





    /**
     *    Muestra los formularios y tablas necesarios para trabajar el ejercicio 4.
     *  @param carreras recibe los datos de todas las carreras alojadas en la bbdd para mostrarlos en una tabla.
     *  @param materias recibe los datos de todas las materias que se encuentran en la bbdd para mostrarlos en una tabla.
     * 
     */
    public function home($urlBase)
    {
        $html = '<html lang="en">
    <head>      
        <base href="' . $urlBase . '">
        <title>Universidad del alto Perú</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>

    <div class="conteiner">
        <h1>Trabajo Practico BBDD</h1>
        
        <form action="nueva_carrera" method="POST" class="carrera">
            <h2>agregar nueva carrera</h2>

            <label class="visible">      nombre de carrera </label>
            <input type="text" name="carrera_name" >

            <label>----</label>
            <label class="visible">       cantidad de años </label>
            <input type="number" name="años" >
            
            <label>----</label>
            <input type="submit">           
        </form>
        
        <form action="nueva_materia" method="POST" class="materia">
            <h2>Agregar nueva materia</h2>
            
            <label class="visible">     Nombre de materia </label>
            <input type="text" name="materia_name" >
            
            <label>----</label>
            <label class="visible">              Profesor </label>
            <input type="text" name="profesor_name" >

            <label>----</label>
            <label class="visible">     Nombre de carrera </label>
            <select name="carrera">';
        $careers = $this->carreras->getAllCarreras();

        foreach ($careers as $career) {
            $html .= '<option value="' . $career->id_carrera . '">' .  $career->nombre  . ' </option>';
        }

        $html .= ' </select>
            <label>----</label>
            <input type="submit">           
            </form>';

        echo $html;
    }










    /**
     *  Mustra la tabla de las carreras guardadas en la base de datos.
     * 
     */
    public function mostrar_carreras($careers)
    {
        $cont = 0;
        foreach ($careers as $c) {
            if (($c->cant_anios) > 3)
                $cont = 1;
        }
        $html = '<table class="tabla1">
            <tr>
                <td colspan="5">
                <h2>todas las carreras</h2>
                </td>
            </tr>
            <tr>
            <td>N°</td>
                <td>Nombre</td>
                <td>Cantidad de años</td>';
        if ($cont != 0) {
            $html .= '<td colspan="2"><a href="carreras_menores">ver carreras menores de 3 años</a></td>
                </tr>';
        } else {
            $html .= '<td colspan="2"><a href="home">ver todas las carreras</a></td>
                </tr>';
        }
        foreach ($careers as $carrera) {
            $html .= "<tr>";
            $html .= "<td> " .  $carrera->id_carrera . "</td>";
            $html .= "<td> " .  $carrera->nombre  . "</td>";
            $html .= "<td> " .  $carrera->cant_anios  . "</td>";
            $html .= '<td><a href="ver_materias_por_carrera/' . $carrera->id_carrera . '">ver materias</a></td>';
            $html .= '<td><a href="eliminar_carrera/' . $carrera->id_carrera . '">eliminar carrera</a></td>';
            $html .= "</tr>";
        }
        $html .= '</table>';
        echo $html;
    }









    /**
     *  Muestra las meterias guardadas en la base de datos.
     * 
     */
    public function mostrar_materias($matters)
    {
        $html = '<table class="tabla2">
                <tr>
                    <td colspan="5">
                        <h2>todas las materias</h2>
                        </td>
                        </tr>
                        <tr>
                    <td>N°</td>
                    <td>Nombre</td>
                    <td>profesor</td>
                    <td colspan="1"></td>
                </tr>';
        foreach ($matters as $materia) {
            $html .= "<tr>";
            $html .= "<td> " .  $materia->id_materia . "</td>";
            $html .= "<td> " .  $materia->nombre  . "</td>";
            $html .= "<td> " .  $materia->profesor  . "</td>";
            $html .= '<td><a href="eliminar_materia/' . $materia->id_carrera_fk . '">eliminar materia</a></td>';
            $html .= "</tr>";
        }
        $html .= '</table>';
        echo $html;
    }












    /**
     *  Cierra el tag </html> y el </div> conteiner. Voy a hacer estos hasta que aprenda a usar ajax.
     * 
     */
    public function close_home()
    {
        $html = '</div>
                </body>
                </html>';
        echo $html;
    }
}
