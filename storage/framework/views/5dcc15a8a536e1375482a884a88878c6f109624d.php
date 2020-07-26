<html>
    <body>
    <form action="<?php echo e(route("alumnoactividades.store")); ?>" method="POST">
        <div class="form-goup">
            <label for="NomActividad">Nombre del la Actividad</label>
            <input class="form-control" type="text" name="nombreActividad">
        </div>
        <div class="form-goup">
            <label for="Nombre_Alumno">Nombre del Alumno</label>
            <input class="from-control" type="text" name="Alumno">
        </div>
        <div>
            <label for="form-goup">Apellidos</label>
            <input class="form-control" type="text" name="Apellidos">
        </div>
        <div>
            <label for="edad">Edad</label>
            <input class="form-control" type="number" name="Edad">
        </div>
        <div>
            <label for="form-goup">N actividades pendientes</label>
            <input class="form-control" type="number" name="Num_actividad">
        </div>
        <div>
            <label for="form-goup">FechaEntrega</label>
            <input class="form-control" type="date" name="fechaEntrega">
        </div>
        <div>
            <label for="form-goup">Calificacion</label>
            <input class="form-control" type="number" name="califucaciones">
        </div>
        <div>
            <label for="form-goup">Descripcion del trabajo</label>
            <input class="form-control" type="text" name="description">
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\proyecto_BD_AMurillo\resources\views/alumno/formulario.blade.php ENDPATH**/ ?>