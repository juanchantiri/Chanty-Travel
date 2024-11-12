<?php

class destinosView{
    private $user=null;

    public function __construct($user) {
        $this->user=$user;
    }

    public function showDestinos($destinos, $categorias){
        $count = count ($destinos);
        $count = count ($categorias);

        require 'templates/lista_destinos.phtml';
}
    public function mostrarFormDestinos($destinos,$categorias){
        require_once 'templates/formAñadirDestinos.phtml';
    }
    public function mostrarUpdateDestinos($destinos){
        require_once 'templates/formUpdateDestinos.phtml';
    }
}