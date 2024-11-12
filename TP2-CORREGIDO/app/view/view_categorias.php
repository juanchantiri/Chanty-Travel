<?php

class categoriasView{
    private $user=null;

    public function __construct($user) {
        $this->user=$user;
    }

    public function showCategorias($categorias){
        $count = count ($categorias);

        require 'templates/lista_categorias.phtml';
}
    public function mostrarFormCategorias($categorias){
        require 'templates/añadirCategorias.phtml';
    }
    public function mostrarUpdateCategorias($categorias){
        require_once 'templates/formUpdateCategorias.phtml';
    }
} 