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
                        <form class="row g-3 needs-validation" method="POST" action="<?= base_url('/sucursal/store') ?>" novalidate>
    <?= csrf_field() ?>

    <!-- RUC -->
    <div class="col-md-6">
        <label for="RUC" class="form-label">RUC</label>
        <input type="text" class="form-control" id="RUC" name="RUC" pattern="[0-9]{11}" required>
        <div class="invalid-feedback">El RUC debe tener exactamente 11 dígitos numéricos.</div>
    </div>

    <!-- Sucursal -->
    <div class="col-md-6">
        <label for="sucursal" class="form-label">Sucursal</label>
        <input type="text" class="form-control" id="sucursal" name="sucursal" required>
    </div>

    <!-- Actividad Económica -->
    <div class="col-md-6">
        <label for="actividad_economica" class="form-label">Actividad Económica</label>
        <input type="text" class="form-control" id="actividad_economica" name="actividad_economica" required>
    </div>

    <!-- Distrito -->
    <div class="col-md-6">
        <label for="iddistrito" class="form-label">Distrito (ID)</label>
        <input type="number" class="form-control" id="iddistrito" name="iddistrito" required>
    </div>

    <!-- Direccion -->
    <div class="col-md-6">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
    </div>

    <!-- Referencia -->
    <div class="col-md-6">
        <label for="referencia" class="form-label">Referencia</label>
        <input type="text" class="form-control" id="referencia" name="referencia" required>
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
document.getElementById("ruc").addEventListener("blur", function() {
    let ruc = this.value.trim();
    if(ruc.length === 11){
        fetch(`/sucursal/buscar-ruc/${ruc}`)
            .then(res => res.json())
            .then(data => {
                if(data.error){
                    alert(data.error);
                } else {
                    document.getElementById("sucursal").value = data.razon_social || "";
                    document.getElementById("actividad").value = data.actividad_economica || "";
                    document.getElementById("direccion").value = data.direccion || "";
                    document.getElementById("distrito").value = data.distrito || "";
                }
            })
            .catch(err => console.error(err));
    }
});
</script>

</body>
</html>
