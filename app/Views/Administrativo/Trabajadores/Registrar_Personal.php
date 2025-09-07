<?= $header ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="pc-container">


        <div class="content-wrapper">
            <div class="container my-3">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Registro de Personas</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <!-- Información Personal -->
                            <h6 class="fw-bold text-primary">Información Personal</h6>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                                        <label for="nombres">Nombres</label>
                                        <div class="invalid-feedback">Ingrese nombres válidos.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                        <label for="apellidos">Apellidos</label>
                                        <div class="invalid-feedback">Ingrese apellidos válidos.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="tipo_documento" name="tipo_documento" required>
                                            <option value="">Seleccionar</option>
                                            <option value="dni">DNI</option>
                                            <option value="pasaporte">Pasaporte</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                        <label for="tipo_documento">Tipo de Documento</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" required>
                                        <label for="numero_documento">Número de Documento</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="genero" name="genero" required>
                                            <option value="">Seleccionar</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                        <label for="genero">Género</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select id="departamentos" class="form-select" required>
                                            <option value="">Seleccionar Departamento</option>
                                            <!-- Opciones dinámicas -->
                                        </select>
                                        <label for="departamentos">Departamento</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select id="provincias" class="form-select" required>
                                            <option value="">Seleccionar Provincia</option>
                                        </select>
                                        <label for="provincias">Provincia</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select id="distritos" class="form-select" required>
                                            <option value="">Seleccionar Distrito</option>
                                        </select>
                                        <label for="distritos">Distrito</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                                        <label for="direccion">Dirección</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="referencia" name="referencia">
                                        <label for="referencia">Referencia</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Datos Laborales -->
                            <h6 class="fw-bold text-primary">Datos Laborales</h6>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="estado_civil" required>
                                            <option value="">Seleccionar</option>
                                            <option value="soltero">Soltero</option>
                                            <option value="casado">Casado</option>
                                            <option value="divorciado">Divorciado</option>
                                            <option value="viudo">Viudo</option>
                                        </select>
                                        <label for="estado_civil">Estado Civil</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="area" required>
                                            <option value="">Seleccionar</option>
                                            <option value="calidad">Calidad</option>
                                            <option value="logistica">Logística</option>
                                            <option value="administracion">Administración</option>
                                        </select>
                                        <label for="area">Área</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="cargo" required>
                                            <option value="">Seleccionar</option>
                                            <option value="analista_datos">Analista de Datos</option>
                                            <option value="analista_jr">Analista Jr</option>
                                        </select>
                                        <label for="cargo">Cargo</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="sueldo_base" required>
                                        <label for="sueldo_base">Sueldo Base</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fecha_inicio" required>
                                        <label for="fecha_inicio">Fecha Inicio</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fecha_fin" required>
                                        <label for="fecha_fin">Fecha Fin</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select id="tipo_contrato" class="form-select" required>
                                            <option value="">Seleccionar</option>
                                            <option value="indeterminado">Indeterminado</option>
                                            <option value="plazo_fijo">Plazo Fijo</option>
                                            <option value="modalidad_formativa">Modalidad Formativa</option>
                                        </select>
                                        <label for="tipo_contrato">Tipo Contrato</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select id="sistema_pensiones" class="form-select" required>
                                            <option value="">Seleccionar</option>
                                            <option value="onp">ONP</option>
                                            <option value="afp">AFP</option>
                                        </select>
                                        <label for="sistema_pensiones">Sistema de Pensiones</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cuspp" required>
                                        <label for="cuspp">N° CUSPP</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="parentescos" placeholder="Ej: Esposa, Hijos" required>
                                    <label for="parentescos">Parentescos</label>
                                </div>
                            </div>

                            <!-- Botones -->
                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?= $footer ?>
    </div>

    <!-- Bootstrap 5 validation -->
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>
