    <?php  include 'template/header.php'; ?>

      <div class="container-fluid pt-5">
        <div class="row">
          <div class="col-8">
          <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#lista" aria-expanded="false" aria-controls="contentId">
              Show
            </a>
          </p>
          <div class="collapse" id="lista">
          <div class="card">
              <div class="card-header">
                <h2 class="text-center"> LISTA</h2>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td scope="row"></td>
                      <td></td>
                      <td></td>
                    </tr>
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
                <p >
                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
                      aria-controls="contentId">
                    Registrar
                  </button>
                </p>
                <div class="collapse" id="contentId">
                    <div class="card">
                      <div class="card-header">
                          <div class="card-title text-center">
                            Registrar
                          </div>
                      </div>
                      <div class="card-body">
                          <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                              <label for="validationCustom01" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                              
                            </div>
                            <div class="col-md-6">
                              <label for="validationCustom02" class="form-label">Apellido</label>
                              <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                             
                            </div>
                            
                            <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Horario</label>
                              <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Seleccionar</option>
                                <option>8 am / 12 am</option>
                                <option>2 pm / 6 pm</option>

                              </select>
                              <div class="invalid-feedback">
                                Please select a valid state.
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="validationCustom04" class="form-label">Dia</label>
                              <select class="form-select" id="validationCustom04" required>
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
                              <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                          </form>
                      </div>
                      
                    </div>
                </div>
          </div>
        </div>
        
      </div>

    <?php  include 'template/footer.php'; ?>


    <!-- Bootstrap JavaScript Libraries -->
   