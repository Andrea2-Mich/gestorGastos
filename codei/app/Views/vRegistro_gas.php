<!DOCTYPE html>
<html>

<head>
    <title>Registro de Gatos</title>
</head>

<body>
    <div class="container">
        <h1>Registro de nuevos gastos</h1>
        <form action="../Home/insertarForm_gas" method="POST">
            <label for="monto">Monto</label>
            <input type="text" name="monto" id="monto">
            <br>
            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" id="fecha">
            <br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion">
            <br>
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria">
            <br>
            <button type="submit">Registrar nuevo gasto </button>
        </form>
    </div>
</body>

</html>