<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body>

  <div class="container-fluid g-0 overflow-hidden vh-100 ">

    <div class=" d-flex flex-column m-4 p-0 h-100 ">

      <a href="index.php" class="btn-back ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
      </a>

      <div class="ms-4 me-4 mt-2">
          <!-- Header -->
        <p class="mb-2" style="font-size:1.85rem;">Daily Task</p>
        <h1 class="fw-bold mb-5" style="font-size:2rem;">Regístrate</h1>

        <!-- Form -->
        <div class="d-flex flex-column gap-4" id="reg-form">

          <div>
            <label class="field-label">Nombre completo</label>
            <div class="input-wrapper">
              <input type="text" class="app-input" id="name" placeholder="Tu nombre">
              <span class="input-icon-danger d-none" id="name-err-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
              </span>
            </div>
            <div class="field-error d-none" id="name-err">Ingresa tu nombre completo</div>
          </div>

          <div>
            <label class="field-label">Correo</label>
            <div class="input-wrapper">
              <input type="email" class="app-input" id="email" placeholder="correo@ejemplo.com">
              <span class="input-icon-danger d-none" id="email-err-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
              </span>
            </div>
            <div class="field-error d-none" id="email-err">Ingresa un correo válido</div>
          </div>

          <div>
            <label class="field-label">Contraseña</label>
            <div class="input-wrapper">
              <input type="password" class="app-input" id="pwd" placeholder="••••••••" style="padding-right:44px;">
              <span class="icon-right" onclick="togglePwd()">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" id="eye-icon" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
              </span>
            </div>
            <div class="field-error d-none" id="pwd-err">La contraseña debe tener al menos 6 caracteres</div>
          </div>

          <div class="d-flex align-items-center gap-3 mt-2">
            <input type="checkbox" class="app-check" id="terms">
            <label for="terms" style="font-size:.88rem; color:var(--text-secondary); cursor:pointer;">
              Acepto términos y condiciones
            </label>
          </div>
          <div class="field-error d-none" id="terms-err">Debes aceptar los términos</div>
        </div>

        <div class="d-flex align-items-center row gap-3 justify-content-end mt-4">
            <button class="btn-primary-app " onclick="validateForm()">Crear cuenta</button>

            <p class="text-center mb-0" style="font-size:.88rem; color:var(--text-muted);">
              ¿Ya tienes una cuenta?&nbsp;
              <a href="login.php" class="app-link">Iniciar sesión</a>
            </p>
        </div>
      </div>


      
    </div>

  </div>
    

  </div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
function togglePwd() {
  const input = document.getElementById('pwd');
  input.type = input.type === 'password' ? 'text' : 'password';
}

function validateForm() {
  let valid = true;

  const fields = [
    { id: 'name', errId: 'name-err', errIconId: 'name-err-icon', check: v => v.trim().length > 1 },
    { id: 'email', errId: 'email-err', errIconId: 'email-err-icon', check: v => /\S+@\S+\.\S+/.test(v) },
    { id: 'pwd', errId: 'pwd-err', errIconId: null, check: v => v.length >= 6 },
  ];

  fields.forEach(f => {
    const input = document.getElementById(f.id);
    const err = document.getElementById(f.errId);
    const errIcon = f.errIconId ? document.getElementById(f.errIconId) : null;
    if (!f.check(input.value)) {
      err.classList.remove('d-none');
      if (errIcon) errIcon.classList.remove('d-none');
      input.style.borderColor = 'var(--danger)';
      valid = false;
    } else {
      err.classList.add('d-none');
      if (errIcon) errIcon.classList.add('d-none');
      input.style.borderColor = '';
    }
  });

  const terms = document.getElementById('terms');
  const termsErr = document.getElementById('terms-err');
  if (!terms.checked) {
    termsErr.classList.remove('d-none');
    valid = false;
  } else {
    termsErr.classList.add('d-none');
  }

  if (valid) window.location.href = 'inicio.php';
}
</script>
</body>
</html>
