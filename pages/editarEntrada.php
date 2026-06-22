<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
  <style>
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
    <button class="app-link fw-semibold" onclick="saveEntry()" style="background:none; border:none; font-size:.9rem;">Guardar</button>
  </div>

  <!-- Content -->
  <div class="content-area">
    <div class="entry-date-small mb-3">Martes, 13 de junio, 2026</div>

    <div class="d-flex align-items-baseline gap-2 mb-3">
      <input class="entry-title-input" id="entry-title" placeholder="Título" value="Título">
      <span class="time-badge">23:59</span>
    </div>

    <textarea class="entry-body" id="entry-body" placeholder="Escribe tu entrada aquí..."></textarea>

    <!-- Photo strip -->
    <div class="photo-strip mt-3 mb-2">
      <div class="photo-add" onclick="addPhoto()">+</div>
    </div>
  </div>

  <!-- Formatting toolbar -->
  <div class="toolbar-row">
    <div class="editor-toolbar">
      <button class="tool-btn flat" title="Adjunto" onclick="addPhoto()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
        </svg>
      </button>
      <button class="tool-btn flat" title="Foto">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
          <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg>
      </button>
      <button class="tool-btn" title="Negritas" onclick="formatText('bold')"><b>B</b></button>
      <button class="tool-btn" title="Cursiva" onclick="formatText('italic')"><i>I</i></button>
      <button class="tool-btn" title="Subrayado" onclick="formatText('underline')"><u>U</u></button>
    </div>
  </div>

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

function addPhoto() {
  const strip = document.querySelector('.photo-strip');
  const img = document.createElement('img');
  img.src = 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=150&h=150&fit=crop';
  img.className = 'photo-thumb';
  img.alt = 'foto';
  strip.appendChild(img);
}
</script>
</body>
</html>
