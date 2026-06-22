<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
  <style>
    .screen { padding-bottom: 0; }
    .content-area { flex: 1; overflow-y: auto; padding: 16px 20px 32px; }
    .entry-image {
      width: 100%; border-radius: 12px;
      object-fit: cover; max-height: 220px;
      margin: 16px 0;
    }
  </style>
</head>
<body>
<div class="screen">

  <!-- Top bar -->
  <div class="d-flex align-items-center justify-content-between px-4 pt-4 pb-2">
    <a href="inicio.php" class="btn-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
      </svg>
    </a>
    <div class="d-flex gap-3 align-items-center">
      <a href="entry-edit.html" class="icon-btn" title="Editar">
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
    window.location.href = 'home.html';
  }
}
</script>
</body>
</html>
0