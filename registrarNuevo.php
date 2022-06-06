<?php 
    //SE CAPTURA LA INFORMACION
    //print_r($_POST);
    if (empty($_POST["oculto"]) || empty($_POST["nombre"])|| empty($_POST["email"]) || empty($_POST["password"]) ||
    empty($_POST["passwordConfirm"])){
        ?>
        <?php 
        include("registro.php");
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
    if($_POST["password"] != $_POST["passwordConfirm"]){
        ?>
        <?php 
        include("registro.php");
        ?>
        <script>
            Swal.fire(
            'Las contraseñas no coinciden!',
            'Verifica tus datos',
            'error'
            )
        </script>
        <?php 
        exit();
    }
        include_once 'model/db.php';
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password =$_POST["password"];
        $confirmPass =$_POST["passwordConfirm"];
        
        $verificar_correo= mysqli_query($conexion,"SELECT * FROM $usuario WHERE email='$email' ");
        if(mysqli_num_rows($verificar_correo)>0){
            ?>
            <?php 
            include("registro.php");
            ?>
            <script>
                Swal.fire(
                'EL CORREO YA EXISTE!',
                'Digite otros datos',
                'error'
                )
            </script>
            
            <?php 
            exit();

        }

    
        
        $consulta = "INSERT INTO $usuario(nombre,email,contraseña,confirmar) VALUES ('$nombre','$email','$password','$confirmPass')";
        $resultado = mysqli_query($conexion,$consulta);
        
        //Verificar que los datos no se repitan
        

        if ($resultado == TRUE) {
            ?>
            <?php 
            header('Location: login.php');
            ?>
            <script>
                Swal.fire(
                'Registro exitoso!',
                'Ingresa tus datos',
                'success'
                )
            </script>
            <?php 
        }
         else {
            ?>
            <?php 
             header('Location: registro.php');
    
            ?>
            <script>
                Swal.fire(
                'Error de autenticacion!',
                'error'
                )
            </script>
            <?php 
        }

    
    
?>