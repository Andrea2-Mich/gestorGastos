<?php
    $id_usuario = $_POST['id_usuario'];
?>
<!DOCTYPE html>

<head>
    <title>Success</title>
</head>

<body>
    <div class="container">
        <p>Se ha registrado el gasto, con numero identificador: <?php echo $idRegistrado; ?></p>

        <form method="POST" action="../Home/mostrarRegistros_gas">
            <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario; ?> ">
            <button type="submit">Mostrar gastos</button>
        </form>
    </div>
</body>

</html>