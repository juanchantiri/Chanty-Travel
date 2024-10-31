<?php
require_once 'controller/auth_controller.php';
require_once 'libs/response.php';
require_once 'controller/destinos_controller.php';
require_once 'middlewares/authMiddlewares.php';

define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$res = new Response();
$action = 'listar';
if(!empty( $_GET['action'])){
    $action = $_GET ['action'];
}


$params = explode('/', $action); 


 switch ($params[0]){
     case 'listar':
        sessionAuthMiddleware($res);
        $controller = new DestinosController($res);
        $controller->showDestinos();
        break;

    case 'añadir':
        sessionAuthMiddleware($res);
        $controller=new DestinosController($res);
        $controller->mostrarFormDestinos();
        break;
    
    case 'añadirDestinos':
        sessionAuthMiddleware($res);
        $controller=new DestinosController($res);
        $controller->addDestinos();
        break;
    case 'borrarDestinos':
        sessionAuthMiddleware($res);
        $controller=new DestinosController($res);
        $controller->borrarDestinos($params[1]);
        break;

     case 'showLogin':
        $controller=new AuthController();
        $controller->showLogin();
        break;

     case 'Login':
        $controller=new AuthController();
        $controller->login();
        break;

    case 'Logout':
        $controller=new AuthController();
        $controller->logout();
        break;
    

     default:
     echo "404 page Not Found";
     break;
 }