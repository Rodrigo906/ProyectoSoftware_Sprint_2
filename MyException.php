<?php 

class MyException extends Exception {

     public static $ERROR_FATAL = "alert-danger";
     public static $OPERACION_EXITOSA = "alert-success";
     public static $USUARIO_DUPLICADO = "alert-warning";
     private $mensaje;
     private $tipo;

     public function __construct($mensaje, $tipo){
        $this->mensaje = $mensaje;
        $this->tipo = $tipo;
     }


    public function errorMessage() {
        $msj ='<div class="alert '.$this->tipo.'" role="alert" id="notificacion">'.$this->mensaje.'</div>';
        return $msj;
    }
}

?>