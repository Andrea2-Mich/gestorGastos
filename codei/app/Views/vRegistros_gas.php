<?php
    $id_usuario = $_POST['id_usuario'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registros</title>
</head>

<body>
    <div class="container">
        <h1>Registros actuales</h1>
        <table>
            <thread>
                <tr>
                    <th>ID USUARIO</th>
                    <th>CATEGORIA</th>
                    <th>MONTO</th>
                    <th>FECHA</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thread>
            <tbody>
                <?php                                
                 foreach ($gastos as $gastos ){                      
                     if($gastos['id_usuario'] == $id_usuario){?>
                <tr>
                    <td><?php echo $gastos['id_usuario']; ?></td>
                    <td><?php echo $gastos['categoria']; ?></td>
                    <td><?php echo $gastos['monto']; ?></td>
                    <td><?php echo $gastos['fecha']; ?></td>
                    <td><?php echo $gastos['descripcion']; ?></td>
                    <td>
                        <a type="button" href="../Home/buscarRegistro_gas/<?php echo $gastos['id_gasto']; ?>">Modificar
                            gasto</a>
                    </td>
                    <td>
                        <a type="button"
                            href="../Home/eliminarRegistro_gas/<?php echo $gastos['id_gasto']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
        <br><br>
        <!--
        <a href="../Home/registro_gas"><button type="submit">Ingresar Nuevo Registro</button></a>
-->
        <form method="POST" action="../Home/registro_gas">
            <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario?>">
            <button type="submit">Ingresar Nuevo Gasto</button>
        </form>

    </div>
</body>

</html>