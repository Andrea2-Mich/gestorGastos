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
                    
                    <th>FECHA</th>
                    <th>DESCRIPCION</th>
                    <th>CATEGORIA</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($gastos as $gastos ){ ?>
                <tr>
                    <td><?php echo $gastos['id_usuario']; ?></td>
                    <td><?php echo $gastos['monto']; ?></td>
                    <td><?php echo $gastos['fecha']; ?></td>
                    <td><?php echo $gastos['descripcion']; ?></td>
                    <td><?php echo $gastos['categoria']; ?></td>
                    <td><a type="button" href="<?php echo base_url();?>/Home/eliminarRegistro_gas/<?php echo $gastos['id_gasto']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>