<?php include 'template/validarsesion.php'; ?>

<?php include 'template/header.php'; ?>


<?php
/*Se llama el archivo de conexion a la base de datos*/
include_once "model/conexion.php";

$sentencia = $bd->query("select * from persona");
$persona = $sentencia->fetchall(PDO::FETCH_OBJ);
//print_r($persona)


?>

<div class="container-fluid pt-5">
  <div class="row">
    <div class="col-8">
      <p>
        <a type="submit" class="btn-neon" data-bs-toggle="collapse" href="#lista" aria-expanded="false" aria-controls="contentId">
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
          <span id="span4"></span>
          Mostrar Tabla
        </a>

      </p>
      <div class="collapse show" id="lista">
        <div class="card">
          <!--Inicio de alertas-->
          <!--Alerta de llenar todos los campos-->

          <?php
          if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {


          ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> Llena todos los campos.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php

          }

          ?>
          <!--Alerta de registrado-->

          <?php
          if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {


          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Registrado</strong> Se agregaron los datos.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php

          }

          ?>


          <!--Alerta error-->
          <?php
          if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {


          ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error</strong> Vuelve a intentarlo.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php

          }

          ?>
          <!--Alerta editado-->

          <?php
          if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {


          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>EDITADO</strong> Se actualizaron los datos
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php

          }

          ?>
          <!--Alerta eliminado-->

          <?php
          if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {


          ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>ELIMINADO</strong> Se Eliminaron los datos
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php

          }

          ?>

          <!--FIn ALERTAS-->
          <div class="card-header containerTitulo">
            <h2 class="text-center"> LISTA</h2>
          </div>
          <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
              <thead class="p-5">
                <tr class="">
                  <th>#</th>
                  <th>Documento</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Horario</th>
                  <th>Dia</th>
                  <th>Acciones</th>


                </tr>
              </thead>

              <tbody>
                <?php
                foreach ($persona as $dato) {

                ?>
                  <tr>
                    <td scope="row"><?php echo $dato->codigo; ?></td>
                    <td><?php echo $dato->documento; ?></td>
                    <td><?php echo $dato->nombre; ?></td>
                    <td><?php echo $dato->apellido; ?></td>
                    <td><?php echo $dato->horario; ?></td>
                    <td><?php echo $dato->dia; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>

          </div>
          <div class="card-footer text-muted">
            Footer
          </div>
        </div>
      </div>
    </div>

    <div class="col-4">
      <p>
        <button class=" btn-neon" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false" aria-controls="contentId">
          Registrar
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
          <span id="span4"></span>
          Ingresar
        </button>

      </p>
      <div class="collapse" id="contentId">
        <div class="card">
          <div class="card-header containerTitulo">
            <div class="card-title text-center ">
              <h5 class="">REGISTRAR</h5>
            </div>
          </div>
          <div class="card-body">
            <form class="row g-3 needs-validation formulario" method="post" action="registrar.php">
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Documento</label>
                <input type="number" class="form-control" name="txtDocumento" id="validationCustom01" value="1000251160">
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txtNombre" id="validationCustom01" value="Mark">

              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="txtApellido" id="validationCustom02" value="Otto">

              </div>

              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Dia</label>
                <select class="form-select" name="txtTime">
                  <option selected disabled value="">Seleccionar Hora</option>
                  <option>08:00</option>
                  <option>14:00</option>


                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Dia</label>
                <select class="form-select" id="validationCustom04" name="txtDia">
                  <option selected disabled value="">Seleccionar</option>
                  <option>Lunes</option>
                  <option>Martes</option>
                  <option>Miercoles</option>

                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-12">
                <input type="hidden" name="oculto" value="1">
                <button class="btn btn-danger" type="submit">Enviar Datos</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

<?php include 'template/footer.php'; ?>


<!-- Bootstrap JavaScript Libraries -->