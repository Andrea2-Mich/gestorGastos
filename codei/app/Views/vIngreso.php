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
                    <th>ELIMINAR PERFIL</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $id_usuario; ?></td>
                    <td><?php echo $correo_electronico; ?></td>
                    <td><?php echo $contrasenia; ?></td>
                    <td><a type="button"
                            href="<?php echo base_url();?>/Home/eliminarRegistro/<?php echo $usuario['id_usuario']; ?>">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <form method="POST" action="../Home/buscarRegistro_us">
            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
            <button type="submit">Actualizar Datos</button>
        </form>
    </div>
</body>

</html>