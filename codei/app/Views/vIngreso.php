<!DOCTYPE html>

<head>
    <title>Ingreso</title>
</head>

<body>
    <div class="container">
        <h1>Bienvenido al control de gastos</h1>

        <fieldset>
            <h3>Datos de Usuario</h3>
            <?php echo $correo_electronico; ?>
            <br>
            <?php echo $contrasenia; ?>
        </fieldset>
        <br>
        <form method="POST" action="../Home/buscarRegistro_us">
            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
            <button type="submit">Actualizar Datos</button>
        </form>

        <a href="..Home/mostrarRegistros_gas/<?php echo $id_usuario; ?>"><button type="submit">Ver Gastos</button></a>
        <br><br>
        <br><br>
        <a href="../Home/eliminarRegistro_us/<?php echo $id_usuario; ?>"><button type="submit">Eliminar
                Usuario</button></a>
    </div>
</body>

</html>