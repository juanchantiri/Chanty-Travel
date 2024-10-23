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

}