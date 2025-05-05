<?php
// Inicia el echo para el formulario

echo '
<form method="POST" role="form" class="row g-4 justify-content-center form-custom" action="t4p2.php">

    <div class="col-md-5">
        <label for="sueldobru" class="form-label fw-bold">Sueldo bruto</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control custom-input" id="sueldobru"
            aria-describedby="inputGroupPrepend1" required name="sueldobru">
        </div>
    </div>

    <div class="col-md-5">
        <label for="pagoxhoras" class="form-label fw-bold">Ingreso por horas extras</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control custom-input" id="pagoxhoras"
            aria-describedby="inputGroupPrepend2" required name="pagoxhoras">
        </div>
    </div>

    <div class="col-12 text-center mt-3">
        <button class="btn btn-primary custom-btn me-2" type="submit" name="boton">Calcular Salario</button>
        <button type="reset" class="btn btn-outline-secondary custom-btn">Limpiar casillas</button>
    </div>

</form>';
// Finaliza el echo para el formulario
?>
