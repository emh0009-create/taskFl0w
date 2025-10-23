<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TaskFlow - Tareas</title>
</head>
  <style>
    :root { --container-max: 900px; --accent-1: #2575fc; --accent-2: #2575fc; }
    .container { max-width: var(--container-max); margin: 0 auto; padding: 0 1rem; }

    header { background: linear-gradient(90deg, var(--accent-1), var(--accent-2)); color: #fff; padding: 1.15rem 0; box-shadow: 0 6px 18px rgba(37,117,252,0.12); border-bottom: 1px solid rgba(255,255,255,0.08); }
    header .container { display: flex; align-items: center; justify-content: space-between; }
    header h1 { font-size: 1.5rem; margin: 0; letter-spacing: 0.4px; font-weight: 600; }
    header p.lead { margin: 0; opacity: 0.9; font-size: 0.92rem; }

    h2 { font-size: 1.25rem; margin-top: 1.25rem; color: #1f2937; }

    ul { list-style: none; padding: 0; margin: 0.5rem 0; }
    .task-item { display: block; padding: 0.6rem 0.8rem; border-radius: 8px; margin-bottom: 0.6rem; background: #f8fafc; color: #0f172a; border: 1px solid #e6eef8; transition: transform .08s ease, box-shadow .08s ease; }
    .task-item:hover { transform: translateY(-2px); box-shadow: 0 6px 14px rgba(15,23,42,0.06); }
    .task-item.completed { opacity: 0.65; text-decoration: line-through; background: #f1f5f9; border-color: #dbe7f6; }

    .task-item.priority-alta { box-shadow: inset 6px 0 0 rgba(217,83,79,0.12); }
    .task-item.priority-media { box-shadow: inset 6px 0 0 rgba(240,173,78,0.12); }
    .task-item.priority-baja { box-shadow: inset 6px 0 0 rgba(91,192,222,0.12); }

    @media (max-width: 480px) {
      .task-item { padding: 0.55rem; font-size: 0.95rem; }
      header h1 { font-size: 1.15rem; }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>TaskFlow</h1>
    </div>
  </header>
  <main>
