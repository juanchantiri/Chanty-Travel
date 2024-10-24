<?php 
 class destinosModel{
    
    
    private function connect(){
        $db = new PDO('mysql:host=localhost;dbname=chanty_travel;charset=utf8', 'root', '');
        return $db;
    }

    function getDestinos(){
        $db = $this -> connect();
        $query=$db->prepare('SELECT * FROM destinos');
        $query->execute();
        $destinos = $query ->fetchAll(PDO::FETCH_OBJ);//arreglo de destinos

        return $destinos;
    }

    function añadirDestinos($pais,$ciudad,$actividades,$precio){
            $db = $this -> connect();
            $query=$db->prepare('INSERT INTO destinos(pais,ciudad,actividades,precio) VALUES (?,?,?,?)');
            $query->execute([$pais,$ciudad,$actividades,$precio]);
    
            $id=$db->lastInsertId();

            return $id;

    } 
 }