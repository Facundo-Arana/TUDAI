<?php

class university_model
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=universidad_database;charset=utf8', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $c) {
            echo ($c);
        }
    }





    /**
     *  @return carrera  trae todos los elementos de la tabla 'carrera' de la bbdd 'universidad_database'.
     * 
     */
    public function getAllCarreras()
    {
        $query = $this->db->prepare('SELECT * FROM carrera');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }





    /**
     *     Añade una nueva carrera a la base de datos. 
     *  @param name es el nombre de la carrera que se quiere añadir a la base de datos.
     *  @param years es la cantidad de años que dura la carrera .
     * 
     */
    function insert_carrera($name, $years)
    {
        $query = $this->db->prepare('INSERT INTO carrera(id_carrera, nombre, cant_anios) VALUES(NULL,?,?)');
        $respuesta = $query->execute([$name, $years]);
        return $respuesta;
    }






    /**
     *     Elimina una carrera de la base de datos. 
     *  @param carrera es el identificador de la carrera que se quiere eliminar de la base de datos.
     * 
     * 
     */
    function delete_carrera($carrera)
    {
        $query = $this->db->prepare('DELETE FROM carrera WHERE id_carrera=?');
        $respuesta = $query->execute([$carrera]);
        return $respuesta;
    }







    /**
     *  @return materia  trae todos los elementos de la tabla 'materia' de la bbdd 'universidad_database'.
     * 
     */
    function getAllMaterias()
    {
        $query = $this->db->prepare('SELECT * FROM materia');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }








    /**
     *   //TODO  crear nuevamente la bbdd para la relacion entre entidades correcta.
     * 
     * 
     */
    function insert_materiaDB($materia, $profesor, $carrera)
    {
        $query = $this->db->prepare('INSERT INTO materia(id_materia, nombre, profesor, id_carrera_fk) VALUES(NULL, ?, ?, ?)');
        $respuesta = $query->execute([$materia,$profesor,$carrera]);
        return $respuesta;
    }





    /**
     * Elimina una materia de la base de datos.
     * 
     */
    function delete_materia($id)
    {
        $query = $this->db->prepare('DELETE FROM materia WHERE id_materia=?');
        $respuesta = $query->execute([$id]);
        return $respuesta;
    }





    /** 
     *  Muestra las materias de una carrera especifica.  
     *  $id_carrera es el identificador de la carrera.
     * 
     */
    function get_matter_by_career($id_carrera)
    {
        $query = $this->db->prepare('SELECT * FROM materia WHERE id_carrera_fk LIKE ?');
        $query->execute([$id_carrera]);
        $materias = $query->fetchAll(PDO::FETCH_OBJ);
        return $materias;
    }





    /**
     * $carreras tiene las carreras menores o iguales a tres años.
     * 
     */
    function get_careers_minors()
    {
        $query = $this->db->prepare('SELECT * FROM carrera WHERE cant_anios < ?');
        $query->execute([4]);
        $carreras = $query->fetchAll(PDO::FETCH_OBJ);
        return $carreras;
    }
}
