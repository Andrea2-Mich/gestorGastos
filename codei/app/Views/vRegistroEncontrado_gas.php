<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Registro encontrado</h1>
        <form method="POST" action="../Home/actualizarRegistro_gas">
            <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario;?>">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoia">
                <option value="" selected disabled hidden>-- Seleccione --</option>
                <option value="Alimentacion">Alimentacion</option>
                <option value="Vestimenta">Vestimenta</option>
                <option value="Transporte">Transporte</option>
                <option value="Entretenimiento">Entretenimiento</option>
                <option value="Salud">Salud</option>
            </select>
            <br><br>
            <label for="monto">Monto $</label>
            <input type="text" name="monto" value="<?php echo $monto; ?>">
            <br><br>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" value="<?php echo $fecha; ?>">
            <br><br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
            <br><br>
            <button type="submit">Actualizar Gasto</button>
        </form>
    </div>
</body>

</html>