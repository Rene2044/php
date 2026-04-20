<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Dark Glass</title>
    <style>
        :root {
            --primary: #00d2ff;
            --secondary: #3a7bd5;
            --bg-dark: #0f172a;
            --glass: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        body {
            background: radial-gradient(circle at top right, #1e293b, #0f172a);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .dashboard {
            width: 100%;
            max-width: 900px;
            background: var(--glass);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .status-badge {
            background: rgba(0, 210, 255, 0.1);
            color: var(--primary);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            border: 1px solid var(--primary);
        }

        .grid-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            padding: 20px;
            border-radius: 16px;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.06);
        }

        .stat-card h3 {
            font-size: 0.9rem;
            color: #94a3b8;
            margin-bottom: 10px;
        }

        .stat-card .value {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .project-list {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 16px;
            overflow: hidden;
        }

        .project-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            border-bottom: 1px solid var(--glass-border);
        }

        .project-item:last-child { border: none; }

        .progress-bar {
            width: 100px;
            height: 6px;
            background: #334155;
            border-radius: 3px;
            align-self: center;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <?php
        // Datos simulados para el dashboard
        $proyectos = [
            ["nombre" => "Sistema de Inventario", "progreso" => 85],
            ["nombre" => "API de Pagos", "progreso" => 40],
            ["nombre" => "Rediseño UI/UX", "progreso" => 100],
            ["nombre" => "Optimización SQL", "progreso" => 15]
        ];

        $total_proyectos = count($proyectos);
        $completados = 0;
        foreach ($proyectos as $p) { if ($p['progreso'] == 100) $completados++; }
    ?>

    <div class="dashboard">
        <header>
            <div>
                <h1>Panel de Desarrollo</h1>
                <p style="color: #94a3b8;">Resumen de actividad semanal</p>
            </div>
            <span class="status-badge">Sistema Online</span>
        </header>

        <div class="grid-stats">
            <div class="stat-card">
                <h3>Total Proyectos</h3>
                <div class="value"><?php echo $total_proyectos; ?></div>
            </div>
            <div class="stat-card">
                <h3>Completados</h3>
                <div class="value"><?php echo $completados; ?></div>
            </div>
            <div class="stat-card">
                <h3>Uptime</h3>
                <div class="value">99.9%</div>
            </div>
        </div>

        <h2 style="margin-bottom: 20px; font-size: 1.2rem;">Proyectos Activos</h2>
        <div class="project-list">
            <?php foreach ($proyectos as $proyecto): ?>
                <div class="project-item">
                    <span><?php echo $proyecto['nombre']; ?></span>
                    <div style="display: flex; gap: 15px;">
                        <span style="font-size: 0.85rem; color: #94a3b8;"><?php echo $proyecto['progreso']; ?>%</span>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: <?php echo $proyecto['progreso']; ?>%"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>
