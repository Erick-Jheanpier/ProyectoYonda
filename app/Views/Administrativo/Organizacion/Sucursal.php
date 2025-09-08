<?= $header ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="pc-container">
        <div class="content-wrapper p-4">
            <div class="container">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Registro de Sucursal</h5>
                    </div>
                    <div class="card-body">
                        <!-- Formulario -->
                        <form class="row g-3 needs-validation" method="POST" action="<?= base_url('/sucursal/store') ?>"
                            novalidate>
                            <?= csrf_field() ?>


                            <!-- Sucursal -->
                            <div class="col-md-6">
                                <label for="sucursal" class="form-label">Sucursal</label>
                                <input type="text" class="form-control" id="sucursal" name="sucursal" required>
                                <div class="invalid-feedback">Ingrese la sucursal.</div>
                            </div>


                            <!-- Distrito (texto visible) -->
                            <div class="col-md-6">
                                <label for="distrito" class="form-label">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" required>
                                <div class="invalid-feedback">Ingrese el distrito.</div>
                            </div>

                            <!-- Campo oculto para guardar el ID real -->
                            <input type="hidden" id="iddistrito" name="iddistrito">

                            <!-- Dirección -->
                            <div class="col-md-6">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                                <div class="invalid-feedback">Ingrese la dirección.</div>
                            </div>

                            <!-- Referencia -->
                            <div class="col-md-6">
                                <label for="referencia" class="form-label">Referencia</label>
                                <input type="text" class="form-control" id="referencia" name="referencia" required>
                                <div class="invalid-feedback">Ingrese la referencia.</div>
                            </div>

                            <!-- Botón -->
                            <div class="col-12">
                                <button class="btn btn-success" type="submit">Guardar</button>
                                <button class="btn btn-secondary" type="reset">Limpiar</button>
                            </div>
                        </form>
                        <!-- /Formulario -->
                    </div>
                </div>
            </div>
        </div>

        <?= $footer ?>
    </div>

    <!-- Script de validación Bootstrap -->
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    <script>
        document.getElementById("distrito").addEventListener("blur", function () {
            const nombre = this.value.trim();
            if (nombre === "") {
                document.getElementById("iddistrito").value = "";
                return;
            }

            fetch("<?= base_url('/api/getDistritoId') ?>/" + encodeURIComponent(nombre))
                .then(response => response.json())
                .then(data => {
                    if (data.iddistrito) {
                        document.getElementById("iddistrito").value = data.iddistrito;
                    } else {
                        document.getElementById("iddistrito").value = "";
                        alert("⚠️ Distrito no encontrado en la base de datos.");
                    }
                })
                .catch(err => console.error("Error buscando distrito:", err));
        });
    </script>


</body>

</html>