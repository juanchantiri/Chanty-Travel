<?php

class destinosView{
    private $user=null;

    public function __construct($user) {
        $this->user=$user;
    }

    public function showDestinos($destinos){
        $count = count ($destinos);

        require 'templates/lista_destinos.phtml';
}
    public function mostrarFormDestinos(){
        require_once 'templates/formAñadirDestinos.phtml';
    }
}