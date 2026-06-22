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
    .content-area { flex: 1; overflow-y: auto; padding: 16px 18px 24px; }
    .entry-title-input {
      background: none; border: none; color: var(--text-primary);
      font-size: 1.6rem; font-weight: 700; width: 100%;
      outline: none; padding: 0; margin-bottom: 4px;
    }
    .entry-title-input::placeholder { color: var(--text-muted); }
    .entry-body {
      background: none; border: none; color: var(--text-secondary);
      font-size: 0.9rem; line-height: 1.7; width: 100%;
      min-height: 180px; resize: none; outline: none; padding: 0;
    }
    .entry-body::placeholder { color: var(--text-muted); }
    .entry-date-small { font-size: 0.78rem; color: var(--text-muted); }
    .time-badge {
      font-size: 0.75rem; color: var(--text-muted);
      margin-left: auto;
    }
    .toolbar-row {
      padding: 12px 18px 20px;
      border-top: 1px solid var(--border-color);
      background: var(--bg-dark);
    }
    
    /* ===== TOP BAR - ALINEACIÓN IZQUIERDA ===== */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 18px 8px 18px;
    }
    .top-bar .btn-back {
      flex-shrink: 0;
    }
    .top-bar .btn-save {
      background: none;
      border: none;
      color: var(--purple-light);
      font-weight: 600;
      font-size: 0.9rem;
      cursor: pointer;
      transition: color 0.2s;
    }
    .top-bar .btn-save:hover {
      color: #fff;
    }
    
    /* ===== TOOLBAR CENTRADO ===== */
    .editor-toolbar {
      display: flex;
      gap: 10px;
      justify-content: center;
      flex-wrap: wrap;
    }
    
    /* ===== INPUT DE ARCHIVO OCULTO ===== */
    .file-input-hidden {
      display: none;
    }
    
    /* ===== RESPONSIVE: TABLET ===== */
    @media (min-width: 768px) and (max-width: 991.98px) {
      .screen {
        max-width: 90% !important;
        margin: 0 auto;
      }
      .content-area {
        padding: 24px 28px 32px;
      }
      .top-bar {
        padding: 20px 24px 12px 24px;
      }
      .entry-title-input {
        font-size: 1.8rem;
      }
      .entry-body {
        font-size: 1rem;
        min-height: 220px;
      }
      .toolbar-row {
        padding: 16px 24px 24px;
      }
      .tool-btn {
        width: 42px;
        height: 42px;
        font-size: 1rem;
      }
    }
    
    /* ===== RESPONSIVE: ESCRITORIO ===== */
    @media (min-width: 992px) {
      .content-area {
        padding: 30px 40px 40px;
        width: 100%;
        max-width: 100% !important;
      }
      .top-bar {
        padding: 24px 40px 16px 40px;
        max-width: 100% !important;
      }
      .top-bar .btn-back {
        width: 44px;
        height: 44px;
      }
      .top-bar .btn-back svg {
        width: 20px;
        height: 20px;
      }
      .top-bar .btn-save {
        font-size: 1rem;
      }
      .entry-title-input {
        font-size: 2rem;
      }
      .entry-body {
        font-size: 1.05rem;
        line-height: 1.8;
        min-height: 280px;
      }
      .entry-date-small {
        font-size: 0.85rem;
      }
      .time-badge {
        font-size: 0.85rem;
      }
      .toolbar-row {
        padding: 20px 40px 28px;
        max-width: 100% !important;
      }
      .tool-btn {
        width: 46px;
        height: 46px;
        font-size: 1.1rem;
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
      }
      .top-bar {
        padding: 28px 60px 20px 60px;
      }
      .top-bar .btn-back {
        width: 48px;
        height: 48px;
      }
      .top-bar .btn-back svg {
        width: 22px;
        height: 22px;
      }
      .top-bar .btn-save {
        font-size: 1.1rem;
      }
      .entry-title-input {
        font-size: 2.2rem;
      }
      .entry-body {
        font-size: 1.1rem;
        line-height: 1.9;
        min-height: 320px;
      }
      .toolbar-row {
        padding: 24px 60px 32px;
      }
      .tool-btn {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
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

  <!-- Top bar -->
  <div class="top-bar">
    <a href="inicio.php" class="btn-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
      </svg>
    </a>
    <button class="btn-save" onclick="saveEntry()">Guardar</button>
  </div>

  <!-- Content -->
  <div class="content-area">
    <div class="entry-date-small mb-3">Martes, 13 de junio, 2026</div>

    <div class="d-flex align-items-baseline gap-2 mb-3">
      <input class="entry-title-input" id="entry-title" placeholder="Título" value="Título">
      <span class="time-badge">23:59</span>
    </div>

    <textarea class="entry-body" id="entry-body" placeholder="Escribe tu entrada aquí..."></textarea>
  </div>

  <!-- Formatting toolbar - CENTRADO -->
  <div class="toolbar-row">
    <div class="editor-toolbar">
      <!-- Input de archivo oculto para imágenes -->
      <input type="file" id="imageInput" class="file-input-hidden" accept="image/*" onchange="handleImageUpload(event)">
      
      <!-- Icono de imagen que abre el explorador de archivos -->
      <button class="tool-btn flat" title="Insertar imagen" onclick="document.getElementById('imageInput').click()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
          <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
        </svg>
      </button>
      
      <button class="tool-btn" title="Negritas" onclick="formatText('bold')"><b>B</b></button>
      <button class="tool-btn" title="Cursiva" onclick="formatText('italic')"><i>I</i></button>
      <button class="tool-btn" title="Subrayado" onclick="formatText('underline')"><u>U</u></button>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="app-navbar">
    <a href="inicio.php" class="nav-item active">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6-.088.087V14.5A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5V7.232l-.088-.087-6-6zM6 14v-3h4v3H6zm-1 0H3.5a.5.5 0 0 1-.5-.5V7.32l5-4.999 5 4.999V13.5a.5.5 0 0 1-.5.5H11v-3a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v3z"/>
      </svg>
      <span>Inicio</span>
    </a>
    <a href="editarEntrada.php" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
      <span>Nueva</span>
    </a>
    <a href="tareas.php" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
        <path d="M5.5 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zm.5 3a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zm0 3a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zm0 3a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6z"/>
        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"/>
      </svg>
      <span>Tareas</span>
    </a>
  </nav>
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
function saveEntry() {
  const title = document.getElementById('entry-title').value.trim();
  if (!title) {
    document.getElementById('entry-title').style.borderBottom = '2px solid var(--danger)';
    return;
  }
  window.location.href = 'inicio.php';
}

function formatText(cmd) {
  const ta = document.getElementById('entry-body');
  const start = ta.selectionStart, end = ta.selectionEnd;
  const sel = ta.value.substring(start, end);
  if (!sel) return;
  const tags = { bold: ['**','**'], italic: ['_','_'], underline: ['<u>','</u>'] };
  const [o, c] = tags[cmd];
  ta.value = ta.value.substring(0, start) + o + sel + c + ta.value.substring(end);
}

function handleImageUpload(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      const imageUrl = e.target.result;
      const ta = document.getElementById('entry-body');
      const start = ta.selectionStart;
      const end = ta.selectionEnd;
      const imageMarkdown = `![${file.name}](${imageUrl})`;
      ta.value = ta.value.substring(0, start) + imageMarkdown + ta.value.substring(end);
    };
    reader.readAsDataURL(file);
  }
  // Resetear el input para permitir seleccionar el mismo archivo nuevamente
  event.target.value = '';
}
</script>
</body>
</html>