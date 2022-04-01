<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Registro encontrado</h1>
        <form method="POST" action="../Home/actualizarRegistro_gas">
           <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario;?>">
            <label for="monto">Monto</label>
            <input type="texto" name="monto" value="<?php echo $monto; ?>">
            <br><br>
            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" value="<?php echo $fecha; ?>">
            <br><br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
            <br><br>
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" value="<?php echo $categoria; ?>">
            <br><br>
            <button type="submit">Actualizar Gasto</button>
        </form>
    </div>
</body>

</html>