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

    function showDestinos(){
        $destinos =$this->model->getDestinos();

        return $this->view->showDestinos($destinos);
    }
    function mostrarFormDestinos(){
        $destinos=$this->model->getDestinos();

        return $this->view->mostrarFormDestinos($destinos);
}

    function addDestinos(){

        $pais=$_POST['pais'];
        $ciudad=$_POST['ciudad'];
        $actividades=$_POST['actividades'];
        $precio=$_POST['precio'];
    
        header('Location: ' . BASE_URL);

        return $this->model->añadirDestinos($pais,$ciudad,$actividades,$precio);

    }
    function borrarDestinos($id){
        $this->model->deleteDestinos($id);

        header('Location: ' . BASE_URL);
    }
}
