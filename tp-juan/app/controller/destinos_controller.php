<?php
    require_once 'model/destinos_model.php';
    require_once 'view/view_destinos.php';  

 class DestinosController {

    private $model;
    private $view; 

    function __construct($res) {
        $this ->model = new destinosModel();
        $this ->view = new destinosView($res);
    }

    function showDestinos($destinos){
        $destinos =$this ->model->getDestinos();

        return $this->view->showDestinos($destinos);
    }


}