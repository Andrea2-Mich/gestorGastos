<!DOCTYPE html>

<head>
    <title>Ingreso</title>
</head>

<body>
    <div class="container">
        <h1>Registro actual de ingreso</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>CONTRASEÑA</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $id_usuario; ?></td>
                    <td><?php echo $correo_electronico; ?></td>
                    <td><?php echo $contrasenia; ?></td>
                </tr>
            </tbody>
        </table>
        <form method="POST" action="../Home/buscarRegistro_us">
            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
            <button type="submit">Actualizar Datos</button>
        </form>
        <br><br>
        <a href="..Home/"></a>
        <br><br>
        <a type="button" href="../Home/eliminarRegistro_us/<?php echo $id_usuario; ?>">Eliminar perfil</a>
    </div>
</body>

</html>