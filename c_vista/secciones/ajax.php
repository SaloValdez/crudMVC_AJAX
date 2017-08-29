<?php
  require_once "../../b_controlador/controlador.php";
  require_once "../../a_modelo/crud.php";

  class Ajax{
    public $validarUusario;

    public function validarauarioAjax(){
      $datos  = $this ->$validarUusario;
      $respuesta =MvcController::validarUsuarioController($datos);
    }
  }


  $ = new Ajax();
  $a -> validarUsuario = $_POST["validarUsuario"];
  $a ->validarUsuaruioAjax();
 ?>
