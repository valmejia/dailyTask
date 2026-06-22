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
    .task-row {
      display: flex; align-items: stretch; gap: 12px; margin-bottom: 10px;
    }
    .task-time-col {
      min-width: 44px; display: flex; align-items: center;
      justify-content: flex-end;
    }
    .task-time-label {
      font-size: 0.72rem; color: rgba(255,255,255,0.6);
      background: var(--purple-main);
      padding: 4px 7px; border-radius: 6px; white-space: nowrap;
    }
    .task-line-col {
      width: 2px; background: var(--purple-main);
      border-radius: 2px; flex-shrink: 0; margin: 2px 0;
    }
    .task-content-col { flex: 1; }
    
    /* ===== TOP BAR - ALINEACIÓN IZQUIERDA ===== */
    .top-bar {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 16px 18px 8px 18px;
    }
    .top-bar .btn-back {
      flex-shrink: 0;
    }
    .top-bar h2 {
      font-weight: 700;
      font-size: 1.25rem;
      margin: 0;
    }
    
    /* ===== RESPONSIVE: TABLET ===== */
    @media (min-width: 768px) and (max-width: 991.98px) {
      .screen {
        max-width: 90% !important;
        margin: 0 auto;
      }
      .content-area {
        padding: 20px 24px;
      }
      .top-bar {
        padding: 20px 24px 12px 24px;
      }
      .top-bar h2 {
        font-size: 1.4rem;
      }
      .task-time-label {
        font-size: 0.78rem;
        padding: 5px 9px;
      }
      .task-item {
        padding: 14px 18px;
        font-size: 0.95rem;
      }
      .task-item.sub {
        font-size: 0.88rem;
      }
      .task-row {
        gap: 16px;
      }
      .cal-strip {
        padding: 0 24px;
      }
    }
    
    /* ===== RESPONSIVE: ESCRITORIO ===== */
    @media (min-width: 992px) {
      .content-area {
        padding: 30px 40px;
        width: 100%;
        max-width: 100% !important;
      }
      .top-bar {
        padding: 24px 40px 16px 40px;
        gap: 16px;
      }
      .top-bar h2 {
        font-size: 1.5rem;
      }
      .top-bar .btn-back {
        width: 40px;
        height: 40px;
      }
      .top-bar .btn-back svg {
        width: 18px;
        height: 18px;
      }
      .task-time-label {
        font-size: 0.82rem;
        padding: 6px 10px;
      }
      .task-item {
        padding: 16px 20px;
        font-size: 1rem;
        border-radius: 12px;
      }
      .task-item.sub {
        font-size: 0.92rem;
      }
      .task-row {
        gap: 18px;
        margin-bottom: 12px;
      }
      .task-time-col {
        min-width: 52px;
      }
      .task-line-col {
        width: 3px;
      }
      /* Navbar ocupa 100% del ancho */
      .app-navbar {
        max-width: 100% !important;
        border-radius: 0;
        padding: 14px 0 10px;
        width: 100%;
      }
      /* Calendario adaptado al 100% */
      .cal-strip {
        padding: 0 40px;
        max-width: 100% !important;
      }
      .cal-day {
        padding: 10px 8px;
        font-size: 0.9rem;
        flex: 1;
        text-align: center;
      }
      .cal-day .dow {
        font-size: 0.75rem;
      }
      .cal-day .num {
        font-size: 1.2rem;
        font-weight: 600;
      }
      /* UNA SOLA COLUMNA */
      .tasks-container {
        display: flex;
        flex-direction: column;
        gap: 0;
        width: 100%;
      }
    }
    
    /* ===== ESCRITORIO GRANDE ===== */
    @media (min-width: 1200px) {
      .content-area {
        padding: 40px 60px;
      }
      .top-bar {
        padding: 28px 60px 20px 60px;
      }
      .top-bar h2 {
        font-size: 1.6rem;
      }
      .task-time-label {
        font-size: 0.88rem;
        padding: 7px 12px;
      }
      .task-item {
        padding: 18px 24px;
        font-size: 1.05rem;
      }
      .task-item.sub {
        font-size: 0.96rem;
      }
      .task-row {
        gap: 20px;
        margin-bottom: 14px;
      }
      .task-time-col {
        min-width: 58px;
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
      .cal-strip {
        padding: 0 60px;
      }
      .cal-day {
        padding: 12px 10px;
        font-size: 1rem;
      }
      .cal-day .dow {
        font-size: 0.8rem;
      }
      .cal-day .num {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>
<div class="screen">

  <!-- Top bar - ALINEACIÓN IZQUIERDA -->
  <div class="top-bar">
    <a href="inicio.php" class="btn-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
      </svg>
    </a>
    <h2>Tareas</h2>
  </div>

  <!-- Calendar strip -->
  <div class="cal-strip mb-3">
    <div class="cal-day"><div class="dow">L</div><div class="num">12</div></div>
    <div class="cal-day active"><div class="dow">M</div><div class="num">13</div></div>
    <div class="cal-day"><div class="dow">M</div><div class="num">14</div></div>
    <div class="cal-day"><div class="dow">J</div><div class="num">15</div></div>
    <div class="cal-day"><div class="dow">V</div><div class="num">16</div></div>
    <div class="cal-day"><div class="dow">S</div><div class="num">17</div></div>
    <div class="cal-day"><div class="dow">D</div><div class="num">18</div></div>
  </div>

  <!-- Tasks list with timeline - UNA SOLA COLUMNA -->
  <div class="content-area" id="tasks-list">
    <div class="tasks-container">
      <!-- Task items will be rendered here -->
      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>

      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item sub">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>

      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>

      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item sub">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>

      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>

      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item sub">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>

      <div class="task-row">
        <div class="task-time-col"><span class="task-time-label">23:59</span></div>
        <div class="task-line-col"></div>
        <div class="task-content-col">
          <div class="task-item">tarea <span style="margin-left:auto;">›</span></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="app-navbar">
    <a href="inicio.php" class="nav-item">
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
    <a href="tareas.php" class="nav-item active">
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
function addTask() {
  const container = document.querySelector('.tasks-container');
  const now = new Date();
  const time = now.getHours().toString().padStart(2,'0') + ':' + now.getMinutes().toString().padStart(2,'0');
  const taskName = prompt('Nombre de la tarea:');
  if (!taskName) return;

  const row = document.createElement('div');
  row.className = 'task-row';
  row.innerHTML = `
    <div class="task-time-col"><span class="task-time-label">${time}</span></div>
    <div class="task-line-col"></div>
    <div class="task-content-col">
      <div class="task-item">${taskName} <span style="margin-left:auto;">›</span></div>
    </div>
  `;
  container.appendChild(row);
}
</script>
</body>
</html>