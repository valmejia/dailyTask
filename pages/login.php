<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
  <style>
    /* Reset completo para login */
    .login-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 20px 24px;
      background: var(--bg-dark);
    }
    
    /* Cabecera fija en la parte superior */
    .login-header {
      flex-shrink: 0;
      padding-top: 10px;
    }
    
    /* Botón de regresar más a la izquierda */
    .login-header .btn-back-wrapper {
      margin-left: -12px;
      margin-bottom: 16px;
    }
    
    .login-header .btn-back {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--accent-back);
      border: none;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 1rem;
      flex-shrink: 0;
      text-decoration: none;
      transition: background 0.2s;
    }
    
    .login-header .btn-back:hover {
      background: var(--purple-main);
      color: #fff;
    }
    
    .login-header .btn-back svg {
      width: 16px;
      height: 16px;
    }
    
    /* Títulos alineados a la izquierda con padding extra */
    .login-header .app-name {
      font-size: 1.8rem;
      font-weight: 300;
      color: var(--text-primary);
      margin-bottom: 0;
      line-height: 1.2;
      letter-spacing: -0.5px;
      padding-left: 4px;
    }
    
    .login-header .app-title {
      font-size: 2rem;
      font-weight: 700;
      line-height: 1.2;
      margin: 0;
      padding-left: 4px;
    }
    
    /* Contenido del formulario - con padding para alinear con los títulos */
    .login-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      max-width: 100%;
      margin: 0 auto;
      padding-left: 4px;
    }
    
    /* Footer con botón siempre abajo */
    .login-footer {
      flex-shrink: 0;
      width: 100%;
      max-width: 100%;
      margin: 0 auto;
      padding-bottom: 20px;
      padding-left: 4px;
    }
    
    /* Todos los elementos alineados a la izquierda */
    .login-content .field-label,
    .login-content .app-input,
    .login-content .input-wrapper,
    .login-content .text-end,
    .login-content .d-flex {
      width: 100%;
    }
    
    .login-content .text-end {
      text-align: right;
    }
    
    /* ===== RESPONSIVE: MÓVIL ===== */
    @media (max-width: 767px) {
      /* Bajar el botón con padding-top */
      .login-header {
        padding-top: 20px;
      }
      /* Separación entre el botón y el texto */
      .login-header .btn-back-wrapper {
        margin-bottom: 60px;
      }
      /* Reducir padding superior del wrapper para compensar */
      .login-wrapper {
        padding-top: 0;
      }
    }
    
    /* ===== RESPONSIVE: TABLET ===== */
    @media (min-width: 768px) {
      .login-wrapper {
        padding: 30px 48px;
      }
      .login-header .btn-back-wrapper {
        margin-left: -16px;
        margin-bottom: 28px;
      }
      .login-header .btn-back {
        width: 40px;
        height: 40px;
      }
      .login-header .btn-back svg {
        width: 18px;
        height: 18px;
      }
      .login-header .app-name {
        font-size: 2.2rem;
        padding-left: 6px;
      }
      .login-header .app-title {
        font-size: 2.5rem;
        padding-left: 6px;
      }
      .login-content {
        padding-left: 6px;
      }
      .login-footer {
        padding-left: 6px;
      }
      .app-input {
        padding: 16px 18px;
        font-size: 1.05rem;
      }
      .btn-primary-app {
        padding: 18px;
        font-size: 1.1rem;
      }
    }
    
    /* ===== RESPONSIVE: ESCRITORIO ===== */
    @media (min-width: 992px) {
      .login-wrapper {
        padding: 40px 64px;
      }
      .login-header .btn-back-wrapper {
        margin-left: -20px;
        margin-bottom: 32px;
      }
      .login-header .btn-back {
        width: 44px;
        height: 44px;
      }
      .login-header .btn-back svg {
        width: 20px;
        height: 20px;
      }
      .login-header .app-name {
        font-size: 2.8rem;
        padding-left: 8px;
      }
      .login-header .app-title {
        font-size: 3rem;
        padding-left: 8px;
      }
      .login-content {
        padding-left: 8px;
      }
      .login-footer {
        padding-left: 8px;
      }
      .app-input {
        padding: 18px 20px;
        font-size: 1.1rem;
      }
      .btn-primary-app {
        padding: 20px;
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
<div class="login-wrapper">

  <!-- Cabecera fija en la parte superior -->
  <div class="login-header">
    <!-- Botón de regresar más a la izquierda -->
    <div class="btn-back-wrapper">
      <a href="index.php" class="btn-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
      </a>
    </div>

    <!-- Títulos alineados a la izquierda con padding extra -->
    <p class="app-name">Daily Task</p>
    <h1 class="app-title">Bienvenido<br>de vuelta!</h1>
  </div>

  <!-- Contenido del formulario (centrado verticalmente) -->
  <div class="login-content">
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
    </div>
  </div>

  <!-- Footer con botón (siempre abajo) -->
  <div class="login-footer">
    <a href="inicio.php" class="btn-primary-app mt-2">Iniciar sesión</a>
    <p class="text-center mb-0 mt-3" style="font-size:.88rem; color:var(--text-muted);">
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