<?php 
 class destinosModel{
    
    
    private function connect(){
        $db = new PDO('mysql:host=localhost;dbname=chanty_travel;charset=utf8', 'root', '');
        return $db;
    }

    function getDestinos(){

        $db = $this -> connect();
        $query=$this->$db->prepare('SELECT * FROM destinos');
        $query->execute();
        $destinos = $query ->fetchAll(PDO::FETCH_OBJ);//arreglo de destinos

        return $destinos;
    }
 }