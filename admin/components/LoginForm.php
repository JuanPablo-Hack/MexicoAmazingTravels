<div class="az-signin-wrapper">
    <div class="az-card-signin">
        <h1 class="az-logo">AdminPanel</h1>
        <div class="az-signin-header">
            <h2>Bienvenido de nuevo!</h2>
            <h4>Por favor inicia sesión para continuar</h4>
            <form action="../controllers/Login.php" method="POST">
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" placeholder="Ingresa tu correo" name="email">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password">
                </div>
                <button class="btn btn-az-primary btn-block" type="submit">Iniciar Sesión</button>
            </form>
        </div>
        <div class="az-signin-footer">
            <p><a href="">Olvidaste la contraseña?</a></p>
        </div>
    </div>
</div>