<?php
include_once('model/university_model.php');
include_once('view/view.php');

class universityController
{
    private $model;
    private $view;

    

    public function __construct()
    {
        $this->model = new university_model();
        $this->view = new view();
    }





    /**
     *    Envia los parametros ingresados desde un formulario a la funcion encargada de añadir una nueva carrera al la bbdd.
     * 
     */
    public function nueva_carrera($urlBase)
    {
        $nombre = $_POST['carrera_name'];
        $years = $_POST['años'];
        $respuesta =  $this->model->insert_carrera($nombre, $years);
        if ($respuesta == true)
            $this->view->principalView($urlBase);
        else
            echo('error en el servidor servidor');
    }








    /**
     *    @param id es el identificador que corresponde a la carrera que se quiere eliminar.
     *    Llama a la funcion encargada de borrarla de la base de datos. 
     * 
     */
    function eliminar_carrera($id, $urlBase)
    {
        $respuesta = $this->model->delete_carrera($id);
        if($respuesta==true)
            $this->view->principalView($urlBase);
        else
            echo('error en el servidor servidor');
    }










    /**
     *   Envia los parametros nombre,profesor y carrera a la funcion que se encarga de añadirlos a la base de datos.
     *  
     */
    function nueva_materia($urlBase)
    {
        
        $nombre =   $_POST['materia_name'];
        $profesor =  $_POST['profesor_name'];
        $carrera =  $_POST['carrera'];
        $respuesta = $this->model->insert_materiaDB($nombre, $profesor, $carrera);
        if($respuesta==true)
            $this->view->principalView($urlBase);
        else
            $this->view->errorView($urlBase);
    }



    /**
     * Eliminar una materia
     * 
     * 
     * 
     */
    function eliminar_materia($id, $urlBase)
    {
        $respuesta = $this->model->delete_materia($id);
        if($respuesta==true)
            $this->view->principalView($urlBase);
        else
            $this->view->errorView($urlBase);
    }





    /**
     *  Llama a la funcion que muestra las materias de una carrera especifica.
     *  @param id es el identificador de la carrera para poder mostrar sus materias.
     * 
     */
    function ver_materias_por_carrera($id, $urlBase)
    {
        $matters = $this->model->get_matter_by_career($id);
        $this->view->secundaryView($urlBase, $matters);
    }








    /**
     *  Llama a la funcion que se encargar de mostrar las carreras que duran menos de tres años.
     * 
     */
    function ver_carreras_menores($urlBase)
    {
        $carreras = $this->model->get_careers_minors();
        $this->view->terciaryView($urlBase, $carreras);
    }
}
