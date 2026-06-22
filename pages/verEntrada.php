<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
  <style>
    /* ===== RESET: ELIMINAR MAX-WIDTH DE .SCREEN EN ESCRITORIO ===== */
    @media (min-width: 992px) {
      .screen {
        max-width: 100% !important;
        padding: 0 !important;
        background: var(--bg-dark);
      }
    }
    
    .screen { padding-bottom: 0; }
    .content-area { flex: 1; overflow-y: auto; padding: 16px 20px 32px; }
    .entry-image {
      width: 100%; border-radius: 12px;
      object-fit: cover; max-height: 220px;
      margin: 16px 0;
    }
    
    /* ===== TOP BAR - BOTÓN IZQUIERDA, ACCIONES DERECHA ===== */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 18px 8px 18px;
      width: 100%;
    }
    .top-bar .left {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .top-bar .btn-back {
      flex-shrink: 0;
    }
    .top-bar .title {
      font-weight: 700;
      font-size: 1.1rem;
      margin: 0;
      color: var(--text-primary);
    }
    .top-bar .actions {
      display: flex;
      gap: 12px;
      align-items: center;
    }
    .top-bar .icon-btn {
      background: none;
      border: none;
      color: var(--text-muted);
      cursor: pointer;
      padding: 4px;
      font-size: 1.1rem;
      transition: color 0.15s;
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    .top-bar .icon-btn:hover {
      color: var(--purple-light);
    }
    .top-bar .icon-btn.danger:hover {
      color: var(--danger);
    }
    .top-bar .icon-btn svg {
      width: 20px;
      height: 20px;
    }
    
    /* ===== RESPONSIVE: TABLET ===== */
    @media (min-width: 768px) and (max-width: 991.98px) {
      .screen {
        max-width: 90% !important;
        margin: 0 auto;
      }
      .content-area {
        padding: 24px 28px 36px;
      }
      .top-bar {
        padding: 20px 24px 12px 24px;
      }
      .top-bar .btn-back {
        width: 40px;
        height: 40px;
      }
      .top-bar .btn-back svg {
        width: 18px;
        height: 18px;
      }
      .top-bar .title {
        font-size: 1.3rem;
      }
      .top-bar .icon-btn svg {
        width: 22px;
        height: 22px;
      }
      .entry-image {
        max-height: 300px;
      }
      .entry-content {
        font-size: 1rem;
      }
    }
    
    /* ===== RESPONSIVE: ESCRITORIO ===== */
    @media (min-width: 992px) {
      .content-area {
        padding: 30px 40px 40px;
        width: 100%;
        max-width: 95% !important;
        margin: 0 auto;
      }
      .top-bar {
        padding: 24px 40px 16px 40px;
        max-width: 95% !important;
        margin: 0 auto;
      }
      .top-bar .btn-back {
        width: 44px;
        height: 44px;
      }
      .top-bar .btn-back svg {
        width: 20px;
        height: 20px;
      }
      .top-bar .title {
        font-size: 1.4rem;
      }
      .top-bar .icon-btn svg {
        width: 24px;
        height: 24px;
      }
      .top-bar .actions {
        gap: 16px;
      }
      .entry-image {
        max-height: 400px;
        border-radius: 16px;
      }
      .entry-content {
        font-size: 1.05rem;
        line-height: 1.8;
      }
      .entry-content h1 {
        font-size: 2rem;
      }
      /* Navbar ocupa 100% del ancho */
      .app-navbar {
        max-width: 100% !important;
        border-radius: 0;
        padding: 14px 0 10px;
        width: 100%;
      }
    }
    
    /* ===== ESCRITORIO GRANDE ===== */
    @media (min-width: 1200px) {
      .content-area {
        padding: 40px 60px 50px;
        max-width: 95% !important;
      }
      .top-bar {
        padding: 28px 60px 20px 60px;
        max-width: 95% !important;
      }
      .top-bar .btn-back {
        width: 48px;
        height: 48px;
      }
      .top-bar .btn-back svg {
        width: 22px;
        height: 22px;
      }
      .top-bar .title {
        font-size: 1.6rem;
      }
      .top-bar .icon-btn svg {
        width: 26px;
        height: 26px;
      }
      .top-bar .actions {
        gap: 20px;
      }
      .entry-image {
        max-height: 500px;
      }
      .entry-content {
        font-size: 1.1rem;
        line-height: 1.9;
      }
      .entry-content h1 {
        font-size: 2.2rem;
      }
      .app-navbar {
        padding: 16px 0 12px;
      }
      .nav-item svg {
        font-size: 1.5rem;
      }
      .nav-item span {
        font-size: 0.8rem;
      }
    }
  </style>
</head>
<body>
<div class="screen">

  <!-- Top bar - BOTÓN IZQUIERDA, TÍTULO CENTRADO, ACCIONES DERECHA -->
  <div class="top-bar">
    <div class="left">
      <a href="inicio.php" class="btn-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
      </a>
      
    </div>
    <div class="actions">
      <a href="editarEntrada.php" class="icon-btn" title="Editar">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
        </svg>
      </a>
      <button class="icon-btn danger" title="Eliminar" onclick="confirmDelete()">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Content -->
  <div class="content-area">
    <div style="font-size:.78rem; color:var(--text-muted);">Martes, 13 de junio, 2026</div>

    <div class="d-flex align-items-baseline justify-content-between mt-2 mb-3">
      <h1 style="font-size:1.6rem; font-weight:700; margin:0;">Título</h1>
      <span style="font-size:.78rem; color:var(--text-muted);">23:59</span>
    </div>

    <div class="entry-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut nisl tristique, interdum felis nec, commodo nibh. Morbi vel quam velit. Cras non interdum mauris, vel varius lectus.</p>
    </div>

    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=800&h=400&fit=crop"
         class="entry-image" alt="foto de entrada">

    <div class="entry-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <ul>
        <li>Cras ut nisl tristique, interdum felis nec, commodo nibh. Morbi vel quam velit.</li>
        <li>Cras non interdum mauris, vel varius lectus.</li>
      </ul>
    </div>
  </div>

</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
function confirmDelete() {
  if (confirm('¿Eliminar esta entrada?')) {
    window.location.href = 'inicio.php';
  }
}
</script>
</body>
</html>