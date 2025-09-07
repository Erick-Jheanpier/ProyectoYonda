<?= $header ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="pc-container">


    <!-- Contenido principal -->
    <div class="content-wrapper">
      <section class="content pt-3">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Vigentes</h5>
              <div class="d-flex gap-2">
                <div class="btn-group">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown">Acciones</button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Liquidar</a></li>
                    <li><a class="dropdown-item" href="#">Renovar Contrato</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card-body table-responsive">
              <table id="tabla-empleados" class="table table-bordered table-hover table-sm">
                <thead>
                  <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>Nombre</th>
                    <th>Número de Documento</th>
                    <th>Area</th>
                    <th>Cargo</th>
                    <th>Fecha Ingreso</th>
                    <th>Sueldo Neto</th>
                  </tr>
                  
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><a href="#">Alarcón, Alexander Humberto</a></td>
                    <td>77162916</td>
                    <td>Marketing</td>
                    <td>Analista</td>
                    <td>29-12-2022</td>
                    <td>$1,200.00</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?= $footer ?>
  </div>

  <script>
    $(document).ready(function () {
      let table = $('#tabla-empleados').DataTable({
        paging: true,
        pageLength: 15,
        lengthMenu: [15, 25, 50, 100],
        language: {
          url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
        }
      });

      // Filtro por columna
      $('#tabla-empleados thead tr:eq(1) th').each(function (i) {
        $('input', this).on('keyup change', function () {
          if (table.column(i).search() !== this.value) {
            table.column(i).search(this.value).draw();
          }
        });
      });
    });
  </script>
</body>
</html>
