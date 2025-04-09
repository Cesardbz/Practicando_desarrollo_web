
<?php include('header.php'); ?>
<main>
    <div class="container">
        <h1>Bienvenido a la Página Principal Clientes</h1>
        <p>Contenido de la página principal Clientes</p>

        <h2>Registrarse</h2>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" required>
                <br><br>
            </div>
    
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <br><br>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <br><br>
            </div>

            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone">
                <br><br>
            </div>

            <div class="form-group">
                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address">
                <br><br>
            </div>

            <div class="form-group">
                <input type="submit" value="Registrarse">
                <br><br>
            </div>
        </form>

        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </div>
</main>
<?php include('footer.php'); ?>