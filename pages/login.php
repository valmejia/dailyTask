<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body>
<div class="screen px-4 py-4">

  <!-- Back -->
  <a href="index.php" class="btn-back mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
    </svg>
  </a>

  <!-- Header -->
  <p class="mb-1" style="font-size:.85rem; color:var(--text-muted);">Nombre app</p>
  <h1 class="fw-bold mb-5" style="font-size:2rem; line-height:1.2;">Bienvenido<br>de vuelta!</h1>

  <!-- Form -->
  <div class="d-flex flex-column gap-4">

    <div>
      <label class="field-label">Correo</label>
      <input type="email" class="app-input" placeholder="correo@ejemplo.com">
    </div>

    <div>
      <label class="field-label">Contraseña</label>
      <div class="input-wrapper">
        <input type="password" class="app-input" id="pwd" placeholder="••••••••" style="padding-right:44px;">
        <span class="icon-right" onclick="togglePwd('pwd', this)">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
            <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z"/>
            <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
          </svg>
        </span>
      </div>
    </div>

    <div class="text-end">
      <a href="#" class="app-link" style="font-size:.85rem;">Olvidaste tu contraseña?</a>
    </div>

    <a href="inicio.php" class="btn-primary-app mt-2">Iniciar sesión</a>

    <p class="text-center mb-0" style="font-size:.88rem; color:var(--text-muted);">
      ¿No tienes una cuenta?&nbsp;
      <a href="signup.php" class="app-link">Regístrate</a>
    </p>
  </div>

</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
function togglePwd(id, icon) {
  const input = document.getElementById(id);
  if (input.type === 'password') {
    input.type = 'text';
    icon.style.opacity = '0.5';
  } else {
    input.type = 'password';
    icon.style.opacity = '1';
  }
}
</script>
</body>
</html>
