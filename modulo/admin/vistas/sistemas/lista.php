<div class="page-body">

  <div class="container-xl d-flex flex-column justify-content-center">
  
    <div class="col-12">

      <div class="card">

        <div class="table-responsive">
  
          <table id="example" class="display table-vcenter" style="width:100%">
  
            <thead>
              <tr>
                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices">Todos</td>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Url</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($sistemas as $fila): ?>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></td>
                  <td><?php echo $fila['ide_mod']; ?></td>
                  <td><?php echo $fila['nom_mod']; ?></td>
                  <td><?php echo $fila['des_mod']; ?></td>
                  <td><?php echo $fila['url_mod']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>

        </div>

      </div>

    </div>

  </div>