<?= $header ?>

<div class="pc-container">
  <div class="pcoded-content">
    <div class="row g-4">

      <!-- Columna izquierda: Áreas -->
      <div class="col-lg-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-primary mb-0">Áreas</h5>
              <div class="d-flex">
                <button type="button" class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="modal"
                  data-bs-target="#modalArea">
                  <i class="bi bi-plus-lg"></i> Nueva
                </button>
              </div>
            </div>

            <!-- Tablero -->
            <div class="row g-3" id="tablero-areas">
              <?php if (!empty($areas)): ?>
              <?php foreach ($areas as $a): ?>
              <div class="col-12">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-light fw-bold text-dark">
                    <?= esc($a['area']) ?>
                    <span class="badge bg-primary ms-2">
                      <?= esc($a['sucursal']) ?>
                    </span>
                  </div>
                  <div class="card-body">
                    <p class="small mb-1"><strong>Colaboradores:</strong> 0</p>
                    <p class="small mb-0"><strong>Contratados:</strong> 0</p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
              <?php else: ?>
              <div class="col-12">
                <p class="text-muted">No hay áreas registradas.</p>
              </div>
              <?php endif; ?>
            </div>

            <!-- Paginador -->
            <div class="d-flex justify-content-center mt-3">
              <?= $pager->links() ?>
            </div>



          </div>
        </div>
      </div>

      <!-- Columna derecha: Cargos -->
      <div class="col-lg-8">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-primary mb-0">Cargos</h5>
              <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalCargo">
                <i class="bi bi-plus-lg"></i> Registrar
              </button>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cargos-tab" data-bs-toggle="tab" data-bs-target="#cargos"
                  type="button" role="tab">
                  Lista de Cargos
                </button>
              </li>
            </ul>

            <!-- Contenido Tabs -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="cargos" role="tabpanel">
                <div class="table-responsive">
                  <table id="colaboradoresTable" class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Área</th>
                        <th>Cargo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($cargos)): ?>
                      <?php $i = 1; foreach ($cargos as $c): ?>
                      <tr>
                        <td>
                          <?= $i++ ?>
                        </td>
                        <td>
                          <?= esc($c['area']) ?>
                        </td>
                        <td>
                          <?= esc($c['cargo']) ?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                      <?php else: ?>
                      <tr>
                        <td colspan="3" class="text-center text-muted">No hay cargos registrados.</td>
                      </tr>
                      <?php endif; ?>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- row -->
  </div><!-- pcoded-content -->
</div><!-- pc-container -->

<?= $footer ?>

<!-- Modal Área -->
<div class="modal fade" id="modalArea" tabindex="-1" aria-labelledby="modalAreaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content shadow-sm">
      <form action="<?= base_url('/areas/store') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAreaLabel">Crear Nueva Área</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Sucursal</label>
            <select name="idsucursal" class="form-select" required>
              <option value="">Selecciona</option>
              <?php foreach ($sucursales as $s): ?>
              <option value="<?= $s['idsucursal'] ?>">
                <?= $s['sucursal'] ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="area" class="form-label">Nombre del Área</label>
            <input type="text" class="form-control" name="area" id="area" required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Cargo -->
<div class="modal fade" id="modalCargo" tabindex="-1" aria-labelledby="modalCargoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content shadow-sm">
      <form action="<?= base_url('/cargos/store') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCargoLabel">Registrar Cargo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Área</label>
            <select name="idarea" class="form-select" required>
              <option value="">Selecciona</option>
              <?php foreach ($areas as $a): ?>
              <option value="<?= $a['idarea'] ?>">
                <?= $a['area'] ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="cargo" class="form-label">Nuevo Cargo</label>
            <input type="text" class="form-control" name="cargo" id="cargo" required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Toasts -->
<?php if(session()->getFlashdata('success')): ?>
<div class="toast align-items-center text-bg-success border-0 show position-fixed bottom-0 end-0 m-3" role="alert">
  <div class="d-flex">
    <div class="toast-body">
      <?= session()->getFlashdata('success') ?>
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
  </div>
</div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
<div class="toast align-items-center text-bg-danger border-0 show position-fixed bottom-0 end-0 m-3" role="alert">
  <div class="d-flex">
    <div class="toast-body">
      <?= session()->getFlashdata('error') ?>
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
  </div>
</div>
<?php endif; ?>



<script>
  $(document).ready(function () {
    $('#colaboradoresTable').DataTable({
      responsive: true,
      autoWidth: false,
      language: {
        url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
      },
      pageLength: 5,
      lengthMenu: [5, 10, 25, 50],
    });
  });
</script>