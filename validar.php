<?php 
    $correo=$_POST['email'];
    $contraseña=$_POST['password'];

    session_start();
    $_SESSION['email'] = $correo;

    include('model/db.php');

    $consulta= "SELECT*FROM $usuario where email='$correo' and contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas= mysqli_num_rows($resultado);

    if ($filas){
        header("location:index.php");
    }else{
        ?>
        <?php 
        include("login.php");
        ?>
        <script>
            Swal.fire(
            'Error de autenticacion!',
            'Verifica tus datos',
            'error'
            )
        </script>
        <?php 
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);