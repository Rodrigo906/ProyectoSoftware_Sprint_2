<?php 
require('MyException.php');
require('mysql.php');
    $id = $_GET['id'];
    $mysql = new mysql();
    try{
        
    $mysql->deleteUser($id);

    }catch(MyException $e){
       header('Location: index.php?mensajeEx='.$e->errorMessage(), true);
       die();
    }
?>
