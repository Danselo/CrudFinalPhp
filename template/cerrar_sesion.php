<?php 
    session_start();
    if (isset($_POST['usuario'])){
        header('Location: http://localhost/crudFinalPhp/login.php');
        session_destroy();

    }else{
        header('Location: http://localhost/crudFinalPhp/login.php');
    }
?>