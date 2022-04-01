<?php
    $id_usuario = $_POST['id_usuario'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registro de Gatos</title>
</head>

<body>
    <div class="container">
        <h1>Registro de nuevos gastos</h1>
        <form action="../Home/insertarForm_gas" method="POST">
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
            <input type="text" name="monto" id="monto" placeholder="Ingrese numeros">
            <br><br>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha">
            <br><br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="Describa el gasto">


            <br><br>
            <button type="submit">Registrar nuevo gasto </button>
        </form>
    </div>
</body>

</html>