<?php
//front controller 
require_once "model/conexion.php";
require_once "model/usuario.php";
session_start();

// if(isset($_SESSION['user']) || (isset($_POST['Correo_Electronico']) && isset($_POST['Contrasena_Usuario'])|| (isset($_GET['Start'])))){ //esto valida que se necesite una sesion iniciada o hacer login para usar cualquier metodo 
// if (!isset($_GET['c'])) { //home controller es donde esta la landing page  
//     require_once 'controller/homeController.php';
//     $controller = new HomeController();
//     call_user_func(array($controller, "index"));
// } else {
//     $controller = $_GET['c'];
//     require_once "controller/$controller"."Controller.php";
//     $controller = ucwords($controller) . "Controller";
//     $controller = new $controller;
//     $action = isset($_GET['a']) ? $_GET['a'] : 'index'; //operador ternario
//     call_user_func(array($controller, $action));
// }
// }else { // si no se cumple la condicion reenvia al login 
//     require_once 'controller/homeController.php';// lo cambie porque al abrirlo se esta llendo por este condicional y no va al home 
//     $controller = new HomeController();
//     call_user_func(array($controller, "index"));
// }

if (!isset($_GET['c'])) { 
    require_once 'controller/homeController.php';
    $controller = new HomeController();
    call_user_func(array($controller, "index"));
} else {
    $controller = $_GET['c'];
    require_once "controller/$controller"."Controller.php";
    $controller = ucwords($controller) . "Controller";
    $controller = new $controller;
    $action = isset($_GET['a']) ? $_GET['a'] : 'index';
    call_user_func(array($controller, $action));
}