<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Registro encontrado</h1>
        <form method="POST" action="../Home/actualizarRegistro_us">
            <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario;?>">
            <label for="correo_electronico">Correo</label>
            <input type="email" name="correo_electronico" value="<?php echo $correo_electronico; ?>">
            <br><br>
            <label for="contrasenia">Contraseña</label>
            <input type="password" name="contrasenia" value="<?php echo $contrasenia; ?>">
            <br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>

</html>