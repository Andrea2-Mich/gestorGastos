<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuarios</title>
</head>

<body>
    <div class="container">
        <h1>Registro de usuario nuevo</h1>
        <form action="../Home/insertarForm_us" method="POST">
            <label for="correo_electronico">correo</label>
            <input type="email" name="correo_electronico" id="correo_electronico" placeholder="email@example.com">
            <br>
            <label for="contrasenia">contrasenia</label>
            <input type="password" name="contrasenia" id="contrasenia">
            <br>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>