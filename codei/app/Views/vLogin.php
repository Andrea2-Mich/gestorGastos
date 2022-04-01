<!DOCTYPE html>

<head>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1>Ingreso de usuario registrado</h1>
        <form action="../Home/ingresarForm_us" method="POST">
            <label for="correo_electronico">Correo Electronico</label>
            <input type="email" name="correo_electronico" id="correo_electronico" placeholder="email@example.com">
            <br><br>
            <label for="contrasenia">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia">
            <br>
            <button type="submit">Ingresar</button>
        </form>

        <a type="button" href="../Home/registro_us">Crear Cuenta</a>
    </div>
</body>

</html>