<?php 
    //SE CAPTURA LA INFORMACION
    //print_r($_POST);
    if (empty($_POST["oculto"]) || empty($_POST["txtDocumento"])|| empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) ||
    empty($_POST["txtTime"]) || empty($_POST["txtDia"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $documento = $_POST["txtDocumento"];
    $nombre = $_POST["txtNombre"];
    $apellido =$_POST["txtApellido"];
    $time =$_POST["txtTime"];
    $dia = $_POST["txtDia"];

    $validar_documento=$bd->query("SELECT * FROM persona WHERE documento='$documento' ");
    $rows = $validar_documento->fetchAll();
    $count = count($rows);
        if($count>0){
            ?>
            <?php 
            include("index.php");
            ?>
            <script>
                Swal.fire(
                'EL DOCUMENTO YA HIZO UN REGISTRO',
                'no se pueden hacer mas de 1 registro por persona',
                'error'
                )
            </script>
            
            <?php 
            exit();

        }

    $sentencia = $bd->prepare("INSERT INTO persona(documento,nombre,apellido,horario,dia) VALUES (?,?,?,?,?); ");
    $resultado = $sentencia->execute([$documento,$nombre,$apellido,$time,$dia]);
    if ($resultado == TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>