<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/estiloRegistro.css"


  </head>
  <body>
      <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                            <div class="card-header containerTitulo">
                                <div class="card-title">
                                    <h1 class="text-center pt-3"> Registro</h1>
                                </div>
                            </div>
                            <div class="card-body containerBody">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <form action="registrarNuevo.php" method="post" class="formulario" >
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6">
                                                        <div class="form-outline mb-4 ">
                                                        <label class="form-label">Nombre de Usuario</label>
                                                            <input type="text" name="nombre" class="form-control text" placeholder="Escriba su correo" />
                                                        </div>
                                                    </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-6">
                                                                    <div class="form-outline mb-4">
                                                                    <label class="form-label">Email</label>
                                                                        <input type="email" name="email" class="form-control text"  placeholder="Contraseña" />
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-6">
                                                                    <div class="form-outline mb-4">
                                                                    <label class="form-label">Contraseña</label>
                                                                        <input type="password" name="password" class="form-control text"  placeholder="Contraseña" />
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                    <div class="form-outline mb-4">
                                                                    <label class="form-label">Confirmar Contraseña</label>
                                                                        <input type="password" name="passwordConfirm" class="form-control text"  placeholder="Contraseña" />
                                                                    </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                    <input type="hidden" name="oculto" value="1">
                                                    
                                                    <button type="submit"  class="btn-neon">
                                                        <span id="span1"></span>
                                                        <span id="span2"></span>
                                                        <span id="span3"></span>
                                                        <span id="span4"></span>
                                                        Registrar
                                                    </button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
      </div>
    

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>