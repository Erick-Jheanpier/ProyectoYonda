<?= $header ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="pc-container">


    <!-- Contenedor principal -->
    <div class="content-body">
      <div class="container my-4">
        <h4 class="fw-bold mb-3">OTROS TIPOS DE PAPELETAS</h4>

        <!-- Encabezado -->
        <div class="card shadow-sm mb-3">
          <div class="card-header bg-light fw-semibold">
            Solicitud de:
            <select class="form-select" aria-label="Default select example">
              <option value="1">DESCANSO MEDICO</option>
              <option value="2">CUMPELAÑOS</option>
              <option value="3">LICENCIA DE MATERNIDAD</option>
              <option value="4">LICENCIA DE PATERNIDAD</option>
              <option value="5">LICENCIA CON GOCE DE HABER</option>
              <option value="6">LICENCIA SIN GOCE DE HABER</option>
              <option value="7">ADELANTO DE VACACIONES</option>
            </select>
          </div>

          <!-- Datos de solicitud -->
          <div class="card-body">
            <h6 class="mb-3">
              <i class="bi bi-file-earmark-text"></i> Datos de solicitud
            </h6>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="fechaInicial" class="form-label">Fecha inicial</label>
                <input type="date" class="form-control" id="fechaInicial" value="2025-08-18" />
              </div>
              <div class="col-md-6">
                <label for="fechaFinal" class="form-label">Fecha final</label>
                <input type="date" class="form-control" id="fechaFinal" value="2025-08-25" />
              </div>

              <div class="col-md-6">
                <label for="horaInicial" class="form-label">Hora inicial</label>
                <input type="time" class="form-control" id="horaInicial" value="08:00" />
              </div>
              <div class="col-md-6">
                <label for="horaFinal" class="form-label">Hora final</label>
                <input type="time" class="form-control" id="horaFinal" value="18:00" />
              </div>

              <!-- Archivo -->
              <div class="col-12">
                <label for="archivoAdjunto" class="form-label">Adjuntar archivo</label>
                <input class="form-control" type="file" id="archivoAdjunto" />
              </div>
            </div>
          </div>
        </div>

        <!-- Motivo -->
        <div class="card shadow-sm mb-3">
          <div class="card-body">
            <label for="motivo" class="form-label">Motivo de solicitud:</label>
            <textarea class="form-control" id="motivo" rows="3" maxlength="200"
              placeholder="Cantidad máxima de caracteres: 200"></textarea>
            <div class="mt-3 d-flex gap-2">
              <button class="btn btn-primary">Guardar</button>
              <button class="btn btn-secondary">Nuevo</button>
            </div>
          </div>
        </div>

        <!-- Sección de solicitudes -->
        <div class="card shadow-sm">
          <div class="card-header bg-light fw-semibold">Solicitudes</div>
          <div class="card-body">
            <p class="text-muted">
              Aquí se mostrarán las solicitudes registradas.
            </p>
          </div>
        </div>
      </div>
    </div>

    
  <?= $footer ?>

</body>

</html>