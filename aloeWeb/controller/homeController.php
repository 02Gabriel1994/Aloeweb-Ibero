<?php
//este home controller es el controlador del menu cuando ya se ha hecho login 
class HomeController
{
    protected $usuario;

    public function __CONSTRUCT()
    {
        $this->usuario = new Usuario();
    }

    public function index()
    {
        require "view/login.php";

    }

    public function login()
    {
        /*$data = $_POST;
        try {
            $respuesta = $this->usuario->login($data['usuario'],$data['contrasena']);
            if ($respuesta) {*/
                require "view/dashboard.php";
            /*}
        } catch (Exception $e) {
        }*/
    }
    function test()
    {
        var_dump(Database::Connect());
    }
}
