<?php
    require_once 'model/destinos_model.php';
    require_once 'model/categorias_model.php';
    require_once 'view/view_destinos.php';  

 class DestinosController {

    private $model;
    private $view; 
    private $categorias_model;

    function __construct($res) {
        $this ->model = new destinosModel();
        $this ->view = new destinosView($res);
        $this ->categorias_model = new categoriasModel();
    }

    function showDestinos(){
        $destinos =$this->model->getDestinos();
        $categorias = $this->categorias_model->getCategorias();
        foreach ($destinos as $destino) {
            // Buscar la categoría correspondiente al destino
            foreach ($categorias as $categoria) {
                if ($destino->categoria_id == $categoria->id) {
                    $destino->categoria_nombre = $categoria->nombre; // Asignar el nombre de la categoría
                    break;  // Salir del bucle una vez que encontramos la categoría
                }
            }
        }
        return $this->view->showDestinos($destinos,$categorias);
    }
    function mostrarFormDestinos(){
        $destinos=$this->model->getDestinos();
        $categorias = $this->categorias_model->getCategorias();

        return $this->view->mostrarFormDestinos($destinos, $categorias);
}

    function addDestinos(){

        $pais=$_POST['pais'];
        $ciudad=$_POST['ciudad'];
        $actividades=$_POST['actividades'];
        $precio=$_POST['precio'];
        $categoria_id = $_POST['categoria_id'];
    
        header('Location: ' . BASE_URL);

        return $this->model->añadirDestinos($pais,$ciudad,$actividades,$precio,$categoria_id);

    }
    function borrarDestinos($id){
        $this->model->deleteDestinos($id);

        header('Location: ' . BASE_URL);
    }
    
    function actualizarDestinos($id){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $destinos = $this->model->idDestinos($id);
            if(!$destinos){
                echo 'el destino a editar no existe';
            }
            return $this->view->mostrarUpdateDestinos($destinos);
        }

        $pais=$_POST['pais'];
        $ciudad=$_POST['ciudad'];
        $actividades=$_POST['actividades'];
        $precio=$_POST['precio'];
        
        header('Location: ' . BASE_URL);
        return $this->model->updateDestinos($id,$pais,$ciudad,$actividades,$precio);
        
    }
    //public function listarDestinosPorCategoria($categoriaId) {
        // Obtener destinos por categoría
       // $destinos = $this->categorias_model->obtenerDestinosPorCategoria($categoriaId);

        // Obtener todas las categorías para el menú de selección
      //  $categorias = $this->categorias_model->getCategorias();

      //  return $this->view->listarDestinosPorCategoria($destinos,$categorias);
    //}
}
